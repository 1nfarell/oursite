

let data_order = $(this).serialize();
let field_table__order = $('#table__order');

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
//перезагрузка страницы по нажатию кнопки
function reload_page(){
    document.location.reload(); 
}
//именение поля статуса оптаты
function table_price_change_orderValue(sel, no, pb, po, sp){
    
    pco = sel.value;

    if(pco == "Не оплачен" && confirm("Сумма оплаты и остаток оплаты будут обнулены, а история оплаты будет удалена навсегда. Продолжить?")){
        let time_last_pay = 'Нет';

        $.ajax({
        url: "order/add_changes_price_order.php",
        type: "POST",
        data:{"time_last_pay": time_last_pay,
            "price_change_order": pco,
            "price_order": po,
            "payment_balance": pb,
            "number_order": no,
            "sum_pay": sp,
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
                }, 2000);                 
            } else if (respond === "NOTVALID") {
                sel.disabled = false;          
                alert('Не получилось изменить статус оплаты заказа '+no+'!', 'success')     
            } else {
                sel.disabled = false;          
                alert('Статус оплаты не изменен. Попробуйте еще раз!', 'success')          
            }}});
    } else {
        $.ajax({
            url: "order/add_changes_price_order.php",
            type: "POST",
            data:{"price_change_order": pco,
                "price_order": po,
                "payment_balance": pb,
                "number_order": no,
                "sum_pay": sp,
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
                    }, 2000);                 
                } else if (respond === "NOTVALID") {
                    sel.disabled = false;          
                    alert('Не получилось изменить статус оплаты заказа '+no+'!', 'success')     
                } else {
                    sel.disabled = false;          
                    alert('Статус оплаты не изменен. Попробуйте еще раз!', 'success')          
                }}});
    }
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
                }, 2000);                 
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
//именение поля сумма заказа
function table_priceValue (sel, no, bp, poo, pos){
   
    fd = sel.value;
    $.ajax({
        url: "order/add_price_order.php",
        type: "POST",
        data:{"payment_balance":bp,
            "price_order_old":poo,
                "price_order": fd,
                "number_order": no,
                "price_order__status": pos,
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
                alert('Успешно. Сумма заказа '+no+', изменена на '+fd+'!', 'success')
                }, 3000);                 
            } else if (respond === "NOTVALID") {
                sel.disabled = false;          
                alert('Не получилось изменить сумму заказа '+no+'!', 'success')
            } else {
                sel.disabled = false;          
                alert('Сумма не изменена. Попробуйте еще раз!', 'success')
            }}});   
}
//именение поля оплата
function table_sum_payValue(sel, no, pb, po){
   
    fd = sel.value;

    $.ajax({
        url: "order/add_sum_pay.php",
        type: "POST",
        data:{"payment_balance": pb,
            "sum_pay": fd,
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
                alert('Успешно. Оплата заказа '+no+', изменена на '+fd+'!', 'success')
                }, 3000);
            } else if (respond === "NOTVALID") {
                sel.disabled = false;
                alert('Не получилось оплатить заказ '+no+'!', 'success')
            } else {
                sel.disabled = false;
                alert('Оплата не изменена. Попробуйте еще раз!', 'success')
            }}});

}

//именение поля адреса
function table_adress_orderValue (sel, no){
    fd = sel.value;

    if(fd == ''){
        fd = 'Самовывоз'
    }

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
//именение поля монтаж
function table_montazh_orderValue (sel, no){
    fd = sel.value;

    if(fd == ''){
        fd = 'Без монтажа'
    }
    $.ajax({
        url: "order/add_changes_montazh_order.php",
        type: "POST",
        data:{"montazh_order": fd,
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
                alert('Успешно. Пункт монтаж для заказа '+no+' изменен на '+fd+'!', 'success')
                }, 3000);                 
            } else if (respond === "NOTVALID") {
                sel.disabled = false;          
                alert('Не получилось изменить пункт монтаж для заказа '+no+'!', 'success')     
            } else {
                sel.disabled = false;          
                alert('Монтаж не изменен. Попробуйте еще раз!', 'success')          
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
                alert('Успешно. Заказ '+e+', удален из базы. Страница будет перезагружена через 2с.', 'success');
                setTimeout(() => {                
                e.disabled = false;   
                reload_page();
                }, 2000);                 
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
    const resultsEl = document.querySelector('.past-input');
    navigator.clipboard.writeText(fd)
    .then(() => {
        
        navigator.clipboard.readText()
        .then(text => {        
            resultsEl.value = text;
            alert(`Номер заказа `+fd+` скопирован в буфер и вставлен в строку поиска заказов!`, 'success')
        })
        .catch(err => {
            // возможно, пользователь не дал разрешение на чтение данных из буфера обмена
            console.log('Something went wrong', err);
        });
    })
    .catch(err => {
        console.log('Что-то пошло не по плану..', err);
    });
}
//вывод последнего времени оплаты
function time_last_pay(time_last_pay){    
    if(time_last_pay != null){
        return `${time_last_pay}`;
    } else return 'Нет';
}
//вывод таблицы заказа
function table_mainValue(SelectData){
    
    let arr = "";
    for(let key in SelectData){  arr = arr + `
    <form class="table_form">
    <table  class="table table-hover table-disabled header-table" value="${SelectData[key]['number_order']}">
    <thead>
        <tr>
            <th class="table_col_width--zakaz" scope="col">Заказ</th>
            <th class="table_col_width--name" scope="col">Наименование</th>
            <th class="table_col_width--sum_order" scope="col">Сумма заказа</th>
            <th class="th_ostatok" scope="col">Осталось опл.</th>        
            <th class="table_col_width--last_oplata" scope="col">Посл. оплата</th>
            <th class="th_oplata" scope="col">Внести опл. / оплач. сумма</th>       
        </tr>
    </thead>    
    <tbody class="table-group-divider">
        <tr class="table_header--color">
            <th class="table__number_order tel table_col_width--zakaz" onclick="get_click_alert(this)" scope="row">${SelectData[key]['number_order']}</th>
            <td class="table_col_width--name">
                <input type="text" onchange = "table_nameValue(this, '${SelectData[key]['number_order']}')" class="form-control request__input--search nameValue-disabled"  aria-label="Наименование заказа" aria-describedby="inputGroup-sizing-lg" value="${SelectData[key]['description_order']}">
            </td>
            <td class="table_col_width--sum_order">
                <input type="text" onchange = "table_priceValue(this, '${SelectData[key]['number_order']}', '${SelectData[key]['payment_balance']}', '${SelectData[key]['price_order']}', '${SelectData[key]['price_order__status']}')" class="form-control request__input--search priceValue-disabled"  aria-label="Сумма заказа" aria-describedby="inputGroup-sizing-lg" value="${SelectData[key]['price_order']}">
            </td>
            <td class="td_ostatok">${SelectData[key]['payment_balance']}</td>
            <td class="table_col_width--last_oplata table_col_width--last_oplata--text last_oplata_color">${time_last_pay(SelectData[key]['time_last_pay'])}</td>
            <td class="td_oplata">
                <input type="text" onchange = "table_sum_payValue(this, '${SelectData[key]['number_order']}', '${SelectData[key]['payment_balance']}', '${SelectData[key]['price_order']}')" class="form-control request__input--search input_oplata td_oplata-disabled"  aria-label="Оплата" aria-describedby="inputGroup-sizing-lg">
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <table class="table table-sm table-borderless mb-2 ">
                    <thead>
                        <tr>
                            <th class="table_col_width--fio" scope="col">ФИО</th>
                            <th class="table_col_width--contact" scope="col">Телефон</th>
                            <th class="table_col_width--adres" scope="col">Адрес доставки</th>
                            <th class="table_col_width--montazh" scope="col">Монтаж</th>
                            <th class="table_col_width--dostavka" scope="col">Дата доставки</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td class="table_col_width--fio">
                                <input type="text" onchange = "table_contact_nameValue(this, '${SelectData[key]['number_order']}')" class="form-control request__input--search contact_nameValue-disabled"  aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg" value="${SelectData[key]['contact_name_order']}">
                            </td>
                            <td class="table_col_width--contact">
                                <input type="text" onchange = "table_contact_orderValue(this, '${SelectData[key]['number_order']}')" class="form-control request__input--search contact_order-disabled"  aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg" value="${SelectData[key]['contact_order']}">
                            </td>
                            <td class="table_col_width--adres">
                                <input type="text" onchange = "table_adress_orderValue(this, '${SelectData[key]['number_order']}')" class="form-control request__input--search adress_order-disabled"  aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg" value="${SelectData[key]['adress_order']}">
                            </td>
                            <td class="table_col_width--montazh">
                                <input type="text" onchange = "table_montazh_orderValue(this, '${SelectData[key]['number_order']}')" class="form-control request__input--search montazh_order-disabled"  aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg" value="${SelectData[key]['montazh_order']}">
                            </td>
                            <td class="table_col_width--dostavka input--dostavka"><input id="startDate" onchange = "table_date_montazhValue(this, '${SelectData[key]['number_order']}')" class="form-control form-control-default date_montazh-disabled" value="${SelectData[key]['date_montazh']}" type="date" /></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>  
            <td colspan="6">
                <table class="table table-sm table-borderless mb-2 "> 
                    <tr>         
                        <td class="table_history_btn"> 
            
                            <table class="table table-sm table-borderless mb-0 table-btn-set">
                                <thead>
                                    <tr>
                                        <th class="table_col_width--btn-hist_oplata" scope="col"></th>
                                        <th class="table_col_width--btn-hist_tek_status" scope="col"></th>
                                        <th class="table_col_width--btn-delete" scope="col"></th>  
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>                           
                                        <td class="table_col_width--btn-hist_oplata">
                                            <button class="btn btn-outline-secondary btn_reload btn-pay btn_reload--style" id="btnPay${SelectData[key]['number_order']}" onclick="table_history_pay_btn(this,'${SelectData[key]['number_order']}', 'table_dataPayValue${SelectData[key]['number_order']}', 'btnstatus${SelectData[key]['number_order']}', 'table_datastatusValue${SelectData[key]['number_order']}')" type="button"><img class="btn_reload_img" style="width:23px" src="/images/icon-oplata.png" title="посмотреть историю изменений статуса оплаты заказа"></button>                 
                                        </td>
                                        <td class="table_col_width--btn-hist_tek_status">
                                            <button class="btn btn-outline-secondary btn_reload btn-status btn_reload--style" id="btnstatus${SelectData[key]['number_order']}" onclick="table_history_status_btn(this, '${SelectData[key]['number_order']}', 'table_datastatusValue${SelectData[key]['number_order']}', 'btnPay${SelectData[key]['number_order']}', 'table_dataPayValue${SelectData[key]['number_order']}')" type="button"><img class="btn_reload_img" style="width:23px" src="/images/icon-status.png" title="посмотреть историю изменений статуса выполнения заказа"></button>
                                        </td>
                                        <td class="table_col_width--btn-delete">
                                            <button class="btn btn-outline-secondary btn_reload btn-delete btn_reload--style" style="display:none" onclick="table_delete_btn('${SelectData[key]['number_order']}')" type="button"><img class="btn_reload_img" style="width:23px" src="/images/icon-delete.png" title="удалить заказ навсегда"></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> 
                        </td>
                        <td style="text-align: -webkit-right; padding-right:0">                         
                            <table class="table table-sm table-borderless mb-0 table-status-set">
                                <thead>
                                    <tr>                
                                        <th class="table_col_width--price_change_order" scope="col">Статус оплаты</th>
                                        <th class="table_col_width--time_last_status" scope="col">Изм. тек. стат.</th>
                                        <th class="table_col_width--order__status" scope="col">Текущий статус</th>                            
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>   
                                        <td class="table_col_width--price_change_order"> 
                                            <select name="price_change_order" onchange = "table_price_change_orderValue(this, '${SelectData[key]['number_order']}', '${SelectData[key]['payment_balance']}', '${SelectData[key]['price_order']}', '${SelectData[key]['sum_pay']}')" class="form-select form-select-default price_change-disabled" aria-label=".form-select-sm пример">
                                                <option disabled selected>${SelectData[key]['price_order__status']}</option>
                                                <option value="Не оплачен">Не оплачен</option>
                                                <option value="Предоплата">Предоплата</option>
                                                <option value="Рассрочка">Рассрочка</option>
                                                <option value="Оплачен">Оплачен</option>
                                                <option  style="display:none" value="Возврат">Возврат</option>
                                            </select>                               
                                        </td>                                                           
                                        <td class="table_col_width--time_last_status">${SelectData[key]['time_last_status']}</td>                               
                                        <th class="table_col_width--order__status" >
                                            <select name="order__status" onchange = "table_statusValue(this, '${SelectData[key]['number_order']}')" class="form-select form-select-default form-select__changes" aria-label=".form-select-sm пример">
                                                <option disabled selected>${SelectData[key]['order__status']}</option>
                                                <option value="В обработке">В обработке</option>
                                                <option value="Сборка">Сборка</option>
                                                <option value="Доставка">Доставка</option>
                                                <option value="Готово к отгрузке">Готово к отгрузке</option>
                                                <option value="Выполнен">Выполнен</option>
                                                <option value="Отменен">Отменен</option>
                                            </select>
                                        </th>                                        
                                    </tr>
                                </tbody>
                            </table> 
                        </td> 
                    </tr>
                </table> 
            </td>
        </tr> 
        <tr>            
            <td colspan="2">
                <table id="table_datastatusValue${SelectData[key]['number_order']}" class="table table-sm table-borderless mb-1">
                    
                </table>
                <table id="table_dataPayValue${SelectData[key]['number_order']}" class="table table-sm table-borderless mb-1">
                    
                </table>  
            </td>
            <td class="table_col_width--oformlen" colspan="4">
                <div style="text-align:right">${SelectData[key]['account']} | ${SelectData[key]['today_date_order']}</div>                                    
            </td>           
        </tr>
    </tbody>
    </table></form>
    `;     
}   return arr;  
    
}
//вывод истории статусов к найденому заказу
function table_history_status_btn(btn_data, no, table_dataStatus, id_btn_pay, table_dataPay){

    let regex_id_pay = id_btn_pay.replace(/\//gi, "\\/");
        regex_id_pay = regex_id_pay.replace(/\./gi, "\\.");
    let regex_dataStatus = table_dataStatus.replace(/\//gi, "\\/");
        regex_dataStatus = regex_dataStatus.replace(/\./gi, "\\.");
    let regex_dataPay = table_dataPay.replace(/\//gi, "\\/");
        regex_dataPay = regex_dataPay.replace(/\./gi, "\\.");
   
    if (!$(btn_data).hasClass('on_status')) {
        if($(`#${regex_id_pay}`).hasClass('on_pay')){
            $(`#${regex_id_pay}`).removeClass('on_pay');
            $(`#${regex_dataPay}`).children().remove();
        }

        $(btn_data).addClass('on_status');  

        $.ajax({
            url: "order/get_order_status.php",
            type: "POST",
            data:{"number_order": no,
            },
            success: function success(data) {  

                let SData = JSON.parse(data); 

                for(let key in SData){  
                    if(key < 1){                       

                        $(`#${regex_dataStatus}`).append(`
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
                };               
            }
        }) 
    } else {
        $(btn_data).removeClass('on_status');
        $(`#${regex_dataStatus}`).children().remove();
    }     
}
//вывод истории оплаты к найденому заказу
function table_history_pay_btn(btn_data, no, table_dataPay, id_btn_status, table_dataStatus){  

    let regex_id_status = id_btn_status.replace(/\//gi, "\\/");
        regex_id_status = regex_id_status.replace(/\./gi, "\\.");
    let regex_dataStatus = table_dataStatus.replace(/\//gi, "\\/");
        regex_dataStatus = regex_dataStatus.replace(/\./gi, "\\.");
    let regex_dataPay = table_dataPay.replace(/\//gi, "\\/");
        regex_dataPay = regex_dataPay.replace(/\./gi, "\\.");

    if (!$(btn_data).hasClass('on_pay')) {
        if($(`#${regex_id_status}`).hasClass('on_status')){
            $(`#${regex_id_status}`).removeClass('on_status');
            $(`#${regex_dataStatus}`).children().remove();
         
        }

        $(btn_data).addClass('on_pay');

        $.ajax({
            url: "order/get_order_pay.php",
            type: "POST",
            data:{"number_order": no,
            },
            success: function success(data) {  

                let SData = JSON.parse(data);                  
                             
                    for(let key in SData){  
                          
                        if(key < 1){
                                
                            $(`#${regex_dataPay}`).append(`
                                <thead>
                                    <tr>
                                        <th class="col-sm-1" scope="col">Оплата</th>
                                        <th class="col-sm-1" scope="col">Дата оплаты</th>
                                        <th class="col-sm-1" scope="col">От</th>
                                    </tr>
                                </thead>
                                <tbody id="dataPayValue${SData[key]['number_order']}"  class="table-group-divider table_dataPayValue_class">
                                    <tr>
                                    </tr>
                                </tbody>
                            `); 
                        }    

                        let dataPay = document.getElementById(`dataPayValue${SData[key]['number_order']}`);
                        
                        $(dataPay).append(`<tr>
                        <td>${SData[key]['sum_pay']}</td>
                        <td>${SData[key]['time_pay']}</td>
                        <td>${SData[key]['account']}</td>
                        </tr>`); 
                    }             
            }
        }) 
    } else {
        $(btn_data).removeClass('on_pay');
        $(`#${regex_dataPay}`).children().remove();
    }         
}
//появление инпута предоплаты при выборе "предоплаты" в селекте формы
function changeVarianPay (sel){
    fd = sel.value;

    if ((fd == 'Предоплата') || (fd == 'Рассрочка')) {
        let input_predoplata = $('#input_predoplata');
        $(input_predoplata).css({'display':'flex'});
    } else {$(input_predoplata).css({'display':'none'});}
}

//условия отключения полей при изменении заказа
function add_disabled_field_table(SelectData){   

    for(let i in SelectData){


        let table = document.querySelectorAll(`.header-table[value='${SelectData[i]['number_order']}']`)
       
        var sum_pay_current = (SelectData[i]['price_order'] - SelectData[i]['payment_balance']);
        
        table[0].querySelector('.input_oplata').placeholder = sum_pay_current; 
        
        let price_change_disabled = table[0].querySelector('.price_change-disabled'); //статус оплаты
        let priceValue_disabled = table[0].querySelector('.priceValue-disabled'); //сумма оплаты
        let nameValue_disabled = table[0].querySelector('.nameValue-disabled'); //наименование
        let contact_nameValue_disabled = table[0].querySelector('.contact_nameValue-disabled');
        let contact_order_disabled = table[0].querySelector('.contact_order-disabled'); //контакты
        let adress_order_disabled = table[0].querySelector('.adress_order-disabled'); //адрес
        let date_montazh_disabled = table[0].querySelector('.date_montazh-disabled'); //дата монтажа
        let td_oplata_disabled = table[0].querySelector('.td_oplata-disabled'); //оплата
        let td_ostatok_disabled = table[0].querySelector('.td_ostatok-disabled'); //остаток оплаты 
        let montazh_order_disabled = table[0].querySelector('.montazh_order-disabled'); 
       
        let order_status_changes = table[0].querySelector('.form-select__changes'); //выбранный статус заказа
        

        if(SelectData[i]['order__status'] == 'Сборка'){
            $(priceValue_disabled).prop('disabled', true);           
            $(nameValue_disabled).prop('disabled', true);         
             
            if(SelectData[i]['price_order__status'] == 'Оплачен'){
                $(price_change_disabled).prop('disabled', true);
    
                $(td_oplata_disabled).prop('disabled', true);
                $(td_ostatok_disabled).prop('disabled', true);
            }   
        }
          //цвета
        if(SelectData[i]['order__status'] == 'Выполнен'){
            $(order_status_changes).css({'color':'#146c43'})
            $(order_status_changes).css({'border-bottom-color':'#146c43'});
        } else if(SelectData[i]['order__status'] == 'Отменен'){
            $(order_status_changes).css({'color':'#432874'});
            $(order_status_changes).css({'border-bottom-color':'#432874'});
        } else if(SelectData[i]['order__status'] == 'В обработке'){ 
            $(order_status_changes).css({'color':'#cc9a06'});
            $(order_status_changes).css({'border-bottom-color':'#cc9a06'});
        } else if(SelectData[i]['order__status'] == 'Сборка'){
            $(order_status_changes).css({'color':'#0aa2c0'});
            $(order_status_changes).css({'border-bottom-color':'#0aa2c0'});
        } else if(SelectData[i]['order__status'] == 'Доставка'){
            $(order_status_changes).css({'color':'#520dc2'});
            $(order_status_changes).css({'border-bottom-color':'#520dc2'});
        } else if(SelectData[i]['order__status'] == 'Готово к отгрузке'){
            $(order_status_changes).css({'color':'#1aa179'});
            $(order_status_changes).css({'border-bottom-color':'#1aa179'});
        }
        if(SelectData[i]['price_order__status'] == 'Оплачен'){
            $(price_change_disabled).css({'color':'#146c43'})
            $(price_change_disabled).css({'border-bottom-color':'#146c43'});
        } else if(SelectData[i]['price_order__status'] == 'Рассрочка'){
            $(price_change_disabled).css({'color':'#fd7e14'})   
            $(price_change_disabled).css({'border-bottom-color':'#fd7e14'}); 
        } else if(SelectData[i]['price_order__status'] == 'Предоплата'){
            $(price_change_disabled).css({'color':'#cc9a06'})
            $(price_change_disabled).css({'border-bottom-color':'#cc9a06'});
        } else if (SelectData[i]['price_order__status'] == 'Не оплачен') {
            $(price_change_disabled).css({'color':'#dc3545'})
            $(price_change_disabled).css({'border-bottom-color':'#dc3545'});
            $(td_oplata_disabled).css({'border-bottom-color':'#dc3545'});
        }
        //отключение полей
        if(SelectData[i]['order__status'] == 'Выполнен' ||  SelectData[i]['order__status'] == 'Отменен'){

            $(priceValue_disabled).prop('disabled', true);           
            $(nameValue_disabled).prop('disabled', true);
            $(contact_nameValue_disabled).prop('disabled', true);
            $(contact_order_disabled).prop('disabled', true);
            $(adress_order_disabled).prop('disabled', true);
            $(date_montazh_disabled).prop('disabled', true);  
            $(montazh_order_disabled).prop('disabled', true);
            
            if(SelectData[i]['price_order__status'] == 'Оплачен'){
                $(price_change_disabled).prop('disabled', true);
    
                $(td_oplata_disabled).prop('disabled', true);
                $(td_ostatok_disabled).prop('disabled', true);
            }   
        }
        if(SelectData[i]['price_order__status'] == 'Предоплата'){
            $(td_oplata_disabled).css({'border-bottom-color':'#cc9a06'});

        } else if (SelectData[i]['price_order__status'] == 'Рассрочка') {
            $(td_oplata_disabled).css({'border-bottom-color':'#fd7e14'});
        }  
        if(SelectData[i]['order__status'] == 'Доставка' || SelectData[i]['order__status'] == 'Готово к отгрузке'){

            $(priceValue_disabled).prop('disabled', true);           
            $(nameValue_disabled).prop('disabled', true);
            $(contact_nameValue_disabled).prop('disabled', true);
            $(contact_order_disabled).prop('disabled', true);
            $(adress_order_disabled).prop('disabled', true);
            $(date_montazh_disabled).prop('disabled', false);
            $(montazh_order_disabled).prop('disabled', true);
            

            if(SelectData[i]['price_order__status'] == 'Оплачен'){
                $(price_change_disabled).prop('disabled', true);
    
                $(td_oplata_disabled).prop('disabled', true);
                $(td_ostatok_disabled).prop('disabled', true);
            }   
              
        }

        if(SelectData[i]['price_order__status'] == 'Оплачен'){
             
            table[0].querySelector('.th_oplata').style.display = "none"; //оплата
            table[0].querySelector('.th_ostatok').style.display = "none";//остаток оплаты
            table[0].querySelector('.td_oplata').style.display = "none";
            table[0].querySelector('.td_ostatok').style.display = "none";               
        } 
        else
        {
            table[0].querySelector('.td_oplata').style.display = "table-cell";
            table[0].querySelector('.td_ostatok').style.display = "table-cell";
            table[0].querySelector('.th_oplata').style.display = "table-cell";
            table[0].querySelector('.th_ostatok').style.display = "table-cell";
        }
        if(SelectData[i]['order__status'] == 'Отменен' && SelectData[i]['price_order__status'] != 'Не оплачен'){
                $(price_change_disabled).prop('disabled', true); //статус оплаты
                $(price_change_disabled).val('Возврат');

                $(td_oplata_disabled).prop('disabled', true);
                $(td_ostatok_disabled).prop('disabled', true);
                 
                //цвет "текста возврат"
                $(price_change_disabled).css({'color':'#432874'}); 
                $(price_change_disabled).css({'border-bottom-color':'#432874'});
                $(td_oplata_disabled).css({'border-bottom-color':'#432874'});

                table[0].querySelector('.th_oplata').style.display = "table-cell";
                table[0].querySelector('.td_ostatok').style.display = "none";
                table[0].querySelector('.td_oplata').style.display = "table-cell";
                table[0].querySelector('.th_ostatok').style.display = "none";   

                table[0].querySelector('.th_oplata').innerHTML = "Возврат"
                
        } else if (SelectData[i]['order__status'] == 'Отменен' && SelectData[i]['price_order__status'] == 'Не оплачен'){
                $(price_change_disabled).prop('disabled', true);

                $(td_oplata_disabled).prop('disabled', false);
                $(td_ostatok_disabled).prop('disabled', false);
               

                table[0].querySelector('.th_oplata').style.display = "none"; //оплата
                table[0].querySelector('.th_ostatok').style.display = "none";//остаток оплаты
                table[0].querySelector('.td_oplata').style.display = "none";
                table[0].querySelector('.td_ostatok').style.display = "none";    
        } 
        
        if(SelectData[i]['adress_order'] == 'Самовывоз'){
            table[0].querySelector('.table_col_width--dostavka').style.display = "none";  
            table[0].querySelector('.input--dostavka').style.display = "none";
            table[0].querySelector('.table_col_width--dostavka').style.display = "none";  
            table[0].querySelector('.date_montazh-disabled').style.display = "none"; 
            table[0].querySelector('td.table_col_width--montazh').style.cssText = "padding-right: 0 !important"
        } else {
            table[0].querySelector('.table_col_width--dostavka').style.display = "table-cell";  
            table[0].querySelector('.input--dostavka').style.display = "table-cell";
        }     
    }
}


//вывод заказов
var currentEventListener = null;
const getAllOrder = (
    change_select_order,
    change_select_user,
    search_order_in_db,
    date_sort_order_value,
) => {
    
    let counter_pass_first = 0;
    const counter_step = 10; //шаг бесконечного скрола (изменять на такое же значение и в get_order.php)
    var counter_pass = 10;
    var temp = 0;
    
    //вывод заказов сразу при загрузке страницы
    $.ajax({
        url: 'order/get_order.php',
        method: 'POST',
        data: {data_order,                    
                "counter_pass":counter_pass_first,
                "change_select_order": change_select_order,
                "change_select_user": change_select_user,
                "search_order_in_db":search_order_in_db,
                "date_sort_order_value": date_sort_order_value,
            },
        success: function(data){
            
            let FSelectData = JSON.parse(data);                  
            let temp =  FSelectData; 

            if(temp !=null){  
                $('#table__order').children().remove(); 
                $(field_table__order).append(`${table_mainValue(FSelectData)}`) 
                add_disabled_field_table(FSelectData)
            } else {
                $('#table__order').children().remove(); 
                $('#table__order').append('<div>Нет заказов</div>');
            }
    }});
    //бесконечный скролл и вывод таблиц заказов
    if(currentEventListener) {
        
        window.removeEventListener('scroll', currentEventListener)
    }
    currentEventListener = () => {
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
                        "change_select_order": change_select_order,
                        "change_select_user": change_select_user,
                        "search_order_in_db":search_order_in_db,
                        "date_sort_order_value": date_sort_order_value,
                    },
                success: function(data){
                    
                    let SelectData = JSON.parse(data);               
                    let temp =  SelectData;  

                    if(temp !=null){     
                        $(field_table__order).append(`${table_mainValue(SelectData)}`)
                        add_disabled_field_table(SelectData);
                    }  
            }});
            //каунтер шага скрола; 
            counter_pass= counter_pass + counter_step;
        } 
    };
    window.addEventListener('scroll', currentEventListener)
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

               
                //условие что номер найден будет один раз
                if (fd != '') { 
                    $("#table__order").children().remove();
                    $(field_table__order).prepend((`${table_mainValue(respond)}`))   
                    add_disabled_field_table(respond)

                    //цвет шапки
                    let table_header__color = document.querySelectorAll('.table_header--color')[0];
                    let table_number_order = document.querySelectorAll('th.table__number_order')[0];
                    let tel2 = document.querySelectorAll('td.tel')[1];
                    let tel = document.querySelectorAll('td.tel')[0];
                    let last_oplata_color = document.querySelectorAll('td.last_oplata_color')[0];
                    let ostatok = document.querySelectorAll('td.td_ostatok')[0];
                  
                    $(table_header__color).css({'background-color':'steelblue'});
                    $(table_number_order).css({'color':'white'});
                    $(tel2).css({'color':'white'});
                    $(tel).css({'color':'white'});
                    $(ostatok).css({'color':'white'});
                    $(last_oplata_color).css({'color':'white'});

                    //включение кнопки удалить 
                    let btn_delete = document.querySelectorAll('.btn-delete')[0];
                    $(btn_delete).css({'display':'inline-block'});  
                    //прокрутка до найденного элемента
                    let el = $(`.header-table[value='${respond[0]['number_order']}']`);  
                    $(el)[0].scrollIntoView({
                        behavior: "smooth", // or "auto" or "instant"
                        block: "center" // or "end"
                       
                    });
                    window.removeEventListener('scroll', currentEventListener)                
                } else {
                    let fd_order = '';
                    let fd_user = '';
                    getAllOrder(fd_order, fd_user);
                }
            }
        });
    });
})(jQuery);

//вставляет кнопку селектора статуса заказа для фильтрации вывода
let = btn_select_order = $('#menu_filter');

$(btn_select_order).append(`
    <div>
        <div>По статусу заказа</div>
        <select name="order__status" id="filter_order" class="form-select form-select-default form-select__changes" aria-label=".form-select-sm пример">
            <option selected>Без фильтра</option>
            <option value="В обработке">В обработке</option>
            <option value="Сборка">Сборка</option>
            <option value="Доставка">Доставка</option>
            <option value="Готово к отгрузке">Готово к отгрузке</option>
            <option value="Выполнен">Выполнен</option>
            <option value="Отменен">Отменен</option>
        </select>   
    </div>
    <div>
        <div>По пользователю</div>
        <select name="name_who_add_order" id="filter_name_who_add_order" class="form-select form-select-default select_name_who_add_order" aria-label=".form-select-sm пример">
            <option selected>Без фильтра</option>
        </select>   
    </div>
`); 
//получение имен менеджеров в фильтр
$.ajax({
    url: "/vendor/get_user.php",
    type: "POST",  
    success: function success(res) { 
        let user_respond = $.parseJSON(res);
         for(i in user_respond){
            $('#filter_name_who_add_order').append(`<option value="${user_respond[i]['full_name']}">${user_respond[i]['full_name']}</option>`)}}
})

//вывод числа общего количества добавленных заказов к заголовку "все заказы"
function display_count_all_order(fd_user){
    $.ajax({
        url: 'order/get_info_about_all_order_count.php',
        method: 'POST',
        data:{
            "full_name":fd_user,
        },
        success: function(data){        
            let column_count_info = JSON.parse(data); 
            for(i in column_count_info){    
                let info_html = `
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger info-btn_counter column_count_field">${column_count_info[i]['column_count']}</span>
                `
                $('#title_name_order_status').append(info_html);        
            }
    }});
}

//вывод заказов через выбор в фильтре (селекторе статусов заказа)
//получить вывод заказов при загрузке странице один раз        
let fd = '';
let fd_user = '';
getAllOrder(fd, fd_user);
get_count_status(fd_user)
display_count_all_order(fd_user);
//обработчик кнопки сохранения таблицы в excel
var btn_get_excel = document.getElementById("btn_get_excel");

//прослушиватель фильтров (селекторов) по статусу заказа и по пользователям
let currentEventListenerSelectOrder = null;  
let sel = document.getElementById('filter_order');
let sel_user = document.getElementById('filter_name_who_add_order');
let input_search_value = document.getElementById('status__input--search');
let date_sort_order = document.getElementById('date_sort_order');


let debounceTimer;
let debounceTimer2;
if(currentEventListenerSelectOrder) {
    sel.removeEventListener('change', currentEventListenerSelectOrder);  
    sel_user.removeEventListener('change', currentEventListenerSelectOrder);  
    input_search_value.removeEventListener('input', currentEventListenerSelectOrder);
    date_sort_order.removeEventListener('click', currentEventListenerSelectOrder);
}
currentEventListenerSelectOrder = () => {
    fd = sel.value;
    fd_user = sel_user.value;
    search_order_in_db = input_search_value.value;
    
    if (fd == 'В обработке'){  
        $('#title_name_order_status').text('ВСЕ "В ОБРАБОТКЕ"');    
        if (fd_user != 'Без фильтра'){
            $('#title_name_order_status').text('ВСЕ "В ОБРАБОТКЕ": '+fd_user.toUpperCase());
        }    
    } else if (fd == 'Сборка'){   
        $('#title_name_order_status').text('ВСЕ "В СБОРКЕ"'); 
        if (fd_user != 'Без фильтра'){
            $('#title_name_order_status').text('ВСЕ "В СБОРКЕ: '+fd_user.toUpperCase());
        }
    } else if (fd == 'Доставка'){ 
        $('#title_name_order_status').text('ВСЕ "В ДОСТАВКЕ"'); 
        if (fd_user != 'Без фильтра'){
            $('#title_name_order_status').text('ВСЕ "В ДОСТАВКЕ: '+fd_user.toUpperCase());
        }
    } else if (fd == 'Готово к отгрузке'){  
        $('#title_name_order_status').text('ВСЕ "ГОТОВО К ОТГРУЗКЕ"'); 
        if (fd_user != 'Без фильтра'){
            $('#title_name_order_status').text('ВСЕ "ГОТОВО К ОТГРУЗКЕ: '+fd_user.toUpperCase());
        }
    } else if (fd == 'Выполнен'){      
        $('#title_name_order_status').text('ВСЕ "ВЫПОЛНЕН"'); 
        if (fd_user != 'Без фильтра'){
            $('#title_name_order_status').text('ВСЕ "ВЫПОЛНЕН: '+fd_user.toUpperCase());
        }
    } else if (fd == 'Отменен'){       
        $('#title_name_order_status').text('ВСЕ "ОТМЕНЕН"'); 
        if (fd_user != 'Без фильтра'){
            $('#title_name_order_status').text('ВСЕ "ОТМЕНЕН: '+fd_user.toUpperCase());
        }
    } else if (fd == 'Без фильтра'){            
        fd = '';
        $('#title_name_order_status').text('ВСЕ ЗАКАЗЫ');
        if (fd_user == 'Без фильтра'){
            fd_user = '';       
            display_count_all_order(fd_user);
        } else {            
            display_count_all_order(fd_user);
            $('#title_name_order_status').text('ВСЕ ЗАКАЗЫ: '+fd_user.toUpperCase());
        }
    }  
    if (fd_user == 'Без фильтра'){
        fd_user = '';        
    } 
    get_count_status(fd_user)      
    
    let date_sort_order_value = 'DESC';
    console.log(event.target.id)
    // сортировка старый - новый заказ  
    if(event.target.id == 'date_sort_order' && date_sort_order.value == 'DESC'){
        date_sort_order.value = 'ASC'
        date_sort_order_value = date_sort_order.value
    } else if(event.target.id == 'date_sort_order' && date_sort_order.value == 'ASC') {
        date_sort_order.value = 'DESC'
        date_sort_order_value = date_sort_order.value      
    }
    

    // Очистите таймер, если он уже был запущен
    clearTimeout(debounceTimer);
    clearTimeout(debounceTimer2);
   
    let input_val = input_search_value.value;
    // проверка что введено п/авыа
    if(input_val.match(/^.*\\.+$/) || input_val.match(/^.*\/.+$/)){
        // Назначьте новый таймер для вызова функции через 500 миллисекунд
        debounceTimer = setTimeout(() => {
            getAllOrder(fd, fd_user, search_order_in_db, date_sort_order_value);
        }, 1000);
    } else if (input_val == '') {
        debounceTimer2 = setTimeout(() => {
        getAllOrder(fd, fd_user, search_order_in_db, date_sort_order_value)
        }, 1000);        
    }
};
sel.addEventListener('change', currentEventListenerSelectOrder);    
sel_user.addEventListener('change', currentEventListenerSelectOrder);   
input_search_value.addEventListener('input', currentEventListenerSelectOrder); 
date_sort_order.addEventListener('click', currentEventListenerSelectOrder);

//цветные кнопки с цифрами статусы заказа и оплаты
function display_status_info(status_info){
    for(i in status_info){    
        let info_html = `
            <span class="badge text-bg-primary  position-relative info-btn" onclick="get_order_after_click_status(this)">${status_info[i]['status']}
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger info-btn_counter">${status_info[i]['results']}</span>
            </span>    
        `
        $('.order_counter_status').append(info_html);
        if(status_info[i]['status'] == "В обработке"){            
            document.querySelectorAll('.info-btn')[i].style.cssText = 'background-color:rgb(204, 154, 6) !important'
        } else if(status_info[i]['status'] == "Сборка"){
            document.querySelectorAll('.info-btn')[i].style.cssText = 'background-color:rgb(10, 162, 192) !important'
        } else if(status_info[i]['status'] == "Доставка"){
            document.querySelectorAll('.info-btn')[i].style.cssText = 'background-color:rgb(82, 13, 194) !important'    
        } else if(status_info[i]['status'] == "Готово к отгрузке"){
            document.querySelectorAll('.info-btn')[i].style.cssText = 'background-color:rgb(26, 161, 121) !important'
        } else if(status_info[i]['status'] == "Предоплата"){
            document.querySelectorAll('.info-btn')[i].style.cssText = 'background-color:rgb(204, 154, 6) !important'
        } else if(status_info[i]['status'] == "Рассрочка"){
            document.querySelectorAll('.info-btn')[i].style.cssText = 'background-color:rgb(253, 126, 20) !important'
        }
    }
}

// нажатие на цветные кнопки статуса \ получение значения
function get_order_after_click_status(info_val){
    let info_value = info_val.innerText.split('\n')[0];  
    fd = info_value;    
    fd_user = sel_user.value;
    search_order_in_db = input_search_value.value;

    
    if (fd == 'В обработке'){  
        $('#title_name_order_status').text('ВСЕ "В ОБРАБОТКЕ"');    
        if (fd_user != 'Без фильтра'){
            $('#title_name_order_status').text('ВСЕ "В ОБРАБОТКЕ": '+fd_user.toUpperCase());           
        }    
        sel.value="В обработке";
    } else if (fd == 'Сборка'){   
        $('#title_name_order_status').text('ВСЕ "В СБОРКЕ"'); 
        if (fd_user != 'Без фильтра'){
            $('#title_name_order_status').text('ВСЕ "В СБОРКЕ: '+fd_user.toUpperCase());
        }
        sel.value="Сборка";
    } else if (fd == 'Доставка'){ 
        $('#title_name_order_status').text('ВСЕ "В ДОСТАВКЕ"'); 
        if (fd_user != 'Без фильтра'){
            $('#title_name_order_status').text('ВСЕ "В ДОСТАВКЕ: '+fd_user.toUpperCase());
        }
        sel.value="Доставка";
    } else if (fd == 'Готово к отгрузке'){  
        $('#title_name_order_status').text('ВСЕ "ГОТОВО К ОТГРУЗКЕ"'); 
        if (fd_user != 'Без фильтра'){
            $('#title_name_order_status').text('ВСЕ "ГОТОВО К ОТГРУЗКЕ: '+fd_user.toUpperCase());
        }
        sel.value="Готово к отгрузке";
    } else if (fd == 'Выполнен'){      
        $('#title_name_order_status').text('ВСЕ "ВЫПОЛНЕН"'); 
        if (fd_user != 'Без фильтра'){
            $('#title_name_order_status').text('ВСЕ "ВЫПОЛНЕН: '+fd_user.toUpperCase());
        }
        sel.value="Выполнен";
    } else if (fd == 'Отменен'){       
        $('#title_name_order_status').text('ВСЕ "ОТМЕНЕН"'); 
        if (fd_user != 'Без фильтра'){
            $('#title_name_order_status').text('ВСЕ "ОТМЕНЕН: '+fd_user.toUpperCase());
        }
        sel.value="Отменен";
    } else if (fd == 'Предоплата'){       
        $('#title_name_order_status').text('ВСЕ "ПРЕДОПЛАТА"'); 
        if (fd_user != 'Без фильтра'){
            $('#title_name_order_status').text('ВСЕ "ПРЕДОПЛАТА: '+fd_user.toUpperCase());
        }
        sel.value="Без фильтра";
    } else if (fd == 'Рассрочка'){       
        $('#title_name_order_status').text('ВСЕ "РАССРОЧКА"'); 
        if (fd_user != 'Без фильтра'){
            $('#title_name_order_status').text('ВСЕ "РАССРОЧКА: '+fd_user.toUpperCase());
        }
        sel.value="Без фильтра";
    }     

    if (fd_user == 'Без фильтра'){
        fd_user = '';        
    } 
    get_count_status(fd_user) 
    getAllOrder(fd, fd_user, search_order_in_db); 
    
}
//цветные кнопки с цифрами статусы заказа и оплаты
function get_count_status(fd_user){
    $.ajax({
        url: 'order/get_count_status.php',
        method: 'POST',
        data: { 'full_name':fd_user, 
            },
        success: function(data){
            
            let FSelectData = JSON.parse(data);                  
            let temp =  FSelectData; 

            let count_status_field = ('.order_counter_status')

            if(temp !=null){  
                $(count_status_field).children().remove(); 
                display_status_info(temp); 
            } else {
                $(count_status_field).children().remove(); 
            }
    }});
} 

//очистить фильтры
function cleanFilter(){
    sel.value="Без фильтра";
    sel_user.value="Без фильтра";
    input_search_value.value='';
    let fd = '';
    let fd_user = '';
    let search_order_in_db = '';
    $('#title_name_order_status').text('ВСЕ ЗАКАЗЫ');
    display_count_all_order(fd_user);
    get_count_status(fd_user)  
    date_sort_order.value = "DESC";
    getAllOrder(fd, fd_user, search_order_in_db, date_sort_order.value); 
}   

//сохранение в Excel .. библиотека SheetJS
const get_excel = (
    change_select_order,
    change_select_user,
    search_order_in_db,
) => {
    
    $.ajax({
        url: 'order/get_order.php',
        method: 'POST',
        data: {                 
                "change_select_order": change_select_order,
                "change_select_user": change_select_user,
                "search_order_in_db":search_order_in_db,
            },
        success: function(data){
            
            let a_data = JSON.parse(data);                  
            let temp_a_data =  a_data; 

            var wb = XLSX.utils.book_new();

            // Создаем новый лист в книге
            var ws = XLSX.utils.json_to_sheet(temp_a_data);
        
            // Добавляем лист в книгу
            XLSX.utils.book_append_sheet(wb, ws, 'Заказы');

            var newHeaders = ['Номер заказа', 'Наименование заказа', 'Сумма заказа', 'Остаток оплаты', 'Статус оплаты', 'Последний платеж', 'Статус заказа', 'Посл. изм. статуса', 'ФИО заказчика', 'Телефон заказчика', 'Адрес заказчика для доставки/монтажа', 'ФИО Монтажника', 'Дата монтажа', 'Добавил заказ', 'Дата оформления'];
            XLSX.utils.sheet_add_aoa(ws, [newHeaders], {origin: 'A1'});
        
            // Задаем ширину столбцов на основе содержимого
            var columnWidths = newHeaders.map(function (header) {
                return { wch: header.length + 5 }; // You can adjust the additional width as per your requirement
              });
              ws['!cols'] = columnWidths;


            // Преобразуем книгу в формат Excel
            var wbout = XLSX.write(wb, { bookType: 'xlsx', type: 'binary' });
        
            // Создаем объект Blob с данными Excel и типом MIME
            var blob = new Blob([s2ab(wbout)], { type: 'application/octet-stream' });
        
            // Создаем ссылку на скачивание файла Excel
            var url = window.URL.createObjectURL(blob);
            var a = document.createElement('a');
            a.href = url;
            a.download = 'Выгрузка заказов с сайта Открытие.xlsx';
            a.click();
            window.URL.revokeObjectURL(url);
        }
        
    });
   
    // Функция для преобразования строк в бинарный формат
    function s2ab(s) {
        var buf = new ArrayBuffer(s.length);
        var view = new Uint8Array(buf);
        for (var i = 0; i < s.length; i++) view[i] = s.charCodeAt(i) & 0xff;
        return buf;
    }   
}  

//обработчик кнопки сохранения таблицы в excel
let handleClick_get_excel = null;
if(handleClick_get_excel) {
    btn_get_excel.removeEventListener('change', handleClick_get_excel);  
}
handleClick_get_excel = () => {    
    fd = sel.value;
    fd_user = sel_user.value;
    if (fd_user == 'Без фильтра'){
        fd_user = '';        
    } 
    if (fd == 'Без фильтра'){
        fd = '';        
    } 
    search_order_in_db = input_search_value.value;    
    
    get_excel(fd, fd_user, search_order_in_db);
};
btn_get_excel.addEventListener('click', handleClick_get_excel);  

