<?php
session_start();
    
if (!$_SESSION['user']) {
    header('Location: /login.php');
};

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/index.css">
    <link rel="stylesheet" href="/assets/css/addpost.css">
    <link rel="stylesheet" href="/assets/css/order.css">
    <link rel="stylesheet" href="/assets/css/status.css">
    <link rel="stylesheet" href="/assets/css/catalog.css">
    <link rel="stylesheet" href="/assets/css/moskit.css">
    <title>Кабинет</title>
    
    <meta name="robots" content="noindex">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/site.webmanifest">
</head>
<body>

<!-- header -->

    <div id="body" class="container-main">
        <header id="header">
            
            <div class="header--container">
                <div class="header-center">
                    <a title="Нажми, чтобы вернуться на главную" href="/">
                        <span class="header-namefirm">ОКОННЫЙ ЗАВОД</span>
                        <span class="header-namefirm">ОТКРЫТИЕ</span>
                        <span class="header-tagline">СОХРАНЯЕТ ТЕПЛО И ТИШИНУ</span>
                    </a>
                </div>
                <div class="header--container__center">
                    <div class="header">
                        <div class="header-left">
                            <div class="header-time">
                                <form id="search-form" method="POST">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text past-btn" id="inputGroup-sizing-lg">№</span>
                                        <input id="status__input--search" type="text" name="input_search" class="form-control request__input--search past-input"  aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg">
                                        <button id="btn_search" class="btn btn-outline-secondary" type="submit">НАЙТИ</button>
                                    </div>
                                </form>
                            </div>
                            <div class="header-addres">
                                <!-- <img class="icon compas" src="/images/compas.svg" alt="адрес офиса Открытие">
                                <a href="#ouradress" title="Адрес офиса Оконного завода Открытие">Наш офис в г. Волжском</a> -->
                            </div>
                        </div>                       
                        <div class="header-right">   
                                                  
                            <div class="header-right-form">
                                <form>
                                    <p><?= $_SESSION['user']['full_name'] ?></p>
                                </form>
                            </div>
                            <div class="header-right-form-out">                    
                                <?php if(isset($_SESSION['user'])): ?> 
                                    <a href="vendor/logout.php">Выход</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="menu" >
                        <div class="dropdown menu-catalog">
                            <button type="button" class="btn btn-secondary dropdown-toggle menu-catalog-links" data-bs-toggle="dropdown" aria-expanded="false">
                                Каталог
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" title="Жалюзи" href="/catalog/jaluzi">Жалюзи</a></li>
                                <li><a class="dropdown-item" title="Рольставни на окна" href="/catalog/jaluzi">Рольставни на окна</a></li>
                                <!-- <li><a class="dropdown-item" title="Жалюзи и рольставни на окна" href="/catalog/jaluzi">Маркизы</a></li> -->
                                <li><a class="dropdown-item" title="Стекла и зеркала" href="/catalog/steklo">Стекла и зеркала</a></li>
                                <li><a class="dropdown-item" title="Стеклопакеты" href="/catalog/steklopaket">Стеклопакеты</a></li> 
                                <li><a class="dropdown-item" title="Кровельные работы" href="/catalog/krovelnye-raboty">Кровельные работы</a></li>
                                <li><a class="dropdown-item" title="Металлические стеллажи" href="/catalog/stellaj">Металлические стеллажи</a></li>
                            </ul>
                        </div>
                        <div class="dropdown menu-catalog">
                            <button type="button" class="btn btn-secondary dropdown-toggle menu-catalog-links" data-bs-toggle="dropdown" aria-expanded="false">
                                Окна
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" title="окна из пвх и алюминия цены" href="/catalog/okna">Все окна</a></li>
                                <li><a class="dropdown-item" title="Пластиковые окна" href="/catalog/plastic-okno">Пластиковые окна</a></li>
                                <li><a class="dropdown-item" title="Алюминиевые окна" href="/catalog/aluminii-system">Алюминиевые окна</a></li>
                                <li><a class="dropdown-item" title="Раздвижные окна" href="/catalog/portal-okno">Раздвижные окна</a></li>
                                <li><a class="dropdown-item" title="Панорамные окна" href="/catalog/panoramma-okno">Панорамные окна</a></li>
                                <li><a class="dropdown-item" title="Мягкие окна" href="/catalog/soft-okno">Мягкие окна</a></li>
                                <li><a class="dropdown-item" title="Балконы и лоджии под ключ" href="/catalog/balkon">Остекление балконов и лоджий</a></li>
                                <li><a class="dropdown-item" title="Фурнитура для окон" href="/catalog/komplect-okno">Фурнитура для окон</a></li>
                            </ul>
                        </div>
                        <div class="dropdown menu-catalog">
                            <button type="button" class="btn btn-secondary dropdown-toggle menu-catalog-links" data-bs-toggle="dropdown" aria-expanded="false">
                                Двери
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" title="двери из пвх и алюминия цены" href="/catalog/door">Все двери</a></li>
                                <li><a class="dropdown-item" title="Пластиковые двери" href="/catalog/plastic-okno">Пластиковые двери</a></li>
                                <li><a class="dropdown-item" title="Алюминиевые двери" href="/catalog/aluminii-system">Алюминиевые двери</a></li>
                                <li><a class="dropdown-item" title="Раздвижные двери" href="/catalog/portal-okno">Раздвижные двери</a></li>
                                <!-- <li><a class="dropdown-item" title="Балконные двери" href="/catalog/dver-balkonnaya">Балконные двери</a></li> -->
                                <li><a class="dropdown-item" title="Двери входные" href="/catalog/doors/dver-vhodnaya">Двери входные</a></li>
                                <li><a class="dropdown-item" title="Двери душевые" href="/catalog/doors/dver-dushevaya">Двери душевые</a></li>
                                <!-- <li><a class="dropdown-item" title="Стеклянные двери" href="/catalog/dver-steklyannaya">Стеклянные двери</a></li> -->
                                <li><a class="dropdown-item" title="Противопожарные двери" href="/catalog/doors/dver-pozhar">Противопожарные двери</a></li>
                                <!-- <li><a class="dropdown-item" title="Противопожарные люки" href="/catalog/dver-luk">Противопожарные люки</a></li> -->
                                <li><a class="dropdown-item" title="Рольставни" href="/catalog/jaluzi">Рольставни</a></li>
                                <li><a class="dropdown-item" title="Фурнитура для дверей" href="/catalog/komplect-okno">Фурнитура для дверей</a></li>
                            </ul>
                        </div>
                        <div class="dropdown menu-catalog">
                            <button type="button" class="btn btn-secondary dropdown-toggle menu-catalog-links" data-bs-toggle="dropdown" aria-expanded="false">
                                Москитные сетки
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" title="Москитные сетки цены" href="/catalog/moskit">Все москитные сетки</a></li>
                                <li><a class="dropdown-item" title="Рамная москитная сетка (Стандарт)" href="/catalog/moskit_setki/ramnaya">Рамная сетка (Стандарт)</a></li>
                                <li><a class="dropdown-item" title="Вставная москитная сетка" href="/catalog/moskit_setki/vstavnaya">Вставная сетка</a></li>
                                <li><a class="dropdown-item" title="Раздвижная москитная сетка" href="/catalog/moskit_setki/razdvizhnaya">Раздвижная сетка</a></li>
                                <li><a class="dropdown-item" title="Распашная москитная сетка" href="/catalog/moskit_setki/raspashnaya">Распашная сетка</a></li>
                                <li><a class="dropdown-item" title="Рулонная москитная сетка" href="/catalog/moskit_setki/rulonnaya">Рулонная сетка</a></li>
                                <li><a class="dropdown-item" title="Плиссе москитная сетка" href="/catalog/moskit_setki/plisse">Плиссе сетка</a></li>
                            </ul>
                        </div>                        
                          
                        <div class ="menu-links">
                            <input type="checkbox" name="menu" id="btn-menu" />
                            <label for="btn-menu"><img class="icon-menu" src="/images/menu.png"></label> 
                            <ul>
                            <!-- <a  href="/cabinet.php">Личный кабинет</a>        
                            <a  href="/blog.php" title="Услуги Волжского Оконного завода ОТКРЫТИЕ">Статьи</a> -->
                            <span title="наверх страницы" onclick="topScroll()" class="">Наверх</span>
                            <span title="добавить заказ" data-bs-toggle="modal" data-bs-target="#ModalAddOrder" class="">Добавить заказ</span>
                            <a  href="/status.php" title="Отслеживание заказа Открытие">Отслеж. заказа</a>
                            <a rel="nofollow" href="tg://resolve?domain=maksbeketsky">Поддержка</a>
                            <?php    
                                if ($_SESSION['user']['id'] == 2) {
                                    ?>
                                        <a rel="nofollow" href="/admin.php">Панель админ.</a>
                                    <?
                                };
                            ?>
                            <!-- Кнопка-триггер модального окна -->
                            <span id="update_info_trigger" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">Что нового</span>
                            </ul>
                        </div>             
                    </div>
                </div>
            </div>
        </header>   
        <!-- main -->
        <main>   
            <div class="main">     
                <div class="catalog-balkon-wrapper catalog-moskit-wrapper">                                   
                         
                    <form id="form--add_order" method="POST">
                        <div id="ModalAddOrder" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Добавить заказ</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>       
                                    <div class="modal-body">
                                        <div class="input-group mb-3">
                                            <span  class="input-group-text" id="inputGroup-sizing-default">Номер заказа</span>
                                            <input id="input-form--add_order" name="number_order" type="text" class="form-control" aria-label="Номер заказа" aria-describedby="inputGroup-sizing-default" maxlength="20" required >
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Наименование</span>
                                            <input name="description_order" type="text" class="form-control" aria-label="Наименование" aria-describedby="inputGroup-sizing-default" maxlength="255" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Сумма заказа</span>
                                            <input id="sum_order" name="price_order" type="number" class="form-control" aria-label="Сумма оплаты в рублях (с точкой и двумя десятичными знаками)" maxlength="20" step="100" required>
                                            <span id="input-group-text_dollar" class="input-group-text">₽</span>
                                        </div>   
                                        <div class="input-group mb-3">               
                                            <select name="price_order--status" onchange="changeVarianPay(this);" id="price_order_stat" class="form-select form-select-default" required>
                                                <option disabled selected>Выберите статус оплаты</option>
                                                <option style="display:none" value="Не оплачен">Не оплачен</option>
                                                <option value="Предоплата">Предоплата</option>
                                                <option value="Рассрочка">Рассрочка</option>
                                                <option value="Оплачен">Оплачен</option>
                                            </select>
                                        </div>
                                        <div id="input_predoplata" style="display:none;" class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Предоплата</span>
                                            <input id="presum" name="sum_pay" type="number" class="form-control" aria-label="Предоплата в рублях (с точкой и двумя десятичными знаками)" style="width:170px" maxlength="20" >
                                            <span id="input-group-text_dollar"  class="input-group-text">₽</span>
                                            <input id="persent_sum" type="number" aria-label="Процент" class="form-control" maxlength="3" max="100" step="5" value="50" onkeydown="return false" onwheel="return false">
                                            <span id="input-group-text_dollar" class="input-group-text">%</span>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">ФИО заказчика</span>
                                            <input name="contact_name_order" type="text" class="form-control" aria-label="ФИО заказчика" aria-describedby="inputGroup-sizing-default" maxlength="255" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Контакты</span>
                                            <input name="contact_order" type="text" class="form-control" aria-label="Контакты" aria-describedby="inputGroup-sizing-default" maxlength="255" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Адрес доставки</span>
                                            <input name="adress_order" type="text" class="form-control" aria-label="Адрес" placeholder="не указывать, если самовывоз" aria-describedby="inputGroup-sizing-default" maxlength="255">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Монтажник</span>
                                            <input name="montazh_order" type="text" class="form-control" aria-label="Монтаж" placeholder="не указывать, если без монтажа" aria-describedby="inputGroup-sizing-default" maxlength="255">
                                        </div>
                                        <div class="input-group mb-1">
                                            <button id="btn-form--add_order" type="submit" class="btn btn-primary ">Добавить заказ</button>
                                        </div>    
                                    </div>
                                    <div class="modal-footer">
                                    
                                        
                                        <div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                                </svg>
                                                <span>После нажатия "Добавить заказ" страница перезагрузится через 2с.</span>
                                            </div>
                                        </div>
                                    </div>                                       
                                      
                                </div>
                            </div>
                        </div>                        
                    </form>
                    
                    
                    <div  class="offcanvas offcanvas-start "  tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="staticBackdropLabel">Что нового?</h5>
                        <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
                    </div>
                    <div id="info_site_update" class="offcanvas-body">
                        
                    </div>
                    </div>
                    
                    <div style="padding-bottom: 0px;" class="balkon-wrapper">   
                                
                        <div class="container--row_menu">
                            <div id="menu_filter" class="container__menu--filter">
                                <!-- вывод селектора для поиска по стутуса заказа -->
                            </div>
                            <div>
                                <button type="button" onclick="reload_page()" class="btn btn-outline-primary">Reload</button>        
                            </div>  
                        </div>
                    </div>
                    <div style="padding-bottom: 0px;" class="balkon-wrapper all-order-title">
                        <div id="title_name_order_status" style="padding:20px 0; width:100%; font-size: 22px; font-weight: 600;">ВСЕ ЗАКАЗЫ</div>  
                    </div>
                    <div id="table__order" class="balkon-wrapper table-responsive">
                        <!-- вывод таблицы -->
                    </div>
                </div>    
            </div>
        </main> 
        <!-- футтер -->
        <footer>
            <div class="footer">
                
                <div class="footer-down">
                    <div>
                        <div class="contant-info-left">
                            <span class="contant-info-left__title">Оконный завод ОТКРЫТИЕ</span>
                            <p class="contant-info-left__description">
                                Наша компания изготавливает и устанавливает москитные сетки в Волжском, Волгограде, Николаевске и в других городах Волгоградской области.
                            </p>
                            <div class="contant-info-left-time">
                                <div>
                                    <span style="text-decoration:underline;" class="footerminus">Мы работаем</span>
                                    <span class="footertext">Пн-Пт с 08:00 до 18:00</span>
                                    <span style="text-decoration:underline;" class="footerminus">Почта</span>
                                    <span id="main-contact-email" class="tel" title="Нажми, чтобы скопировать электронную почту">contact@окна-открытие.рф</span>
                                </div>
                                
                                <div>
                                    <span style="text-decoration:underline;" class="footerminus">Адрес</span>
                                    <span id="copyadress" title="Нажми, чтобы скопировать адрес офиса Открытие" class="footertext tel">1-й Индустриальный проезд, 18к15, г. Волжский, Волгоградская обл.</span>
                                    <span id="copyadress2" title="Нажми, чтобы скопировать адрес офиса Открытие" class="footertext tel">1-й Индустриальный проезд, 18, г. Волжский, Волгоградская обл., офис 104, этаж 1</span>
                                </div>
                            </div>
                        </div>
                        <div class="contant-info-center">
                            <span class="footertext">Полезная информация</span>
                            <span class="footerminus">_____</span>
                            <a class="footertext" href="/info/cooperation">Сотрудничество</a>

                        </div>
                    </div>
                    <div class="copyright">
                        <span>Copyright © Оконный завод Открытие, 2022-2023</span>
                        <span> <a style="color:#ffffff" href="https://mndp-studio.ru/">Made with love by MndP.</a> contact@mndp-studio.ru</span>
                    </div>
                </div>     
            </div>  
        </footer>
        <!-- сообщение о копировании телефона -->
        <div class="AlertPlaceholder" id="liveAlertPlaceholder"></div>
    </div>
<!-- jquery -->
<script src="/assets/js/jquery-3.6.1.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="order/add_order.js"></script>
<script src="order/get_order.js"></script>
<script src="panel_admin/get_info_about_update.js"></script>
<script src="order/display_status_info.js"></script>
<script defer src="/assets/js/bootstrap.bundle.min.js"></script>
<!-- Липкий заголовок -->
<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("header");

    function myFunction() {
        if ($(this).scrollTop() > 0) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script> 
<script>
    function topScroll(){
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }
</script>

<script>
    //считаем проценты в модальном окне "добавить заказ"
    let sum_order = document.getElementById('sum_order')
    let persent_sum = document.getElementById('persent_sum')
    let presum = document.getElementById('presum')
    let price_order_stat = document.getElementById('price_order_stat')

    price_order_stat.addEventListener('change', () => {
  
        if (input_predoplata.style.display == 'flex') {
        
            presum.value = persent_sum.value && sum_order.value ? 
                sum_order.value * persent_sum.value / 100 : 0;
            
            persent_sum.addEventListener('input', () => {
                if (sum_order.value) {
                    presum.value = sum_order.value * persent_sum.value / 100;
                }
            });
            
            sum_order.addEventListener('input', () => {
                if (persent_sum.value) {
                    presum.value = sum_order.value * persent_sum.value / 100;
                }
            });

            presum.addEventListener('input', () => {
                if (sum_order.value) {
                    persent_sum.value = presum.value * 100 / sum_order.value;
                }
            });
        }
    });
</script> 
</body>
</html>