let main_order_page = $('.main_order_page')
let page_statistics = $('.container--page_statistics')

function show_page_analitics(){

    // Получаем текущую дату
    const currentDate = new Date();
    // Устанавливаем день на 0, чтобы перейти к прошлому месяцу
    currentDate.setDate(0);
    // Получаем номер прошлого месяца
    const previousMonth = currentDate.getMonth();
    // Создаем массив со списком названий месяцев
    const months = [
    "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь",
    "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"
    ];
    // Получаем название прошлого месяца
    const previousMonthName = months[previousMonth];

    $(main_order_page).css({'display':'none'})
    $(page_statistics).css({'display':'flex'})
    $(page_statistics).append(`
        <div style="padding-bottom: 0px;" class="balkon-wrapper title-statistic-box">
            <div class="box_back_in_order">
                <button onclick="show_order_book()" type="button"><img style="width:30px" src="/images-catalog/admin_panel/icon-back.png"></button>
            </div>
        </div>
        <div style="padding-bottom:0px; display:flex;" class="">
            <div id="chart_column_div"></div>
            <div class="column_div--right">                        
                <div class="column_div--right__box">
                    <div class="persent_average_title">Заказов за ${previousMonthName}</div>
                    <div id="persent_average_order_interval" class="persent_average_last_month"></div>
                    <div id="persent_average_last_month_order_count" class="persent_average_last_month_count"></div>                                
                </div>
                <div class="column_div--right__box">
                    <div class="persent_average_title">Поступлений за ${previousMonthName}</div>
                    <div id="persent_average_price_interval" class="persent_average_last_month"></div>
                    <div id="persent_average_last_month_price_sum" class="persent_average_last_month_count"></div>                                
                </div>
                <div class="column_div--right__box">
                    <div class="persent_average_title">Быстрота за ${previousMonthName}</div>
                    <div id="persent_average_time_interval" class="persent_average_last_month"></div>
                    <div id="persent_average_last_month_time" class="persent_average_last_month_count"></div>   
                </div>
            </div>
        </div>
        <div style="padding-bottom: 0px; display:none" class="balkon-wrapper">   
            <div class="column_div--circle">                     
                <div class="column_div--circle__box" id="chart_circle_div"></div>
                <div class="column_div--circle__box"></div>
                <div class="column_div--circle__box"></div>
            </div>
        </div>
    `)
    
    // Загрузка библиотеки Google Charts
    google.charts.load('current', {'packages':['corechart', 'bar']});

    // Ожидание загрузки библиотеки
    google.charts.setOnLoadCallback(drawChartColumn);

    //столбчатая диаграмма
    // Функция для отрисовки диаграммы
    function drawChartColumn() {
        $.ajax({
            url: "statistics/get_count_order_on_data.php",
            type: "POST",
            success: function(res) {
                // Посмотреть на статус ответа, если ошибка
                let respond = JSON.parse(res);

                var chartDiv = document.getElementById('chart_column_div');

                // Создание таблицы данных
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Период');
                data.addColumn('number', 'Количество заказов');
                data.addColumn('number', 'Денежные поступления');

                var weeklyData = {}; // Объект для группировки данных по неделям

                for (var i = 0; i < respond.length; i++) {
                    var dateParts = respond[i].day.split('.');
                    var date = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);
                    var weekNumber = getWeekNumber(date);

                    if (!weeklyData[weekNumber]) {
                        weeklyData[weekNumber] = { quantity: 0, received: 0 }; // Обновленная структура данных
                    }

                    weeklyData[weekNumber].quantity += parseInt(respond[i].total_amount);
                    weeklyData[weekNumber].received += parseInt(respond[i].total_price); // Добавлено суммирование "Получено"
                }

                for (var week in weeklyData) {
                    var startDate = getStartDateOfWeek(week);
                    var endDate = getEndDateOfWeek(week);
                    var formattedPeriod = formatDateRange(startDate, endDate);
                
                    data.addRow([formattedPeriod, weeklyData[week].quantity, weeklyData[week].received]); // Обновленная строка данных
                }

                // Настройка параметров диаграммы
                var materialOptions = {
                    width: 850,
                    height: 360,
                    fontSize: 12,
                    legend: {position: 'none'},
                    bar: {groupWidth: '70%'},
                    colors: ['#9575cd', '#33ac71'],
                    chart: {
                    title: 'Заказы и денежные поступления',
                    subtitle: 'График показывает, сколько было заказов и денежных поступлений за неделю'
                    },
                    series: {
                    0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
                    1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
                    },
                    axes: {
                    y: {
                        
                        distance: {label: 'Количество заказов'}, // Left y-axis.
                        brightness: { side: 'right', label: 'Денежные поступления'} // Right y-axis.
                    }
                    }
                };

                // Отрисовка диаграммы с указанными данными и параметрами
                function drawMaterialChart() {
                    var materialChart = new google.charts.Bar(chartDiv);
                    materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
                }
                drawMaterialChart();
            }
        });
    }

    // Функция для определения номера недели
    function getWeekNumber(date) {
        var onejan = new Date(date.getFullYear(), 0, 1);
        return Math.ceil(((date - onejan) / 86400000 + onejan.getDay() + 1) / 7);
    }

    // Функция для получения начальной даты недели
    function getStartDateOfWeek(week) {
        var year = new Date().getFullYear();
        var startDate = new Date(year, 0, (week - 1) * 7 + 1);
        return startDate;
    }

    // Функция для получения конечной даты недели
    function getEndDateOfWeek(week) {
        var year = new Date().getFullYear();
        var endDate = new Date(year, 0, week * 7);
        return endDate;
    }

    // Функция для форматирования периода в виде "дд-дд Месяц ГГг"
    function formatDateRange(startDate, endDate) {
        var startDay = startDate.getDate();
        var startMonth = startDate.getMonth() + 1;
        var startYear = startDate.getFullYear().toString().substr(-2) + 'г';
        var endDay = endDate.getDate();

        return startDay + '-' + endDay + ' ' +  getMonthName(startMonth) + ' ' + startYear;
    }

    // Функция для получения названия месяца
    function getMonthName(month) {
        var monthNames = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
        return monthNames[month - 1];
    }

    // ==============================================================================

    // расчет среднего 

    function a(){
    $.ajax({
        url: "statistics/get_count_order_on_interval_2_month.php",
        type: "POST",
        success: function(res) {
            // Посмотреть на статус ответа, если ошибка
            let respond = JSON.parse(res);

            let sum_order_interval = 0
            let sum_price_interval = 0
            for(let key = 1; key < respond.length; key++){
                sum_order_interval += parseInt(respond[key]['order_interval'])
                sum_price_interval += parseInt(respond[key]['price_interval'])
            } 

            document.getElementById('persent_average_last_month_order_count').innerText = respond[0]['order_interval']
            document.getElementById('persent_average_last_month_price_sum').innerText = respond[0]['price_interval'] + ' ₽'
            // процентная разница для заказа
            let persent_average_order_interval_field = document.getElementById('persent_average_order_interval');
            let persent_average_order_interval = parseInt(get_persent_average(respond[0]['order_interval'], get_average_sum(sum_order_interval, respond.length)));
            persent_average_order_interval_field.innerText = persent_average_order_interval + '%'
            if(persent_average_order_interval > 100){
                $(persent_average_order_interval_field).append(`<img class="icon_persent_average" src="/images-catalog/admin_panel/icon-up.png">`)
                $(persent_average_order_interval_field).css({'color':'green'})
            } else if(persent_average_order_interval < 100){
                $(persent_average_order_interval_field).append(`<img class="icon_persent_average" src="/images-catalog/admin_panel/icon-down.png">`)
                $(persent_average_order_interval_field).css({'color':'red'})
            } else if(persent_average_order_interval = 100){
                $(persent_average_order_interval_field).append(`<img class="icon_persent_average" src="/images-catalog/admin_panel/icon-minus.png">`)
            } 
            // процентная разница для денежных поступлений
            let persent_average_price_interval_field = document.getElementById('persent_average_price_interval');
            let persent_average_price_interval = parseInt(get_persent_average(respond[0]['price_interval'], get_average_sum(sum_price_interval, respond.length)));
            persent_average_price_interval_field.innerText = persent_average_price_interval + '%'
            if(persent_average_price_interval > 100){
                $(persent_average_price_interval_field).append(`<img class="icon_persent_average" src="/images-catalog/admin_panel/icon-up.png">`)
                $(persent_average_price_interval_field).css({'color':'green'})
            } else if(persent_average_price_interval < 100){
                $(persent_average_price_interval_field).append(`<img class="icon_persent_average" src="/images-catalog/admin_panel/icon-down.png">`)
                $(persent_average_price_interval_field).css({'color':'red'})
            } else if(persent_average_price_interval = 100){
                $(persent_average_price_interval_field).append(`<img class="icon_persent_average" src="/images-catalog/admin_panel/icon-minus.png">`)
            } 
    }})

    $.ajax({
        url: "statistics/get_time_interval.php",
        type: "POST",
        success: function(res) {
            // Посмотреть на статус ответа, если ошибка
            let respond = JSON.parse(res);

            let sum_time_interval = 0
            for(let key = 1; key < respond.length; key++){
                sum_time_interval += parseInt(respond[key]['time_interval'])
                
            } 
            document.getElementById('persent_average_last_month_time').innerText = parseInt(respond[0]['time_interval']) + ' д.'        
            // среднее время выполнения заказа
            let persent_average_time_interval_field = document.getElementById('persent_average_time_interval');
            let persent_average_time_interval = parseInt(get_persent_average(parseInt(respond[0]['time_interval']), get_average_sum(sum_time_interval, respond.length)));
            persent_average_time_interval_field.innerText = persent_average_time_interval + '%'
            if(persent_average_time_interval < 100){
                $(persent_average_time_interval_field).append(`<img class="icon_persent_average" src="/images-catalog/admin_panel/icon-up.png">`)
                $(persent_average_time_interval_field).css({'color':'green'})
            } else if(persent_average_time_interval > 100){
                $(persent_average_time_interval_field).append(`<img class="icon_persent_average" src="/images-catalog/admin_panel/icon-down.png">`)
                $(persent_average_time_interval_field).css({'color':'red'})
            } else if(persent_average_time_interval = 100){
                $(persent_average_time_interval_field).append(`<img class="icon_persent_average" src="/images-catalog/admin_panel/icon-minus.png">`)
            } 
    }})
    }
    a()
    // нахождение среднего значения за 3 месяца
    function get_average_sum(sum, count){  
        let average_sum = sum / (count - 1)
        return average_sum;
    }

    // нахождение процента разницы последнего месяца и трех средних
    function get_persent_average(last_month, average_sum_month){    
    let persent_average = last_month * 100 / average_sum_month
    return persent_average;
    }
}

function show_order_book(){
    $(main_order_page).css({'display':'flex'})
    $(page_statistics).css({'display':'none'})
    $(page_statistics).children().remove();
}
