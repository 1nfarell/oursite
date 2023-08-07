
<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отслеживание заказа по трек номеру</title>
    <meta name="application-name" content="Отслеживание заказа по трек номеру">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://xn----7sbqlhcsgevuc0j.xn--p1ai/status.php">
    <meta property="og:title" content="Отслеживание заказа по трек номеру">
    <meta property="og:description" content="Удобное отслеживание и трекинг ваших заказов. Отследить заказ легко - введите трек номер и получите актуальную информацию.">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:site_name" content="Завод окон Открытие">
    <meta property="og:image" content="/images-catalog/moskit-banner.png">
    <meta name="robots" content="index,follow">
    <meta name="keywords" content="Отследить заказ">
    <meta name="description" content="Удобное отслеживание и трекинг ваших заказов. Отследить заказ легко - введите трек номер и получите актуальную информацию.">
    <link rel="canonical" href="https://xn----7sbqlhcsgevuc0j.xn--p1ai/status.php">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/index.css">
    <link rel="stylesheet" href="/assets/css/catalog.css">
    <link rel="stylesheet" href="/assets/css/moskit.css">
    <link rel="stylesheet" href="/assets/css/status.css">
    <link rel="stylesheet" href="/assets/css/menu.css">
    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/site.webmanifest">
    
</head>
<body>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(94458736, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/94458736" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <h1 style="position: absolute;top: -99999px;left: -99999px;" class="hide-h1">Отслеживание заказа по трек номеру</h1>
    <div id="body" class="container-main">
        <header id="header">            
            <!-- header страницы загружается посредством js -->
            
        </header> 
        <!-- main  -->
        <main>   
            <div class="main"> 
                <div id="menuStaticBackdrop" aria-labelledby="menuStaticBackdropLabel" class="modal fade modal-catalog" tabindex="-1"  role="dialog" aria-hidden="true">
                    <!-- menu -->
                </div>    
                <div class="catalog-balkon-wrapper catalog-moskit-wrapper table_request">
                    <div id="table_status--container" class="table_status--container">
                        <div class="balkon-wrapper balkon-wrapper--column">
                            <div id="title_date_status">

                            </div>
                            <form id="search-form" method="POST">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">№</span>
                                    <input id="status__input--search" type="text" name="input_search" class="form-control request__input--search" placeholder="Введите номер договора, например: MC/10.1.1"  aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg">
                                    <button id="btn_search" class="btn btn-outline-secondary" type="submit">НАЙТИ</button>
                                </div>
                            </form>
                        </div>
                        <div class="container__status_qrcode">
                            <div>
                                <div id="status-container">

                                </div>
                                <div id="status--detail" class="balkon-wrapper balkon-wrapper--column">
                                    
                                    <div id="adress_montazh" class="table_request--detail_order_container_column">
                                        
                                    </div>
                                    <div id="date_montazh" class="table_request--detail_order_container">

                                    </div>
                                </div>    
                            </div> 
                            <div class="qr_box" style="visibility:hidden">
                                <!-- для qr кода на отзывы -->
                               <img loading="lazy" class="qr_status" src="/images-catalog/clck.png" alt="окна открытие яндекс карточка">
                               <img loading="lazy" class="img_status" src="/images-catalog/moskit-1.png">
                               <div class="title_qr">Оставьте свой отзыв на Яндекс Картах</div>
                               <div class="description_qr">(наведите камеру телефона на QR-code, чтобы перейти в отзывы на Яндекс Картах)</div>
                            </div>  
                        </div>             
                    </div>     
                </div> 
            </div>
            <form id="form-contact" method="POST" class="contact-form" autocomplete="off">
                <div id="Modal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ВАШ ЗАПРОС</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-2">
                                <label class="form-check-label" for="floatingInput">
                                    Введите контактные данные
                                </label>
                            </div>
                            <div class="form-floating mb-3">                    
                                <input name="name" type="text" class="form-control" placeholder="Имя" aria-label="Username" maxlength="70">
                                <label for="floatingInput">Имя</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="phone" type="tel" class="form-control" id="floatingInput" placeholder="Номер телефона">
                                <label for="floatingInput">Номер телефона</label>
                            </div>
                            <div class="form-floating mb-3">                    
                                <input name="category" type="text" class="form-control" placeholder="Имя" aria-label="Username" maxlength="70" value="Вопрос по моему заказу" readonly>
                                <label for="floatingInput">Категория</label>
                            </div>
                            <div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                    </svg>
                                    <span>Нажимая на кнопку "Сделать заказ", Вы даёте согласие на обработку своих персональных данных согласно ФЗ N152.</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ЗАКРЫТЬ</button>
                                <button id="pressbtnform" type="submit" class="btn btn-primary">СДЕЛАТЬ ЗАКАЗ</button>   
                            </div>                            
                            <div class="form__message">
                                <!-- Всплывающие сообщения об отправке -->
                                <div class="preloader"></div>
                                <p class="contact-form__message"></p>
                            </div>                            
                        </div>
                        </div>
                    </div>
                </div>
            </form>
        </main>    
        <!-- футтер -->
        <footer>
            <div class="footer">
                <div class="banner-orange">
                    <div class="banner-orange-in">
                        <div class="banner-orange-in-text" id="ouradress"> 
                            <span class="banner-orange-title">БОЛЬШОЕ СПАСИБО, ЧТО ВЫБРАЛИ ЗАВОД ОТКРЫТИЕ!</span>
                        </div>
                    </div>   
                </div>
                <div class="footer-down">
                    <div>
                        <div class="contant-info-left">
                            <span class="contant-info-left__title">Оконный завод ОТКРЫТИЕ</span>
                            <p class="contant-info-left__description">
                                Завод Открытие работает в городе Волжском, Волгограде, Николаевске и в других городах Волгоградской области.
                            </p>
                            <div class="contant-info-left-time">
                                <div>
                                    <span style="text-decoration:underline;" class="footerminus">Мы работаем</span>
                                    <span class="footertext">Пн-Пт с 08:00 до 18:00</span>
                                    <span style="text-decoration:underline;" class="footerminus">Почта</span>
                                    <span id="contact-email" class="tel" title="Нажми, чтобы скопировать электронную почту">contact@окна-открытие.рф</span>
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

    <script defer src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jquery-3.6.1.min.js"></script>

    <!-- header страницы -->
    <script defer src="/assets/js/header_pages.js"></script>  

    <script defer src="/order/get_status_myorder.js"></script>    
   
    <script defer src="/assets/js/jquery.mask.min.js"></script>
    <script defer src="/assets/js/telegramform.js"></script>
   <!-- изменение номеров телефона в шапке -->
   <script defer src="/assets/js/set_contact_tel.js"></script>
   <!-- Всплывающие окна на странице / Копирование номера телефона в буфер -->
   <script defer src="/assets/js/alert_get_number.js"></script>
  
    <script defer>
        $(function () {
        $('input[type="tel"]').mask('8 (000) 000-00-00');
        });
    </script>
</body>
</html>