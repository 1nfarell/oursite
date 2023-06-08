//форма истории добавления обновлений на сайта admin.php
var myModalEl = document.getElementById('ModalUpdate');

let insert_inbody_field = $('#body_update');

$(insert_inbody_field).append(`
    <div id="add_update_description" class="add_update_description">
                                       
    </div>`
    )


//добавление полей по нажатию кнопки добавить
var currentType = 1; 
var currentText = 1;
function add_new_field_description(){
    let insert_new_field_description = $('#add_update_description');
    $(insert_new_field_description).append(`
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-3">Тип изм.</span>
            <input id="input-form--update_type`+currentType+`" name="type_update`+currentType+`" type="text" class="form-control" aria-label="Тип изменения" aria-describedby="inputGroup-3" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-4">Текст</span>
            <textarea id="input-form--update_text`+currentText+`" name="text_update`+currentText+`" class="form-control" aria-label="Текст" aria-describedby="inputGroup-4" required></textarea>
        </div>`)    
        currentType++ 
        currentText++;
}

//удаление полей при закрытии формы
let currentEventListener = null;
let field_descriptionEvent = $('#add_update_description');
if(currentEventListener) {
    myModalEl.removeEventListener('hidden.bs.modal', currentEventListener)
}
currentEventListener = () => {
    $(field_descriptionEvent).children().remove();
};
myModalEl.addEventListener('hidden.bs.modal', currentEventListener)


