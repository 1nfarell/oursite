const counter_step = 5; //шаг бесконечного скрола (изменять на такое же значение и в get_order.php)
let data_order = $(this).serialize();
let field_table__order = $('#table__order');
var counter_pass = 0;
var temp = 0;
var rr = new Array();
const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

//вывод в админку order.php

// Всплывающие окна на странице 
const alert = (message, type) => {
    const wrapper = document.createElement('div');
    wrapper.setAttribute('id', 'alert-number');
    wrapper.innerHTML = [
            `<div class="alert alert-${type} alert-dismissible" role="alert" >`,
            `   <div>${message}</div>`,
            '   <button type="button" class="btn-close" data-bs-dismiss="alert"  aria-label="Закрыть"></button>',
            '</div>'
        ].join('')

    alertPlaceholder.append(wrapper)
    // продолжительность всплывающего окна
    setTimeout(() => {
            const alert = bootstrap.Alert.getOrCreateInstance('#alert-number')
            alert.close()
        }, 3000);
}
//именение поля статуса оптаты
function table_price_change_orderValue(sel, no){  
        pco = sel.value;
    $.ajax({
        url: "order/add_changes_price_order.php",
        type: "POST",
        data:{"price_change_order": pco,
            "number_order": no,
        },
        beforeSend: () => { 
            sel.disabled = true; 
        },  
        success: function success(res) {       
            //Посмотреть на статус ответа, если ошибка
            let respond = $.parseJSON(res);
            
            if (respond === "SUCCESS") { 
                setTimeout(() => {                
                sel.disabled = false;         
                alert('Успешно. Статус оплаты заказа '+no+', изменен на '+pco+'!', 'success')
                }, 3000);                 
            } else if (respond === "NOTVALID") {
                sel.disabled = false;          
                alert('Не получилось изменить статус оплаты заказа '+no+'!', 'success')     
            } else {
                sel.disabled = false;          
                alert('Статус оплаты не изменен. Попробуйте еще раз!', 'success')          
            }}});
}
//именение поля статуса заказа
function table_statusValue(sel, no){
    fd = sel.value;
    $.ajax({
        url: "order/add_changes_order.php",
        type: "POST",
        data:{"order__status": fd,
            "number_order": no,
        },
        beforeSend: () => { 
            sel.disabled = true; 
        },  
        success: function success(res) {       
            //Посмотреть на статус ответа, если ошибка
            let respond = $.parseJSON(res);
            
            if (respond === "SUCCESS") { 
                setTimeout(() => {                
                sel.disabled = false;         
                alert('Успешно. Статус заказа '+no+', изменен на '+fd+'!', 'success')
                }, 3000);                 
            } else if (respond === "NOTVALID") {
                sel.disabled = false;          
                alert('Не получилось изменить статус заказа '+no+'!', 'success')     
            } else {
                sel.disabled = false;          
                alert('Статус заказа не изменен. Попробуйте еще раз!', 'success')          
            }}});
}
//именение поля контактного номера заказчика
function table_contact_orderValue (sel, no){    
    fd = sel.value;
    $.ajax({
        url: "order/add_changes_contact_order.php",
        type: "POST",
        data:{"contact_order": fd,
            "number_order": no,
        },
        beforeSend: () => { 
            sel.disabled = true; 
        },  
        success: function success(res) {       
            //Посмотреть на статус ответа, если ошибка
            let respond = $.parseJSON(res);
            
            if (respond === "SUCCESS") { 
                setTimeout(() => {                
                sel.disabled = false;         
                alert('Успешно. Контакт заказа '+no+', изменен на '+fd+'!', 'success')
                }, 3000);                 
            } else if (respond === "NOTVALID") {
                sel.disabled = false;          
                alert('Не получилось изменить контакт заказа '+no+'!', 'success')     
            } else {
                sel.disabled = false;          
                alert('Контакт не изменен. Попробуйте еще раз!', 'success')          
            }}});
}
//именение поля наименование
function table_nameValue (sel, no){
    fd = sel.value;
    $.ajax({
        url: "order/add_name_order.php",
        type: "POST",
        data:{"description_order": fd,
            "number_order": no,
        },
        beforeSend: () => { 
            sel.disabled = true; 
        },  
        success: function success(res) {       
            //Посмотреть на статус ответа, если ошибка
            let respond = $.parseJSON(res);
            
            if (respond === "SUCCESS") { 
                setTimeout(() => {                
                sel.disabled = false;         
                alert('Успешно. Наименование заказа '+no+', изменено на '+fd+'!', 'success')
                }, 3000);                 
            } else if (respond === "NOTVALID") {
                sel.disabled = false;          
                alert('Не получилось изменить наименование заказа '+no+'!', 'success')     
            } else {
                sel.disabled = false;          
                alert('Наименование заказа не изменено. Попробуйте еще раз!', 'success')          
            }}});   
}
//именение поля стоимости заказа
function table_priceValue (sel, no){
    fd = sel.value;
    $.ajax({
        url: "order/add_price_order.php",
        type: "POST",
        data:{"price_order": fd,
            "number_order": no,
        },
        beforeSend: () => { 
            sel.disabled = true; 
        },  
        success: function success(res) {       
            //Посмотреть на статус ответа, если ошибка
            let respond = $.parseJSON(res);
            
            if (respond === "SUCCESS") { 
                setTimeout(() => {                
                sel.disabled = false;         
                alert('Успешно. Стоимость заказа '+no+', изменена на '+fd+'!', 'success')
                }, 3000);                 
            } else if (respond === "NOTVALID") {
                sel.disabled = false;          
                alert('Не получилось изменить стоимость заказа '+no+'!', 'success')     
            } else {
                sel.disabled = false;          
                alert('Стоимость не изменена. Попробуйте еще раз!', 'success')          
            }}});   
}
//именение поля адреса
function table_adress_orderValue (sel, no){
    fd = sel.value;
    $.ajax({
        url: "order/add_changes_adress_order.php",
        type: "POST",
        data:{"adress_order": fd,
            "number_order": no,
        },
        beforeSend: () => { 
            sel.disabled = true; 
        },  
        success: function success(res) {       
            //Посмотреть на статус ответа, если ошибка
            let respond = $.parseJSON(res);
            
            if (respond === "SUCCESS") { 
                setTimeout(() => {                
                sel.disabled = false;         
                alert('Успешно. Адрес заказа '+no+', изменен на '+fd+'!', 'success')
                }, 3000);                 
            } else if (respond === "NOTVALID") {
                sel.disabled = false;          
                alert('Не получилось изменить адрес заказа '+no+'!', 'success')     
            } else {
                sel.disabled = false;          
                alert('Адрес не изменен. Попробуйте еще раз!', 'success')          
            }}});
}
//именение поля ФИО
function table_contact_nameValue (sel, no){
    fd = sel.value;
    $.ajax({
        url: "order/add_changes_contact_name_order.php",
        type: "POST",
        data:{"contact_name_order": fd,
            "number_order": no,
        },
        beforeSend: () => { 
            sel.disabled = true; 
        },  
        success: function success(res) {       
            //Посмотреть на статус ответа, если ошибка
            let respond = $.parseJSON(res);
            
            if (respond === "SUCCESS") { 
                setTimeout(() => {                
                sel.disabled = false;         
                alert('Успешно. Адрес заказа '+no+', изменен на '+fd+'!', 'success')
                }, 3000);                 
            } else if (respond === "NOTVALID") {
                sel.disabled = false;          
                alert('Не получилось изменить адрес заказа '+no+'!', 'success')     
            } else {
                sel.disabled = false;          
                alert('Адрес не изменен. Попробуйте еще раз!', 'success')          
            }}});
}
//именение поля даты монтажа
function table_date_montazhValue (sel, no){
    fd = sel.value;
    $.ajax({
        url: "order/add_changes_date_montazhValue.php",
        type: "POST",
        data:{"date_montazh_order": fd,
            "number_order": no,
        },
        beforeSend: () => { 
            sel.disabled = true; 
        },  
        success: function success(res) {       
            //Посмотреть на статус ответа, если ошибка
            let respond = $.parseJSON(res);
            
            if (respond === "SUCCESS") { 
                setTimeout(() => {                
                sel.disabled = false;         
                alert('Успешно. Дата доставки заказа '+no+', изменена на '+fd+'!', 'success')
                }, 3000);                 
            } else if (respond === "NOTVALID") {
                sel.disabled = false;          
                alert('Не получилось изменить дату доставки заказа '+no+'!', 'success')     
            } else {
                sel.disabled = false;          
                alert('Дата доставки не изменена. Попробуйте еще раз!', 'success')          
            }}});
}
//удаление заказа
function table_delete_btn (e){
    if(confirm("Заказ будет удален навсегда. Продолжить?")){
    $.ajax({
        url: "order/delete_order.php",
        type: "POST",
        data:{"number_order": e,
        },
        beforeSend: () => { 
            e.disabled = true; 
        },  
        success: function success(res) {       
            //Посмотреть на статус ответа, если ошибка
            let respond = $.parseJSON(res);
            
            if (respond === "SUCCESS") { 
                setTimeout(() => {                
                e.disabled = false;         
                alert('Успешно. Заказ '+e+', удален из базы', 'success')
                }, 3000);                 
            } else if (respond === "NOTVALID") {
                e.disabled = false;          
                alert('Не получилось удалить заказ '+e+'!', 'success')     
            } else {
                e.disabled = false;          
                alert('Заказ не удален. Попробуйте еще раз!', 'success')          
            }}});
    }
}
// Копирование номера заказа в буфер
function get_click_alert(sel){
    let fd = sel.textContent;

    navigator.clipboard.writeText(fd)
    .then(() => {
        alert('Номер заказа скопирован в буфер!', 'success')
    })
    .catch(err => {
        console.log('Что-то пошло не по плану..', err);
    });
}
//вывод таблицы заказа
function table_mainValue(SelectData){
    
    let arr = "";
    for(let key in SelectData){  arr = arr + `<tbody class="table-group-divider">
        <tr class="table_header--color">
            <th class="table__number_order tel" onclick="get_click_alert(this)" scope="row">${SelectData[key]['number_order']}</th>
            <td><input type="text" onchange = "table_nameValue(this, '${SelectData[key]['number_order']}')" class="form-control request__input--search nameValue-disabled"  aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg" value="${SelectData[key]['description_order']}"></td>
            <td><input type="text" onchange = "table_priceValue(this, '${SelectData[key]['number_order']}')" class="form-control request__input--search priceValue-disabled"  aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg" value="${SelectData[key]['price_order']}"></td>
            <td>
                <select  name="price_change_order" onchange = "table_price_change_orderValue(this, '${SelectData[key]['number_order']}')" class="form-select form-select-default price_change-disabled" aria-label=".form-select-sm пример">
                    <option disabled selected>${SelectData[key]['price_order__status']}</option>
                    <option value="Не оплачен">Не оплачен</option>
                    <option value="Предоплата">Предоплата</option>
                    <option value="Рассрочка">Рассрочка</option>
                    <option value="Оплачен">Оплачен</option>
                    <option style="display:none" value="Возврат">Возврат</option>
                </select>
            </td>
            <td class="tel">${SelectData[key]['today_date_order']}</td>
            <td class="tel">${SelectData[key]['time_last_status']}</td>
            <th scope="row">
                <select name="order__status" onchange = "table_statusValue(this, '${SelectData[key]['number_order']}')" class="form-select form-select-default form-select__changes" aria-label=".form-select-sm пример">
                    <option disabled selected>${SelectData[key]['order__status']}</option>
                    <option value="В обработке">В обработке</option>
                    <option value="Сборка">Сборка</option>
                    <option value="Доставка">Доставка</option>
                    <option value="Выполнен">Выполнен</option>
                    <option value="Отменен">Отменен</option>
                </select>
            </th>
            <tr>
                <td colspan="7">
                    <table class="table table-sm table-borderless mb-2 ">
                        <thead>
                            <tr>
                                <th class="col-sm-3" scope="col">ФИО</th>
                                <th class="col-sm-3" scope="col">Контакты</th>
                                <th class="col-sm-5" scope="col">Адрес доставки</th>
                                <th class="col-sm-1" scope="col">Дата доставки</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <td class="col-sm-3">
                                    <input type="text" onchange = "table_contact_nameValue(this, '${SelectData[key]['number_order']}')" class="form-control request__input--search contact_nameValue-disabled"  aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg" value="${SelectData[key]['contact_name_order']}">
                                </td>
                                <td class="col-sm-3">
                                    <input type="text" onchange = "table_contact_orderValue(this, '${SelectData[key]['number_order']}')" class="form-control request__input--search contact_order-disabled"  aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg" value="${SelectData[key]['contact_order']}">
                                </td>
                                <td class="col-sm-5">
                                    <input type="text" onchange = "table_adress_orderValue(this, '${SelectData[key]['number_order']}')" class="form-control request__input--search adress_order-disabled"  aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg" value="${SelectData[key]['adress_order']}">
                                </td>
                                <td class="col-sm-1"><input id="startDate" onchange = "table_date_montazhValue(this, '${SelectData[key]['number_order']}')" class="form-control form-control-default date_montazh-disabled" value="${SelectData[key]['date_montazh']}" type="date" /></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <table id="table_datastatusValue${SelectData[key]['number_order']}" class="table table-sm table-borderless mb-1">
                      
                    </table>
                    <button class="btn btn-outline-secondary btn-status" style="display:none" id="btnstatus${SelectData[key]['number_order']}" onclick="table_history_status_btn('${SelectData[key]['number_order']}')" type="button">История статусов</button>
                    <button class="btn btn-outline-secondary btn-delete" style="display:none" onclick="table_delete_btn('${SelectData[key]['number_order']}')" type="button">Удалить заказ</button>
                </td>
                <td colspan="1">                    
                    <div>от: ${SelectData[key]['account']}</div>                                     
                </td>
            </tr>
        </tr>
    </tbody>`;

}   return arr;     
}
//вывод истории стутусов к найденому заказу
function table_history_status_btn(no){
      
        $.ajax({
            url: "order/get_order_status.php",
            type: "POST",
            data:{"number_order": no,
            },
            success: function success(data) {  

                let SData = JSON.parse(data); 

                for(let key in SData){  
                    if(key < 1){
                        let table_datastatus = document.getElementById(`table_datastatusValue${SData[key]['number_order']}`);

                        $(table_datastatus).append(`
                            <thead>
                                <tr>
                                    <th class="col-sm-1" scope="col">Статус заказа</th>
                                    <th class="col-sm-1" scope="col">Дата присвоения статуса</th>
                                    <th class="col-sm-1" scope="col">От</th>
                                </tr>
                            </thead>
                            <tbody id="datastatusValue${SData[key]['number_order']}"  class="table-group-divider table_datastatusValue_class">\
                                <tr>
                                </tr>
                            </tbody>
                        `); 
                    }    

                    let datastatus =document.getElementById(`datastatusValue${SData[key]['number_order']}`);
                    
                    $(datastatus).append(`<tr>
                    <td>${SData[key]['status']}</td>
                    <td>${SData[key]['time_status']}</td>
                    <td>${SData[key]['account']}</td>
                    </tr>`); 
                    
                    let btnstatus = document.getElementById(`btnstatus${SData[key]['number_order']}`);
                    $(btnstatus).remove();                 
                };               
            }
        })   
}
//условия отключения полей при изменении заказа
function add_disabled_field_table(SelectData){

    for(let i in SelectData){
        let price_change_disabled = document.querySelectorAll('.price_change-disabled')[i];
        let priceValue_disabled = document.querySelectorAll('.priceValue-disabled')[i];
        let nameValue_disabled = document.querySelectorAll('.nameValue-disabled')[i];
        let contact_nameValue_disabled = document.querySelectorAll('.contact_nameValue-disabled')[i];
        let contact_order_disabled = document.querySelectorAll('.contact_order-disabled')[i];
        let adress_order_disabled = document.querySelectorAll('.adress_order-disabled')[i];
        let date_montazh_disabled = document.querySelectorAll('.date_montazh-disabled')[i]

        if(SelectData[i]['order__status'] == 'Выполнен' ||  SelectData[i]['order__status'] == 'Отменен'){

            $(priceValue_disabled).prop('disabled', true);
            $(nameValue_disabled).prop('disabled', true);
            $(contact_nameValue_disabled).prop('disabled', true);
            $(contact_order_disabled).prop('disabled', true);
            $(adress_order_disabled).prop('disabled', true);
            $(date_montazh_disabled).prop('disabled', true);
            if(SelectData[i]['price_order__status'] == 'Оплачен'){
                $(price_change_disabled).prop('disabled', true);
            }
        }
        if(SelectData[i]['order__status'] == 'Отменен' && (SelectData[i]['price_order__status'] == 'Рассрочка' || SelectData[i]['price_order__status'] == 'Оплачен' || SelectData[i]['price_order__status'] == 'Предоплата')){
                $(price_change_disabled).prop('disabled', true);
                $(price_change_disabled).val('Возврат');
        } else if (SelectData[i]['order__status'] == 'Отменен' && SelectData[i]['price_order__status'] == 'Не оплачен'){
                $(price_change_disabled).prop('disabled', true);
        }
    }
}
//бесконечный скролл и вывод таблиц заказов
window.addEventListener("scroll", function(){
           
    var field_table__order = document.getElementById('table__order');    
   
    var contentHeight = field_table__order.offsetHeight ;      // 1) высота блока контента вместе с границами
    var yOffset       = window.pageYOffset;      // 2) текущее положение скролбара
    var window_height = window.innerHeight;      // 3) высота внутренней области окна документа
    var y             = yOffset + window_height;
    
    // если пользователь достиг конца 
   
    if(y >= contentHeight && temp !=null){
        $.ajax({
            url: 'order/get_order.php',
            method: 'POST',
            data: {data_order,                    
                    "counter_pass":counter_pass,
                },
            success: function(data){
                
                SelectData = JSON.parse(data);                  
                temp =  SelectData;  
                if(temp !=null){     

                    function getTable(SelectData){ $(field_table__order).append(`
                    <form class="table_form"><table class="table table-hover table-disabled">
                            <thead>
                                <tr>
                                <th scope="col">Номер заказа</th>
                                <th scope="col">Название изделия</th>
                                <th scope="col">К оплате</th>
                                <th scope="col">Статус оплаты</th>
                                <th scope="col">Дата оформления</th>
                                <th scope="col">Дата последнего статуса</th>
                                <th scope="col">Текущий статус</th>
                                </tr>
                            </thead>
                            ${table_mainValue(SelectData)}
                        </table></form>`);
                    }                
                    getTable(SelectData);                    
                    add_disabled_field_table(SelectData);
                }  
        }});
        //каунтер шага скрола; 
        counter_pass= counter_pass + counter_step;
    }  
});
//перезагрузка страницы по нажатию кнопки
function reload_page(){
    document.location.reload(); 
}
//вывод таблиц заказов через строку поиска
(function ($) {  
    $("#search-form").submit(function (event) {
      event.preventDefault();
     
      let fd = $('#status__input--search').val();
      
      $.ajax({
        url: "order/get_order_search.php",
        type: "POST",
        data: {"number_order": fd},
        success: function success(res) { 
            //Посмотреть на статус ответа, если ошибка
            let respond = $.parseJSON(res);

            if (respond && !rr.includes(respond[0]["number_order"])) { 
                
                rr.push(respond[0]["number_order"]);
                
                function getResultTable(respond){ $(field_table__order).prepend((`
                    <form class="table_form"><table class="table table-hover table-disabled">
                            <thead>
                                <tr>
                                <th scope="col">Номер заказа</th>
                                <th scope="col">Название изделия</th>
                                <th scope="col">К оплате</th>
                                <th scope="col">Статус оплаты</th>
                                <th scope="col">Дата оформления</th>
                                <th scope="col">Дата последнего статуса</th>
                                <th scope="col">Текущий статус</th>
                                </tr>
                            </thead>
                            ${table_mainValue(respond)}
                        </table></form>`));
                    }
                  
                getResultTable(respond); 
                add_disabled_field_table(SelectData);
                //цвет шапки
                let table_header__color = document.querySelectorAll('.table_header--color')[0];
                $(table_header__color).css({'background-color':'#c1e4ff'});

                //включение кнопки удалить и истории статусов
                let btn_delete = document.querySelectorAll('.btn-delete')[0];
                $(btn_delete).css({'display':'inline-block'});     
                let btn_status = document.querySelectorAll('.btn-status')[0];
                $(btn_status).css({'display':'inline-block'});    

            } else alert('Такого заказа не существует или он уже открыт', 'success');
        }
      });
    });
  })(jQuery);


