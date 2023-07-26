//добавление хедер на страницу
let header_block = $('#header')

$(header_block).append(`<div class="header--container">               
    <div class="header">
        <div class="header-left">                        
            <img class="icon compas" src="/images/compas.svg">
            <a rel="nofollow" href="#ouradress">Офис в г. Волжском</a>                       
        </div>    
        <a class="header--logo__min-width" style="display: none" rel="nofollow"  href="/">                       
            <span class="header-namefirm">ОТКРЫТИЕ</span>
            <div class="header-namefirm__triangle"></div>
        </a>                   
        <div class="header-right">                          
            <img class="icon phone" src="/images/phone.svg">
            <a id="telegram_href" rel="nofollow" href=""><img class="icon viber" src="/images/telegram.svg"></a>
            <a id="whatsup_href" rel="nofollow" href=""> <img class="icon whatsup" src="/images/whatsup.svg"></a>
            <span id="contact_tel_1" class="tel"></span>                           
            <span id="contact_tel_2" class="tel"></span>
            <span title="Режим работы">(Пн-Пт с 08:00 до 18:00)</span>                           
        </div>
    </div>                
    <div class="header--container__ins">
        <div class="header-center">
            <a rel="nofollow"  href="/">                       
                <span class="header-namefirm">ОТКРЫТИЕ</span>
                <span class="header-namefirm__description">ЗАВОД ОКОН</span>
                <div class="header-namefirm__triangle"></div>
            </a>
            <div class="header-menu-catalog">
                <!-- Кнопка-триггер модального окна Menu -->
                <span class="header-menu-catalog-links" id="menu_info_trigger" data-bs-toggle="modal" data-bs-target="#menuStaticBackdrop" aria-controls="menuStaticBackdrop">Каталог</span>      
            </div>
        </div>   
        <div class="input-group">
            <input type="text" id="header__search__input" class="form-control header-search__input" placeholder="Поиск по сайту" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary header-search__btn" type="button" id="button-addon2"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png"></button>
            <div id="search-result-field" class="search__result">
                <!-- вывод результата поиска по сайту search_pages.js скрипт -->
            </div>                        
        </div> 
        <div class="search__overlay">
            <!-- затемнение фона -->
        </div>             
        <div class ="menu-links">
            <a class="menu_a_column" href="/catalog/okna"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-windows.png">Окна</a>
            <!-- <a class="menu_a_column" href="/catalog/balkon"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-balcon.png">Балконы</a> -->
            <a class="menu_a_column" href="/catalog/door"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-door.png">Двери</a>
            <a class="menu_a_column" href="/catalog/moskit"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-grid.png">Москитки</a>                           
            <a class="menu_a_column" href="/status.php"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-order-delivery.png">Заказы</a>                                                  
            <span class="menu_a_column header-btn_setcolor" data-bs-toggle="modal" data-bs-target="#Modal"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-call.png">Звонок</span>
        </div> 
    </div>
</div>`)

// Липкий заголовок     
window.onscroll = function() {myFunction()};

var header = document.getElementById("header");

function myFunction() {
    if ($(this).scrollTop() > 0) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}
// ===============================================================================================================================================
// поисковая строка

let search_input = document.getElementById("header__search__input")
let field_append_result_search = $('.search__result')
let search_result_field = document.getElementById('search-result-field')
let search__overlay = $('.search__overlay')

// закрываем результат если был клик 
document.addEventListener('click', function(event) {    
    var targetElement = event.target;  
    // Проверяем, является ли целевой элемент потомком блока <div>
    let contains_targetElement = document.querySelector('.header--container__ins > .input-group')
    var isClickedInsideDiv = contains_targetElement.contains(targetElement);

    
   
    if (!isClickedInsideDiv) {
        $(field_append_result_search).css({'display':'none'})
        //убрать затемнение фона
        $(search__overlay).css({'display':'none'}) 
    }
});
// отслеживание клика на инпут
search_input.addEventListener('click', eventclick = () => { 
    //затемнение фона
    $(search__overlay).css({'display':'unset'}) 
    // если поиск не пустой то показать
    if (search_input.value != '') {
        $(field_append_result_search).css({'display':'flex'})     
    }
});

// обработчик инпута поисковой строки
let search_input_EventListener = null;
if(search_input_EventListener) {
    search_input.removeEventListener('input', search_input_EventListener);
}
search_input_EventListener = () => {
    let search_str = search_input.value.toLowerCase()

    $(field_append_result_search).css({'display':'flex'})   

    if(search_str == ''){
        $(field_append_result_search).css({'display':'none'})
    }

    $(field_append_result_search).children().remove()

    check_str_occurrence (search_str)    
}; 
search_input.addEventListener('input', search_input_EventListener);

// вводные данные и вывоз для проверки =================================================================
function check_str_occurrence (search_str){    
    
    //добавить строку для поиска
    let vse_okna = "пластиковые покраска установка монтаж автоматические алюминиевые окно раздвижные панорамные мягкие окна для веранд террас киоски и павильоны пвх нестандартные остекление балконов лоджии brusbox брусбокс профильные системы фурнитура подоконники откосы отливы нащельники козырьки солнцезащитные маркизы козырьки на покраска цветные рольставни роллеты ремонт ламинация ламинирование Endow Maco Siegenia Ендов Мако Зигения порталы"
    let plastic_okna = "пластиковые покраска установка монтаж ремонт окна окно пвх из пластика одностворчатые двухстворчатые трехстворчатые"
    let aluminii_okna = "алюминиевые покраска установка монтаж ремонт окна окно из алюминия,"
    let razdvizhn_okna ="раздвижные покраска установка монтаж ремонт окна окно порталы"
    let panoramma_okna ="панорамные покраска установка монтаж ремонт окна окно на балкон остекление застекление остеклить"
    let soft_okna="мягкие окна окно покраска установка монтаж ремонт для террас и веранд"
    let kiosk_n_pavilion="киоски покраска установка монтаж ремонт и павильоны"
    let ne_standart_okna="нестандартные установка монтаж покраска ремонт окна окно круглые треугольные"
    
    let vse_dveri = "двери пластиковые установка монтаж покраска автоматические механические козырьки раздвижные ремент прозрачные рольставни на"
    let plast_door="пластиковые двери установка монтаж ремонт"
    let moskit_door="москитные двери установка монтаж рисунок с принтом на магнитах ремонт окна и двери покраска"
    let aluminii_door="алюминиевые двери установка монтаж ремонт"
    let razdvizh_door="раздвижные двери установка монтаж ремонт"
    let balkon_door="балконные двери установка монтаж ремонт"
    let dushev_door="душевые двери установка монтаж в душ ванну ремонт"
    let vhod_door="входные двери установка монтаж ремонт"
    let mezhkom_door="межкомнатные двери установка монтаж ремонт"
    let arki_door="межкомнатные арки установка монтаж ремонт"
    let steklyan_door= "стеклянные двери установка монтаж ремонт"
    let pozhar_door="противопожарные двери установка монтаж ремонт"
    let pozhar_luk="противопожарные люки установка монтаж ремонт"

    let vse_moskit = "москитные сетки на окна и двери рисунок с принтом сетка ремонт покраска"
    let ramnaya="рамные москитные сетки рисунок с принтом ремонт на окна покраска"
    let vstavnaya="вставные москитные сетки рисунок с принтом ремонт на окна покраска"
    let razdvizhnaya="раздвижные москитные сетки рисунок с принтом ремонт на окна и двери покраска"
    let rulonnaya="рулонные москитные сетки рисунок с принтом ремонт на окна покраска"
    let plisse="москитные сетки плиссе рисунок с принтом ремонт на окна и двери покраска"

    let balkon="остекление балконов установка монтаж и лоджий холодное ремонт теплое панорамное французкий"

    let krovelnye_rabot ="кровельные работы монтаж мягкой кровли черепицы профнастила"

    let stelazh ="металлические стеллажи"

    let zaluizi="жалюзи вертикальные горизонтальные рулонные день ночь с рисунком"

    let raboty_so_steklom="работы со стеклом обработка и шлифовка нанесение заитной пленки резка стекла зеркал"

    let steklopaket="стеклопакеты установка однокамерные двухкамерные трехкамерные"

    let dop_k_oknam="дополнительно к окнам подоконники откосы пвх отливы нащельники козырьки детский замок ручки петли фурнитура накладки"
    //добавить ее в массив
    let array = [
        vse_okna,
        plastic_okna,
        aluminii_okna, 
        razdvizhn_okna,
        panoramma_okna,
        soft_okna,           
        kiosk_n_pavilion,
        ne_standart_okna,

        vse_dveri,
        plast_door,
        moskit_door,
        aluminii_door,
        razdvizh_door,
        balkon_door,
        dushev_door,
        vhod_door,
        mezhkom_door,
        arki_door,
        steklyan_door,
        pozhar_door,
        pozhar_luk,

        vse_moskit,
        ramnaya,  
        vstavnaya,            
        razdvizhnaya,        
        rulonnaya,            
        plisse,

        balkon,

        krovelnye_rabot,

        stelazh,

        zaluizi,

        raboty_so_steklom,

        steklopaket,

        dop_k_oknam,
    
    ]
    findSubstring(array, search_str);    
}

// функция поиска подстроки в строке в массиве
function findSubstring(strings, search_str) {
    let result = -1;
    let count = 0 
   
    let words = search_str.split(" ");
       
    for (let i = 0; i < strings.length; i++) {
        count = 0;    
        for (let j = 0; j < words.length; j++) {
           
            if (strings[i].includes(words[j])) {
                count++;
            } else count = 0;

            if (count == words.length) {
                result = i;

                // Получаем родительский элемент <div>
                var parentDiv = document.querySelector('.search__result');
                // Получаем количество дочерних элементов <div>
                var childDivsCount = parentDiv.querySelectorAll('li').length;

                if(childDivsCount < 10){
                    //добавить ее в вывод
                    if(result == 0){
                        $(field_append_result_search).append(`<li><a href="/catalog/okna"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Все окна</a></li>`)
                    }
                    if(result == 1){
                        $(field_append_result_search).append(`<li><a href="/catalog/plastic-okno"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Пластиковые окна</a></li>`)
                    }
                    if(result == 2){
                        $(field_append_result_search).append(`<li><a href="/catalog/aluminii-system"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Алюминиевые окна</a></li>`)
                    }
                    if(result == 3){
                        $(field_append_result_search).append(`<li><a href="/catalog/portal-okno"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Раздвижные окна</a></li>`)
                    }
                    if(result == 4){
                        $(field_append_result_search).append(`<li><a href="/catalog/panoramma-okno"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Панорамные окна</a></li>`)
                    }
                    if(result == 5){
                        $(field_append_result_search).append(`<li><a href="/catalog/okna"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Мягкие окна</a></li>`)
                    }
                    if(result == 6){
                        $(field_append_result_search).append(`<li><a href="/catalog/okna"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Киоки и павильоны</a></li>`)
                    }
                    if(result == 7){
                        $(field_append_result_search).append(`<li><a href="/catalog/okna"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Нестандартные окна</a></li>`)
                    }
                    if(result == 8){
                        $(field_append_result_search).append(`<li><a href="/catalog/door"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Все двери</a></li>`)
                    }
                    if(result == 9){
                        $(field_append_result_search).append(`<li><a href="/catalog/plastic-okno"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Пластиковые двери</a></li>`)
                    }
                    if(result == 10){
                        $(field_append_result_search).append(`<li><a href="/catalog/moskit_setki/raspashnaya"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Москитные двери</a></li>`)
                    }
                    if(result == 11){
                        $(field_append_result_search).append(`<li><a href="/catalog/aluminii-system"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Алюминиевые двери</a></li>`)
                    }
                    if(result == 12){
                        $(field_append_result_search).append(`<li><a href="/catalog/portal-okno"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Раздвижные двери</a></li>`)
                    }
                    if(result == 13){
                        $(field_append_result_search).append(`<li><a href="/catalog/door"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Двери на балкон</a></li>`)
                    }
                    if(result == 14){
                        $(field_append_result_search).append(`<li><a href="/catalog/doors/dver-dushevaya"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Душевые двери</a></li>`)
                    }
                    if(result == 15){
                        $(field_append_result_search).append(`<li><a href="/catalog/doors/dver-vhodnaya"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Входные двери</a></li>`)
                    }
                    if(result == 16){
                        $(field_append_result_search).append(`<li><a href="/catalog/doors/dver-mezhkomnatnaya"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Межкомнатные двери</a></li>`)
                    }
                    if(result == 17){
                        $(field_append_result_search).append(`<li><a href="/catalog/doors/mezhkomnatnie_arki"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Межкомнатные арки</a></li>`)
                    }
                    if(result == 18){
                        $(field_append_result_search).append(`<li><a href="/catalog/door"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Стеклянные двери</a></li>`)
                    }
                    if(result == 19){
                        $(field_append_result_search).append(`<li><a href="/catalog/doors/dver-pozhar"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Противопожарные двери</a></li>`)
                    }
                    if(result == 20){
                        $(field_append_result_search).append(`<li><a href="/catalog/doors/dver-luk"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Противопожарные люки</a></li>`)
                    }
                    if(result == 21){
                        $(field_append_result_search).append(`<li><a href="/catalog/moskit"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Все москитные сетки</a></li>`)
                    }
                    if(result == 22){
                        $(field_append_result_search).append(`<li><a href="/catalog/moskit_setki/ramnaya"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Рамные москитные сетки</a></li>`)
                    }
                    if(result == 23){
                        $(field_append_result_search).append(`<li><a href="/catalog/moskit_setki/vstavnaya"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Вставные москитные сетки</a></li>`)
                    }
                    if(result == 24){
                        $(field_append_result_search).append(`<li><a href="/catalog/moskit_setki/razdvizhnaya"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Раздвижные москитные сетки</a></li>`)
                    }
                    if(result == 25){
                        $(field_append_result_search).append(`<li><a href="/catalog/moskit_setki/rulonnaya"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Рулонные москитные сетки</a></li>`)
                    }
                    if(result == 26){
                        $(field_append_result_search).append(`<li><a href="/catalog/moskit_setki/plisse"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Москитные сетки плиссе</a></li>`)
                    }
                    if(result == 27){
                        $(field_append_result_search).append(`<li><a href="/catalog/balkon"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Остекление балконов и лоджий</a></li>`)
                    }
                    if(result == 28){
                        $(field_append_result_search).append(`<li><a href="/catalog/krovelnye-raboty"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Кровельные работы</a></li>`)
                    }
                    if(result == 29){
                        $(field_append_result_search).append(`<li><a href="/catalog/stellaj"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Металлические стеллажи</a></li>`)
                    }
                    if(result == 30){
                        $(field_append_result_search).append(`<li><a href="/catalog/jaluzi"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Все жалюзи</a></li>`)
                    }
                    if(result == 31){
                        $(field_append_result_search).append(`<li><a href="/catalog/steklo"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Работы со стеклом</a></li>`)
                    }
                    if(result == 32){
                        $(field_append_result_search).append(`<li><a href="/catalog/steklopaket"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Стеклопакеты</a></li>`)
                    }
                    if(result == 33){
                        $(field_append_result_search).append(`<li><a href="/catalog/komplect-okno"><img class="icon_header-menu" src="/images-catalog/admin_panel/icon-search.png">Оконная фурнитура</a></li>`)
                    }
                }
            } 
        } 
    }    
    return -1; // если подстрока не найдена
}

// ===============================================================================================================================================
// меню сайта

let field_info_menu = $('#menuStaticBackdrop');

const getAllMenu = (
    ) => {
    
        //вывод menu
    $(field_info_menu).append(`
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="menuStaticBackdropLabel">Каталог</h5>
                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>       
                <div class="modal-body">
                    <div id="info_site_menu" class="offcanvas-body">
                        <div class="menu__container">
                            <div class="menu__container--box_row menu__container--box_row--phone">
                                <div class="menu__container--box menu__container--box__width menu__container--box_padding0" >
                                    <div class="menu__container--box_row menu__container--box_column--phone">
                                        <div class="menu__container--box_row menu__container--box__width">
                                            <div class="menu__container--box">
                                                <img loading="lazy" class="img-menu" src="/images-catalog/endov/okna-furnitura-endov-02.png" alt="Пластиковые окна">
                                            </div>
                                            <div class="menu__container--box">
                                                <a class="menu__href--title" title="окна из пвх и алюминия цены" href="/catalog/okna">Все окна</a>
                                                <a class="menu__href--field" title="Пластиковые окна" href="/catalog/plastic-okno">Пластиковые окна</a>
                                                <a class="menu__href--field" title="Алюминиевые окна" href="/catalog/aluminii-system">Алюминиевые окна</a>
                                                <a class="menu__href--field" title="Раздвижные окна" href="/catalog/portal-okno">Раздвижные окна</a>
                                                <a class="menu__href--field" title="Панорамные окна" href="/catalog/panoramma-okno">Панорамные окна</a>
                                                <a class="menu__href--field" title="Мягкие окна" href="/catalog/soft-okno">Мягкие окна для веранд</a>
                                                <a class="menu__href--field" title="Павильоны и киоски" href="/catalog/okna">Павильоны и киоски</a>
                                                <a class="menu__href--field" title="Нестандартные окна" href="/catalog/okna">Нестандартные окна</a>
                                            </div>
                                            
                                        </div>
                                        <div class="menu__container--box_row menu__container--box__width menu__container--box__margin">
                                            <div class="menu__container--box">
                                                <img loading="lazy" class="img-menu" src="/images-catalog/moskit-plisse-blok1-setki.png" alt="москитные сетки">
                                            </div>
                                            <div class="menu__container--box">
                                                <a class="menu__href--title" title="Москитные сетки цены" href="/catalog/moskit">Все москитные сетки</a>
                                                <a class="menu__href--field" title="Рамная москитная сетка (Стандарт)" href="/catalog/moskit_setki/ramnaya">Рамная сетка</a>
                                                <a class="menu__href--field" title="Вставная москитная сетка" href="/catalog/moskit_setki/vstavnaya">Вставная сетка</a>
                                                <a class="menu__href--field" title="Раздвижная москитная сетка" href="/catalog/moskit_setki/razdvizhnaya">Раздвижная сетка</a>
                                                <a class="menu__href--field" title="Распашная москитная сетка" href="/catalog/moskit_setki/raspashnaya">Распашная сетка</a>
                                                <a class="menu__href--field" title="Рулонная москитная сетка" href="/catalog/moskit_setki/rulonnaya">Рулонная сетка</a>
                                                <a class="menu__href--field" title="Плиссе москитная сетка" href="/catalog/moskit_setki/plisse">Плиссе сетка</a>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu__container--box_row ">
                                        <div class="menu__container--box_row menu__container--box__width">
                                            <div class="menu__container--box">
                                                <img loading="lazy" class="img-menu" src="/images-catalog/dver/dver.png" alt="Козырьки на окно">
                                            </div>
                                            <div class="menu__container--box">                    
                                                <a class="menu__href--title" title="двери из пвх и алюминия цены" href="/catalog/door">Все двери</a>
                                                <div class="menu__container--box_row menu__container--box_column--phone">
                                                    <div class="menu__container--box">
                                                        <a class="menu__href--field" title="Пластиковые двери" href="/catalog/plastic-okno">Пластиковые двери</a>
                                                        <a class="menu__href--field" title="Москитные двери" href="/catalog/moskit_setki/raspashnaya">Москитные двери</a>
                                                        <a class="menu__href--field" title="Алюминиевые двери" href="/catalog/aluminii-system">Алюминиевые двери</a>
                                                        <a class="menu__href--field" title="Раздвижные двери" href="/catalog/portal-okno">Раздвижные двери</a>
                                                        <a class="menu__href--field" title="Балконные двери" href="/catalog/door">Балконные двери</a>
                                                        <a class="menu__href--field" title="Двери душевые" href="/catalog/doors/dver-dushevaya">Двери душевые</a>
                                                    </div>
                                                    <div class="menu__container--box menu__container--box__marginleft" >
                                                        <a class="menu__href--field" title="Двери входные" href="/catalog/doors/dver-vhodnaya">Двери входные</a>
                                                        <a class="menu__href--field" title="Двери межкомнатные" href="/catalog/doors/dver-mezhkomnatnaya">Двери межкомнатные</a>
                                                        <a class="menu__href--field" title="Межкомнатные арки" href="/catalog/doors/mezhkomnatnie_arki">Межкомнатные арки</a>                                             
                                                        <a class="menu__href--field" title="Стеклянные двери" href="/catalog/door">Стеклянные двери</a>
                                                        <a class="menu__href--field" title="Противопожарные двери" href="/catalog/doors/dver-pozhar">Противопожарные двери</a>
                                                        <a class="menu__href--field" title="Противопожарные люки" href="/catalog/doors/dver-luk">Противопожарные люки</a>
                                                        <a class="menu__href--title" title="Металлические стеллажи" style="padding-top: 5px;" href="/catalog/stellaj">Металлические стеллажи</a>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <div class="menu__container--box_row menu__container--box_column--phone">
                                        <div class="menu__container--box_row menu__container--box__width ">
                                        
                                            
                                            <div class="menu__container--box">
                                                <img loading="lazy" class="img-menu" src="/images-catalog/balkon-6.webp" alt="Балконы и лоджии">
                                            </div>
                                            <div class="menu__container--box">  
                                                <a class="menu__href--title" title="Остекление балконов и лоджий" href="/catalog/balkon">Балконы и лоджии</a>
                                                <a class="menu__href--field" title="Холодный балкон" href="/catalog/balkon">Холодное остекление</a>
                                                <a class="menu__href--field" title="Теплый балкон" href="/catalog/balkon">Теплое остекление</a>
                                                <a class="menu__href--field" title="Панорамное остекление" href="/catalog/balkon">Панорамное остекление</a>
                                                <a class="menu__href--field" title="Французкий балкон" href="/catalog/balkon">Французкий балкон</a>
                                            </div>
                                        </div>
                                                        
                                        <div class="menu__container--box_row menu__container--box__width menu__container--box__margin menu__container--box__marginbottom">
                                            <div class="menu__container--box">
                                                <img loading="lazy" class="img-menu" src="/images-catalog/okna-markiz.png" alt="Козырьки и маркизы">
                                            </div>
                                            <div class="menu__container--box">  
                                                <a class="menu__href--title" title="Козырьки и маркизы" href="/catalog/okna">Козырьки и маркизы</a>
                                                <a class="menu__href--field" title="Автоматические маркизы" href="/catalog/okna">Автоматические маркизы</a>
                                                <a class="menu__href--field" title="Механические маркизы" href="/catalog/okna">Механические маркизы</a>
                                                <a class="menu__href--field" title="Козырьки для крыльца" href="/catalog/door">Козырьки для крыльца</a>
                                            </div>
                                        </div>
                                                            
                                    
                                    </div>
                                </div>
                                <div class="menu__container--box menu__container--box__width menu__container--box_padding0">
                                    <div class="menu__container--box_row menu__container--box_column--phone">
                                        <div class="menu__container--box_row menu__container--box__width">
                                            <div class="menu__container--box">
                                                <img loading="lazy" class="img-menu" src="/images-catalog/onka-rollet.png" alt="Рольставни">
                                            </div>
                                            <div class="menu__container--box">
                                                <a class="menu__href--title" title="Рольставни" href="/catalog/okna">Рольставни</a>
                                                <a class="menu__href--field" title="Рольставни на окна" href="/catalog/okna">Рольставни на окна</a>
                                                <a class="menu__href--field" title="Рольставни в проем" href="/catalog/door">Рольставни в проем</a>
                                                <a class="menu__href--field" title="Прозрачные рольставни" href="/catalog/door">Прозрачные рольставни</a>
                                            </div>
                                        </div>
                                        <div class="menu__container--box_row menu__container--box__width menu__container--box__margin">
                                            <div class="menu__container--box">
                                                <img loading="lazy" class="img-menu" src="/images-catalog/krovelnye-raboty-1.webp" alt="Кровельные работы">
                                            </div>
                                            <div class="menu__container--box">
                                                <a class="menu__href--title" title="Кровельные работы" href="/catalog/krovelnye-raboty">Кровельные работы</a>    
                                                <a class="menu__href--field" title="Монтаж мягкой кровли" href="/catalog/krovelnye-raboty">Монтаж мягкой кровли</a>  
                                                <a class="menu__href--field" title="Монтаж металлочерепицы" href="/catalog/krovelnye-raboty">Монтаж черепицы</a>  
                                                <a class="menu__href--field" title="Монтаж профнастила" href="/catalog/krovelnye-raboty">Монтаж профнастила</a>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu__container--box_row menu__container--box_column--phone">
                                        <div class="menu__container--box_row menu__container--box__width">
                                            <div class="menu__container--box">
                                                <img loading="lazy" class="img-menu" src="/images-catalog/okna-remont.png" alt="Ремонт окон, дверей, сеток">
                                            </div>
                                            <div class="menu__container--box">   
                                                <a class="menu__href--title" title="Ремонт окон" href="/catalog/okna">Ремонт</a>
                                                <a class="menu__href--field" title="Ремонт окон" href="/catalog/okna">Ремонт окон</a>
                                                <a class="menu__href--field" title="Ремонт дверей" href="/catalog/door">Ремонт дверей</a>
                                                <a class="menu__href--field" title="Ремонт москитных сеток" href="/catalog/moskit">Ремонт москитных сеток</a>
                                            </div>
                                        </div>
                                        <div class="menu__container--box_row menu__container--box__width menu__container--box__margin">
                                            <div class="menu__container--box">
                                                <img loading="lazy" class="img-menu" src="/images-catalog/cvet_gamma.jpg" alt="Покраска окон">
                                            </div>
                                            <div class="menu__container--box">
                                                <a class="menu__href--title" title="Покраска" href="/catalog/okna">Покраска</a>
                                                <a class="menu__href--field" title="Покраска окон" href="/catalog/okna">Покраска окон</a>
                                                <a class="menu__href--field" title="Покраска дверей" href="/catalog/door">Покраска дверей</a>
                                                <a class="menu__href--field" title="Покраска москитных сеток" href="/catalog/moskit">Покраска сеток на окна</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu__container--box_row menu__container--box_column--phone">
                                        <div class="menu__container--box_row menu__container--box__width">
                                            <div class="menu__container--box">
                                                <img loading="lazy" class="img-menu" src="/images-catalog/okna-nashelnik.png" alt="Подоконники, Откосы ПВХ, Отливы, Нащельники, Козырьки">
                                            </div>
                                            <div class="menu__container--box">
                                                <a class="menu__href--title" title="Для окна" href="/catalog/okna">Для окна</a>
                                                <a class="menu__href--field" title="Подоконники" href="/catalog/okna">Подоконники</a>
                                                <a class="menu__href--field" title="Откосы ПВХ" href="/catalog/okna">Откосы ПВХ</a>
                                                <a class="menu__href--field" title="Отливы" href="/catalog/okna">Отливы</a>
                                                <a class="menu__href--field" title="Нащельники" href="/catalog/okna">Нащельники</a>
                                                <a class="menu__href--field" title="Козырьки" href="/catalog/okna">Козырьки</a>
                                            </div>
                                        </div>
                                        <div class="menu__container--box_row menu__container--box__width menu__container--box__margin">
                                            <div class="menu__container--box">
                                                <img loading="lazy" class="img-menu" src="/images-catalog/jaluzi-2.webp" alt="жалюзи">
                                            </div>
                                            <div class="menu__container--box">
                                                <a class="menu__href--title" title="Жалюзи" href="/catalog/jaluzi">Все жалюзи</a>
                                                <a class="menu__href--field" title="Жалюзи вертикальные" href="/catalog/jaluzi">Жалюзи вертикальные</a>
                                                <a class="menu__href--field" title="Жалюзи горизонтальные" href="/catalog/jaluzi">Жалюзи горизонтальные</a>
                                                <a class="menu__href--field" title="Жалюзи рулонные" href="/catalog/jaluzi">Жалюзи рулонные</a>
                                                <a class="menu__href--field" title="Жалюзи день-ночь" href="/catalog/jaluzi">Жалюзи день-ночь</a>
                                                <a class="menu__href--field" title="Жалюзи с рисунком" href="/catalog/jaluzi">Жалюзи с рисунком</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu__container--box_row menu__container--box_column--phone">
                                        <div class="menu__container--box_row menu__container--box__width">
                                            <div class="menu__container--box">
                                                <img loading="lazy" class="img-menu" src="/images-catalog/maco/MULTI-Zubehoer-Fangputzschere.jpg" alt="Оконная фурнитура">
                                            </div>
                                            <div class="menu__container--box">
                                                <a class="menu__href--title" title="Оконная фурнитура" href="/catalog/okna">Оконная фурнитура</a>
                                                <a class="menu__href--field" title="Фурнитура ENDOW" href="/catalog/okna">Фурнитура ENDOW</a>
                                                <a class="menu__href--field" title="Фурнитура MACO" href="/catalog/okna">Фурнитура MACO</a>
                                                <a class="menu__href--field" title="Фурнитура SIEGENIA" href="/catalog/okna">Фурнитура SIEGENIA</a>
                                            </div>
                                        </div>
                                        <div class="menu__container--box_row menu__container--box__width menu__container--box__margin menu__container--box__marginbottom">
                                            <div class="menu__container--box">
                                                <img loading="lazy" class="img-menu" src="/images-catalog/steklo-3.webp" alt="Работа со стеклом">
                                            </div>
                                            <div class="menu__container--box">      
                                                <a class="menu__href--title" title="Работа со стеклом" href="/catalog/steklo">Работа со стеклом</a>
                                                <a class="menu__href--field" title="Стекла и зеркала" href="/catalog/steklo">Обработка и шлифовка</a>
                                                <a class="menu__href--field" title="Стекла и зеркала" href="/catalog/steklo">Нанесение защ. пленки</a>
                                                <a class="menu__href--field" title="Зеркала" href="/catalog/steklo">Резка стекла и зеркал</a> 
                                                <a class="menu__href--title" style="padding-bottom: 0px" title="Стеклопакеты" href="/catalog/steklopaket">Стеклопакеты</a>     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                              
                </div>  
            </div>
        </div>`)     
}

getAllMenu()


// ===============================================================================================================================================
// меню навигации

    let list_group = document.querySelector(".catalog-balkon-wrapper > .list-group-container");
    let footer = document.querySelector(".footer");

    const getStoppElementOnHight = ({
    targetElement,
    stopperElement,
    fixedTop,
    offset = 0
}) => {
    let globalStopperCollisionScrollPosition = null;
    return (e) => {
        let targetRect = targetElement.getBoundingClientRect();
    
        let stopperReact = stopperElement.getBoundingClientRect();
    
        let stopperTopBorder = stopperReact.top;
    
        let targetBottomBorder = targetRect.y + targetRect.height + offset;
        
        let absoluteTop = stopperTopBorder + window.scrollY - targetRect.height - offset;
    
        if(
            globalStopperCollisionScrollPosition
            && window.scrollY < globalStopperCollisionScrollPosition
        ) {
            targetElement.style.position = "fixed";
            targetElement.style.top = `${fixedTop}px`;
            globalStopperCollisionScrollPosition = null;
            return;
        }
        if(globalStopperCollisionScrollPosition) return
        if (targetBottomBorder > stopperTopBorder){
            targetElement.style.position = "absolute";
            targetElement.style.top = `${absoluteTop}px`;
            globalStopperCollisionScrollPosition = window.scrollY;
        }
    }
}

document.addEventListener("scroll", getStoppElementOnHight({
    targetElement: list_group,
    stopperElement: footer,
    fixedTop: 180,
    offset: 120
}));
  