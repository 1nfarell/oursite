let id_table_status_search = $('#status-container');
let id_title_date_status = $('#title_date_status');
let id_adress_montazh = $('#adress_montazh');
let id_date_montazh = $('#date_montazh');
let id_status_detail = $('#status--detail');

function table_status_body(respond){
    let arr = "";
    arr = arr + '\
            <div class="balkon-wrapper balkon-wrapper--column table_request--title_status-container">\
            <div class="balkon-wrapper--row table_request--title_status-box">\
                <span class="span_bold table_request--title_status">Статус:</span>\
                <span class="span_bold table_request--title_status title_status--color">'+`${respond[0]['order__status']}`+'</span>\
                <span class="span_bold table_request--title_status title_status--color">'+`${respond[0]['time_last_status']}`+'</span>\
            </div>\
            <div class="table_request--text_message">\
                <span id="message_main_order"></span>\
            </div>\
            <div class="balkon-wrapper--row table_request--dot">\
                <div  class="dot dot-in"></div>\
                <div  class="dot_line"></div>\
                <div  class="dot"></div>\
                <div  class="dot_line"></div>\
                <div  class="dot"></div>\
                <div  class="dot_line"></div>\
                <div  class="dot"></div>\
            </div>\
            <div class="balkon-wrapper--row table_request--status_name">\
                <span>В обработке</span>\
                <span>Сборка</span>\
                <span class="dostavka_gotov">Доставка</span>\
                <span>Выполнен</span>\
            </div></div>'
    return arr;
}

function title_date_status_body(respond){
    let arr = "";
    arr = arr + '<div class="balkon-wrapper--row table_request--order-dateof">\
        <span>Заказ от</span>\
        <span>'+`${respond[0]['today_date_order']}`+'</span>\
        </div>'
    return arr;
}

function adress_montazh(respond){
    let arr = "";
    arr = arr + '\
        <div class="table_request--detail_order_title span_bold">Детали заказа:</div>\
            <div class="table_request--detail_order_container"> \
                <div class="table_request--icon">\
                    <img class="icon-adress" src="/images/icon-adress.png">\
                </div>\
                <div class="table_request--detail_order_box">\
                    <span class="span_bold">Доставка по адресу:</span>\
                    <span>'+`${respond[0]['adress_order']}`+'</span>\
                </div>\
            </div>\
        </div>'
    return arr;
}

function date_montazh(date_montazh_format){
    let arr = "";
    arr = arr + '<div class="table_request--icon">\
            <img class="icon-adress" src="/images/icon-time-to-adress.png">\
        </div>\
        <div class="table_request--detail_order_box">\
            <span class="span_bold">Дата доставки:</span>\
            <span>'+`${date_montazh_format}`+'</span>\
        </div>'
    return arr;
}

function getTable(respond, date_montazh_format){ 
    $(id_table_status_search).append(`${table_status_body(respond)}`);
    $(id_title_date_status).append(`${title_date_status_body(respond)}`);
    $(id_adress_montazh).append(`${adress_montazh(respond)}`);    
    $(id_date_montazh).append(`${date_montazh(date_montazh_format)}`);

    
    let dot = document.querySelectorAll('.dot'); 
    let table_dot = document.querySelector('.table_request--dot');
    let table_status_name = document.querySelector('.table_request--status_name');
    let table_status_detail = document.querySelector('#status--detail');
    let message_main_order = document.querySelector('#message_main_order');
    let qr_box = document.querySelector('.qr_box');
    let status_name_gotov = document.querySelector('.dostavka_gotov');

    if(respond[0]['order__status'] == 'В обработке'){
            $(dot).addClass(function (index) {
                if (index < 1) return "dot-in";});
            $(message_main_order).text('Благодарим вас за покупку! Ваш заказ № '+`${respond[0]['number_order']}`+' принят в обработку. Спасибо, что выбираете нас!');
            $(qr_box).css({"visibility":"hidden"})
    }   else if(respond[0]['order__status'] == 'Сборка'){
            $(dot).addClass(function (index) {
                if (index < 2) return "dot-in";});
            $(message_main_order).text('Уважаемый клиент, мы рады сообщить, что приступили к Вашему заказу. Спасибо, что выбираете нас!');
            $(qr_box).css({"visibility":"hidden"})
    }   else if(respond[0]['order__status'] == 'Доставка'){
            $(dot).addClass(function (index) {
                if (index < 3) return "dot-in";});
            $(message_main_order).text('Уважаемый клиент, мы рады сообщить, что Ваш заказ собран и совсем скоро будет доставлен. Спасибо, что выбираете нас!'); 
            $(qr_box).css({"visibility":"visible"}) 
    }   else if(respond[0]['order__status'] == 'Готово к отгрузке'){
            $(dot).addClass(function (index) {
                if (index < 3) return "dot-in";});
            $(message_main_order).text('Уважаемый клиент, мы рады сообщить, что Ваш заказ готов к выдачи. Забрать заказ можно в рабочие дни с 9:00 до 17:00. Спасибо, что выбираете нас!'); 
            $(qr_box).css({"visibility":"visible"}) 
            $(status_name_gotov).css({"width":"125px"})
            $(status_name_gotov).text('Готово к отгрузке')
    }   else if(respond[0]['order__status'] == 'Выполнен') {
            $(dot).addClass(function (index) {
                if (index < 4) return "dot-in";});
            $(message_main_order).append(`Благодарим вас за покупку! <a style="color: steelblue;" href='https://clck.ru/34Ph9X'>Оставьте отзыв на купленные товары</a> и вы поможете другим покупателям с выбором.`);   
            $(qr_box).css({"visibility":"visible"})
    }   else if(respond[0]['order__status'] == 'Отменен') {
        $(table_dot).remove();
        $(table_status_name).remove();
        $(table_status_detail).remove();
        $(message_main_order).text('Заказ № '+`${respond[0]['number_order']}`+' аннулирован. Приносим извинения за доставленные неудобства. По всем вопросам: 8 (937) 730-7007');
        $(qr_box).css({"visibility":"hidden"})
    };
}

function getTableRemove(){ 
    $(id_table_status_search).children().remove();
    $(id_title_date_status).children().remove();
    $(id_adress_montazh).children().remove();    
    $(id_date_montazh).children().remove();
}

function set_date_order(respond){
    if(respond[0]['date_montazh'] == null){                    
                        
        date_montazh_format = "00.00.0000";

        getTable(respond, date_montazh_format);
        
        $(id_date_montazh).children().hide();                    
        
    } else {
        var date_montazh = new Date(respond[0]['date_montazh']);
        date_montazh_format = date_montazh.toLocaleDateString() + " с 09:00 до 17:00 (известим о точном времени по телефону за день до доставки)";
        getTable(respond, date_montazh_format);
    }
    
    setTimeout(() => {       
    alert('Спасибо, что пользуетесь нашими услугами!', 'success')
    }, 3000); 
}

(function ($) {  
    //вывод при заходе по ссылке
    var search = window.location.search;
    var paramsStr = search.slice(1);
    paramsStr = paramsStr.split('&');
    var res = paramsStr.map(param => param.split('='));
    var queParams = Object.fromEntries(res);
    if(queParams.number_order !== undefined){
        let no = queParams.number_order;

        $.ajax({
            url: "order/get_status_myorder.php",
            type: "GET",
            data: {"number_order": no},
            success: function success(res) { 
                //Посмотреть на статус ответа, если ошибка
                let respond = $.parseJSON(res);
                if (respond) { 
                    getTableRemove(); 
                    
                    set_date_order(respond);
                    
                } else alert('Такого заказа не существует', 'success');
            }
        });
    } else {
        $(id_title_date_status).text('Поиск заказа по номеру договора');
        $(id_status_detail).append(`<p class="status_detail--p">Для того, <strong>чтобы отследить заказ</strong>, укажите номер договора, который указан в вашем договоре и кликните по кнопке "Найти".</p>`);
        $(id_status_detail).append(`<p class="status_detail--p">Если <strong>информация о заказе не найдена</strong>, то попробуйте зайти попозже и попробовать снова, мы стараемся обрабатывать заказы как можно скорее.`);
    }
    let status_detail_p = ('.status_detail--p');
    //вывод по кнопке поиска
    $("#search-form").submit(function (event) {
        event.preventDefault();
        
        let fd = $('#status__input--search').val();
        
        $.ajax({
            url: "order/get_status_myorder.php",
            type: "GET",
            data: {"number_order": fd},
            success: function success(res) { 
                //Посмотреть на статус ответа, если ошибка
                let respond = $.parseJSON(res);
              
                if (respond) { 
                    getTableRemove(); 
                    $(id_title_date_status).text('');
                    $(status_detail_p).remove();
                    //передача параметра в url
                    var baseUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
                    var newUrl = baseUrl + '?number_order=' + fd;
                    history.pushState(null, null, newUrl);

                    set_date_order(respond);
                    
                } else alert('Такого заказа не существует', 'success');
            }
        });
    });

})(jQuery);


