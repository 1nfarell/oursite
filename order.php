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
    <!-- <link rel="stylesheet" href="/assets/css/catalog.css"> -->
    <link rel="stylesheet" href="/assets/css/moskit.css">
    <link rel="stylesheet" href="/assets/css/menu.css">
    <link rel="stylesheet" href="/assets/css/stat.css">
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
                                        <input id="status__input--search" type="text" name="input_search" class="form-control request__input--search past-input" 
                                        title="Подсказка поиска:
    по заказу: з\ номер
    по наименованию: н\ текст
    по фио: ф\ текст
    по телефону: т\ 89190010101
    по адресу: а\ текст
    по монтажнику: м\ текст
    по дате монтажа: дм\ 01.01.01 или дд\ 01.01.01
    по пользователю: п\ текст
    по дате оформления до\ 01.01.01
    по статусу оплаты: со\ текст
    по последней оплате: по\ 01.01.01
    по статусу готовности: сг\ текст
Альтернатива: 
    Вместо обратного слэша (\) можно использовать обычный слэш (/)
Принцип работы: 
    Поиск работает по принципу поиска подстроки в строке. 
    Вводите строку и ждете 2с, найденные записи отобразятся сами.
Удаление записи: 
    Вводите номер заказа -> кнопка Enter -> кнопка 'Удалить', в найденном заказе.
"  
                                                aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg">
                                        <button id="btn_search" class="btn btn-outline-secondary" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                            </svg>
                                        </button>
                                    </div>
                                    
                                </form>
                                <span title="наверх страницы" onclick="topScroll()" class="btn btn-outline-secondary btn__topScroll">Наверх</span>
                            </div>
                            <div class="header-addres">
                                <!-- <img class="icon compas" src="/images/compas.svg" alt="адрес офиса Открытие">
                                <a href="#ouradress" title="Адрес офиса Оконного завода Открытие">Наш офис в г. Волжском</a> -->
                            </div>
                        </div>                       
                        <div class="header-right">   
                            <div class="header-right--form_login">      
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
                            <span title="добавить заказ" data-bs-toggle="modal" data-bs-target="#ModalAddOrder" class="btn btn-outline-primary btn__add--order">Добавить заказ</span>
                        </div>
                    </div>
                    <div class="menu" >
                        <div class ="menu-links">
                            <input type="checkbox" name="menu" id="btn-menu" />
                            <label for="btn-menu"><img class="icon-menu" src="/images/menu.png"></label> 
                            <ul>
                                <!-- <a  href="/cabinet.php">Личный кабинет</a>        
                                <a  href="/blog.php" title="Услуги Волжского Оконного завода ОТКРЫТИЕ">Статьи</a> -->
                                
                                
                                <a  href="/status.php" title="Отслеживание заказа Открытие">Отслеж. заказа</a>
                                <a rel="nofollow" href="tg://resolve?domain=maksbeketsky">Поддержка</a>
                                <?php    
                                    if ($_SESSION['user']['id'] == 24) {
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
            <div class="main main_order_page">   
                <div class="box_left-menu_order_page">
                    <div class="container--go">
                        <div id="menu_filter" class="container__menu--filter">
                                    <!-- вывод селектора для поиска по стутуса заказа -->
                        </div>
                        <div class="box_left-menu_order_page--container">
                            <div class="order_counter_status"></div> 
                        </div>
                    </div>
                </div>  
                <div class="catalog-moskit-wrapper main_page_order_book">                                   
                         
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
                                            <input id="sum_order" name="price_order" type="number" class="form-control" aria-label="Сумма оплаты в рублях (с точкой и двумя десятичными знаками)" maxlength="20" required>
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
                                            <input id="persent_sum" type="number" aria-label="Процент" class="form-control" maxlength="3" max="100" value="50">
                                            <span id="input-group-text_dollar" class="input-group-text">%</span>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">ФИО заказчика</span>
                                            <input name="contact_name_order" type="text" class="form-control" aria-label="ФИО заказчика" aria-describedby="inputGroup-sizing-default" maxlength="255" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Телефон</span>
                                            <input name="contact_order" type="tel" pattern="[\d()+\-\s]+" class="form-control" aria-label="Контакты" aria-describedby="inputGroup-sizing-default" maxlength="255" required>
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
                    <div  class="all-order-title">
                        <div id="title_name_order_status" >ВСЕ ЗАКАЗЫ</div> 
                        <div class="container--row_menu">   
                            <div class="btn-menu-filter">
                                <button type="button" id="date_sort_order" value="DESC" class="btn btn-outline-secondary btn_reload btn_reload--style"><img class="btn_reload_img" style="width:23px" src="/images-catalog/admin_panel/icon-up-and-down.png" title="сортировка по дате оформления: старый - новый"></button>        
                            </div>                          
                            <div class="btn-menu-filter">
                                <button type="button" onclick="cleanFilter()" class="btn btn-outline-secondary btn_reload btn_reload--style"><img class="btn_reload_img" style="width:23px" src="/images/reset-icon.png" title="сброс всех фильтров и очистка поисковой строки"></button>        
                            </div> 
                            <div class="btn-menu-filter">
                                <button type="button" onclick="reload_page()" class="btn btn-outline-secondary btn_reload btn_reload--style" ><img class="btn_reload_img" style="width:23px" src="/images/reload-icon.png" title="перезагрузка страницы"></button>        
                            </div> 
                            <?php    
                                if ($_SESSION['user']['id'] == 2 || $_SESSION['user']['id'] == 24 || $_SESSION['user']['id'] == 27) {
                                    ?>                              
                            <div class="btn-menu-filter">
                                <button id="btn_open_analitics" onclick="show_page_analitics()"  type="button" class="btn btn-outline-secondary btn_reload btn_reload--style" ><img class="btn_reload_img" style="width:23px" src="/images-catalog/admin_panel/icon-analitics.png" title="открыть аналитику"></button>
                            </div>  <?
                                    };
                            ?> 
                            <div class="btn-menu-filter">
                                <button id="btn_get_excel"  type="button" class="btn btn-outline-secondary btn_reload btn_reload--style" ><img class="btn_reload_img" style="width:23px" src="/images/save-icon.png" title="скачать выбранные заказы в формате Excel"></button>
                            </div>  
                        </div>
                    </div>
                    <div id="table__order" class="table-responsive">
                        <!-- вывод таблицы -->
                    </div>

                    
                </div>    
            </div>
            <!-- аналитика  -->
            <div class="container--page_statistics">
                
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
<script defer src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/jquery-3.6.1.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/xlsx@0.17.4/dist/xlsx.full.min.js"></script>
<script src="assets/js/main.js"></script>

<script src="/order/add_order.js"></script>
<script src="/order/get_order.js"></script>

<script src="/panel_admin/get_info_about_update.js"></script>

<script defer type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script defer src="/statistics/stat.js"></script>
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
        
            presum.value = Math.round(persent_sum.value && sum_order.value ? 
                sum_order.value * persent_sum.value / 100 : 0)
            
            persent_sum.addEventListener('input', () => {
                if (sum_order.value) {
                    let presum_temp = sum_order.value * persent_sum.value / 100;              
                    presum.value = Math.round(presum_temp) //проценты
                    
                }
            });
            
            sum_order.addEventListener('input', () => {
                if (persent_sum.value) {
                    let sum_order_presum_temp = sum_order.value * persent_sum.value / 100;                 
                    presum.value = Math.round(sum_order_presum_temp) //сумма заказа
                }
            });

            presum.addEventListener('input', () => {
                if (sum_order.value) {
                    let persent_sum_temp = presum.value * 100 / sum_order.value;                   
                    persent_sum.value = Math.round(persent_sum_temp) //предоплата
                    
                }
            });
        }
    });
</script> 
 <!-- меню навигации -->
 <script>
        let list_group = document.querySelector(".box_left-menu_order_page > .container--go");
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
        fixedTop: 120,
        offset:270
    }));
    </script>
</body>
</html>