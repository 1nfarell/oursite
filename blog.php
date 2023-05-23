<?php

include 'vendor/generator.php';
include 'vendor/pagination.php';
?>

<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Блог - Открытие</title>
    <meta name="application-name" content="">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://xn----7sbqlhcsgevuc0j.xn--p1ai/blog.php">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:site_name" content="Оконный завод Открытие">
    <meta property="og:image" content="/images-catalog/moskit-banner.png">
    <meta name="robots" content="index,follow">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="canonical" href="https://xn----7sbqlhcsgevuc0j.xn--p1ai/blog.php">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/index.css">
    <link rel="stylesheet" href="/assets/css/catalog.css">
    <link rel="stylesheet" href="/assets/css/moskit.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/site.webmanifest">
    
</head>
<body>
    <div id="wrap_preloader" class="d-flex justify-content-center" style="position: fixed;top: 400px;width: 100%;margin: 0 auto;z-index: 100">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Загрузка...</span>
        </div>
    </div>
    <h1 style="position: absolute;top: -99999px;left: -99999px;" class="hide-h1">Читать Блог Открытие</h1>
    <div id="body" style="visibility: hidden;" class="container-main">
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
                                <img class="icon time" src="/images/time.svg" alt="режим работы Открытие">
                                <span title="Режим работы Оконного завода Открытие">Пн-Пт с 08:00 до 18:00</span>
                            </div>
                            <div class="header-addres">
                                <img class="icon compas" src="/images/compas.svg" alt="адрес офиса Открытие">
                                <a href="#ouradress" title="Адрес офиса Оконного завода Открытие">Наш офис в г. Волжском</a>
                            </div>
                        </div>                       
                        <div class="header-right">
                            <div>
                                <img class="icon phone" src="/images/phone.svg" alt="Позвонить в офис Открытие">
                                <a id="main-telegram_href" rel="nofollow" href=""><img class="icon viber" src="/images/telegram.svg" title="Нажми, чтобы перейти в чат telegram" alt="сделать заказ москитной сетки на окно в telegram"></a>
                                <a id="main-whatsup_href" rel="nofollow" href=""> <img class="icon whatsup" title="Нажми, чтобы перейти в чат whatsup" src="/images/whatsup.svg" alt="сделать заказ москитной сетки на окно в whatsup"></a>
                                <span title="Отдел продаж. Нажми, чтобы скопировать номер телефона" id="main-contact_tel_1" class="tel"></span>
                            </div>
                            <div>
                                <span title="Отдел продаж. Нажми, чтобы скопировать номер телефона" id="main-contact_tel_2" class="tel"></span>
                            </div>
                        </div>
                    </div>
                    <div class="menu" >
                        <div class="dropdown menu-catalog">
                            <button type="button" class="btn btn-secondary dropdown-toggle menu-catalog-links" data-bs-toggle="dropdown" aria-expanded="false">
                                Каталог
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" title="Пластиковые окна" href="/catalog/plastic-okno">Пластиковые окна</a></li>
                                <li><a class="dropdown-item" title="Алюминиевые конструкции" href="/catalog/aluminii-system">Алюминиевые конструкции</a></li>
                                <li><a class="dropdown-item" title="Портальные системы" href="/catalog/portal-okno">Портальные системы</a></li>
                                <li><a class="dropdown-item" title="Панорамное остекление" href="/catalog/panoramma-okno">Панорамное остекление</a></li>
                                <li><a class="dropdown-item" title="Мягкие окна" href="/catalog/soft-okno">Мягкие окна</a></li>
                                <li><a class="dropdown-item" title="Стекла и зеркала" href="/catalog/steklo">Стекла и зеркала</a></li>
                                <li><a class="dropdown-item" title="Стеклопакеты" href="/catalog/steklopaket">Стеклопакеты</a></li>
                                <li><a class="dropdown-item" title="Москитные сетки" href="/catalog/moskit">Москитные сетки</a></li>
                                <li><a class="dropdown-item" title="Жалюзи" href="/catalog/jaluzi">Жалюзи</a></li>
                                <li><a class="dropdown-item" title="Комплектующие к окнам" href="/catalog/komplect-okno">Комплектующие к окнам</a></li>
                                <li><a class="dropdown-item" title="Балконы и лоджии под ключ" href="/catalog/balkon">Балконы и лоджии под ключ</a></li>
                                <li><a class="dropdown-item" title="Двери входные" href="/catalog/dver-vhodnaya">Двери входные</a></li>
                                <li><a class="dropdown-item" title="Двери душевые" href="/catalog/dver-dushevaya">Двери душевые</a></li>
                                <li><a class="dropdown-item" title="Противопожарные двери по ГОСТу" href="/catalog/dver-pozhar">Противопожарные двери по ГОСТу</a></li>
                                <li><a class="dropdown-item" title="Кровельные работы" href="/catalog/krovelnye-raboty">Кровельные работы</a></li>
                                <li><a class="dropdown-item" title="Стеллажи" href="/catalog/stellaj">Стеллажи</a></li>
                            </ul>
                        </div>
                        <div class="dropdown menu-catalog">
                            <button type="button" class="btn btn-secondary dropdown-toggle menu-catalog-links" data-bs-toggle="dropdown" aria-expanded="false">
                                Москитные сетки
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" title="Рамная москитная сетка (Стандарт)" href="/catalog/moskit_setki/ramnaya">Рамная сетка (Стандарт)</a></li>
                                <li><a class="dropdown-item" title="Вставная москитная сетка" href="/catalog/moskit_setki/vstavnaya">Вставная сетка</a></li>
                                <li><a class="dropdown-item" title="Раздвижная москитная сетка" href="/catalog/moskit_setki/razdvizhnaya">Раздвижная сетка</a></li>
                                <li><a class="dropdown-item" title="Распашная москитная сетка" href="/catalog/moskit_setki/raspashnaya">Распашная сетка</a></li>
                                <li><a class="dropdown-item" title="Рулонная москитная сетка" href="/catalog/moskit_setki/rulonnaya">Рулонная сетка</a></li>
                                <li><a class="dropdown-item" title="Плиссе москитная сетка" href="/catalog/moskit_setki/plisse">Плиссе сетка</a></li>                                
                            </ul>
                        </div>                        
                          
                        <div class ="menu-links" >
                            <span class="spanshow header-btn_setcolor" style="display:none;" data-bs-toggle="modal" data-bs-target="#Modal">Заказать сетку</span>
                            <input type="checkbox" name="menu" id="btn-menu" />
                            <label for="btn-menu"><img class="icon-menu" src="/images/menu.png"></label> 
                            <ul>
                            <a  href="/#ourcompany">О компании</a>        
                            <a  href="/#ourservices" title="Услуги Волжского Оконного завода ОТКРЫТИЕ">Услуги</a>             
                            <a  href="/#ourproject" title="Проекты Волжского Оконного завода ОТКРЫТИЕ">Наши проекты</a>
                            <span class="spanhidden header-btn_setcolor" data-bs-toggle="modal" data-bs-target="#Modal">Заказать сетку</span>
                            </ul>
                        </div>             
                    </div>
                </div>
            </div>
        </header>   
        <!-- main  -->
        <main>   
            <!-- первый блок  -->
            <div class="container-header">
                <h1 style="position: absolute;top: -99999px;left: -99999px;" class="hide-h1">Создание успешных веб-сайтов: искусство разработки, дизайна и интернет-маркетинга</h1>
                 
                <div class="header-box-blog">
                    <h2 class="title-text">МАСТЕР-КЛАСС: РАЗРАБОТКА, ДИЗАЙН И ИНТЕРНЕТ-МАРКЕТИНГ</h2>                    
                </div>  
                <div class="filters">
                      <div class="main-menu">                                    
                          <?php selectCategories(); ?>  
                      </div>              
                </div>           
            </div>  
            <!-- основные блоки  -->      
            <div class="container-background-block-1">  
                <div class="container-block-1 container-block-1-paddingunset">                    
                    <div class="main-title">ВСЕ СТАТЬИ</div>
                </div>    
                <!-- main -->
                <div class="container-block-1">
                    <div class="wrapper-block">
                        <div>
                            <!-- <div class="most-viewed__title">САМЫЕ ПОПУЛЯРНЫЕ</div>
                            <div class="main">
                                <div class="most-viewed main-center">

                                </div> 
                            </div>                         -->
                        </div>
                        <div class="main">
                            <div id="main-center" class="main-center">
                                
                            </div>         
                        </div>
                        
                        <!-- пагинация (pagination.css, pagination.js)-->
                        <div class ="pagination"></div>
                    </div>
                </div>
               
            </div> 
        </main>    
        <!-- футтер -->
        <footer>
            <div class="footer">
                <div class="banner-orange">
                    <div class="banner-orange-in">
                        <div class="banner-orange-in-text" id="ouradress"> 
                            <span class="banner-orange-title">ХОТИТЕ С НАМИ РАБОТАТЬ?</span>
                            <span class="banner-orange-description">ОСТАВЬТЕ ЗАЯВКУ И МЫ СВЯЖЕМСЯ С ВАМИ!</span>
                        </div>
                        <div>
                            <button data-bs-toggle="modal" data-bs-target="#Modal" class="banner-orange-btn" type="button">
                            <img src="/images/convert.svg" class="d-block w-10" alt="Иконка сообщения">ВАШ ЗАПРОС</button>
                        </div>
                    </div>   
                </div>
                <iframe title="Адрес офиса Оконного завода ОТКРЫТИЕ" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.04162119643!2d44.77796396961506!3d48.80018425865256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41054ce27a8c87e9%3A0x70739516e37ba014!2z0J7RgtC60YDRi9GC0LjQtQ!5e0!3m2!1sru!2sru!4v1666089532426!5m2!1sru!2sru" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    <!-- itc-slider -->    
    <script src="/assets/js/jquery-3.6.1.min.js"></script>

    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/index.js"></script>
    <script src="/assets/js/pagination.js"></script>

   
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
    <script src="/assets/js/jquery.mask.min.js"></script>
    <script src="/assets/js/telegramform.js"></script>
   <!-- изменение номеров телефона в шапке -->
   <script src="/assets/js/main_set_contact_tel.js"></script>
   <!-- Всплывающие окна на странице / Копирование номера телефона в буфер -->
   <script src="/assets/js/main_alert_get_number.js"></script>
    <script>
        $(function () {
        $('input[type="tel"]').mask('8 (000) 000-00-00');
        });
    </script>

    <script>
        $(window).on('DOMContentLoaded', function () {  

            $(document).ready(function() {
                document.getElementById("wrap_preloader").style.visibility= "hidden";
                document.getElementById("body").style.visibility= "visible";})
        }); 
    </script>
</body>
</html>