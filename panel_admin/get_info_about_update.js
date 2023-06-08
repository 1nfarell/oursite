
let field_info_update = $('#info_site_update');

function update_mainValue(updatedUpdates){
    let arr = '';

    // Перебираем все ключи объекта updatedUpdates
    for (let key in updatedUpdates) {
        arr += `<hr>
            <p class="">
                ${updatedUpdates[key]['date_update']}
            </p><hr>`;
        // Получаем массив resultArrayUpdate для текущего ключа
        const array = updatedUpdates[key]['resultArrayUpdate'];

        // Перебираем все элементы массива
        for (let i in array) {
            // Добавляем значение элемента в HTML-код
            arr += `
            <p style="padding-left: 15px;" class="">${array[i]['type']}</p>
            <p style="padding-left: 40px; white-space: pre-line" class="">${array[i]['text']}</p>
            `;
        } 
    }
    
    return arr;  
    
}
//вывод истории обновлений в order.php
var currentEventListenerScrollUpdateInfo = null;
const getAllUpdateInfo = (
) => {
    //удаление таблиц перед выводом выбранной селектором    
    $(field_info_update).children().remove();

    
    $.ajax({
        url: 'panel_admin/get_info_about_update.php',
        method: 'POST',
        data: {data_order,                    
            },
        success: function(data){
            
            let FSelectData_update = JSON.parse(data);                  
            let temp_update =  FSelectData_update;
                       
            var textUpdateArr = [];
            var typeUpdateArr = [];
            const updatedUpdates = temp_update.map(update => {
                textUpdateArr = update.text_update.split('; ');
                typeUpdateArr = update.type_update.split('; ');
              
                // создаем массив объектов для каждого обновления
                const updatesArr = textUpdateArr.map((text, i) => {
                  return { type: typeUpdateArr[i], text };
                });
              
                // возвращаем новый объект с обновленными данными
                return {
                  ...update,
                  resultArrayUpdate: updatesArr
                };
              });

            if(temp_update !=null && updatedUpdates !=null){   
                $(field_info_update).append(`${update_mainValue(updatedUpdates)}`)                
            } 
    }});
  
}



let currentEventListenerUpdateInfo = null;  
let update_info_trigger = document.getElementById('update_info_trigger');

if(currentEventListenerUpdateInfo) {
    update_info_trigger.removeEventListener('click', currentEventListenerUpdateInfo);       
}
currentEventListenerUpdateInfo = () => {    
    getAllUpdateInfo();   
};
update_info_trigger.addEventListener('click', currentEventListenerUpdateInfo);  