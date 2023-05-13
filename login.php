<?php
session_start();

if ($_SESSION['user']) {
    header('Location: /login.php');
}

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
    
    <link rel="stylesheet" href="/assets/css/catalog.css">
    <link rel="stylesheet" href="/assets/css/moskit.css">
    <title>Авторизация</title>
    
    <meta name="robots" content="noindex">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/site.webmanifest">
</head>
<body>
<!-- header -->

    <div id="body"  class="container-main">
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
                                <!-- <img class="icon time" src="/images/time.svg" alt="режим работы Открытие">
                                <span title="Режим работы Оконного завода Открытие">Пн-Пт с 08:00 до 18:00</span> -->
                            </div>
                            <div class="header-addres">
                                <!-- <img class="icon compas" src="/images/compas.svg" alt="адрес офиса Открытие">
                                <a href="#ouradress" title="Адрес офиса Оконного завода Открытие">Наш офис в г. Волжском</a> -->
                            </div>
                        </div>                       
                        <div class="header-right">
                            <div>
                                <!-- <img class="icon phone" src="/images/phone.svg" alt="Позвонить в офис Открытие">
                                <a id="main-telegram_href" rel="nofollow" href=""><img class="icon viber" src="/images/telegram.svg" title="Нажми, чтобы перейти в чат telegram" alt="сделать заказ москитной сетки на окно в telegram"></a>
                                <a id="main-whatsup_href" rel="nofollow" href=""> <img class="icon whatsup" title="Нажми, чтобы перейти в чат whatsup" src="/images/whatsup.svg" alt="сделать заказ москитной сетки на окно в whatsup"></a>
                                <span title="Отдел продаж. Нажми, чтобы скопировать номер телефона" id="main-contact_tel_1" class="tel"></span> -->
                            </div>
                            <div>
                                <!-- <span title="Отдел продаж. Нажми, чтобы скопировать номер телефона" id="main-contact_tel_2" class="tel"></span> -->
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
                    </div>
                </div>
            </div>
        </header>   
        <!-- main -->
        <div class="container-block-1">
            <div class="wrapper-block"> 
                <!-- Форма авторизации -->
                <form class="auth">
                    <label class="lbl-registr">Авторизация</label>
                    <label>Логин</label>
                    <input type="text" name="login" placeholder="Логин" maxlength="20" required pattern="[a-zA-ZА-Яа-яЁё0-9\s]{3,}">
                    <label>Пароль</label>
                    <input type="password" name="password" placeholder="Пароль" maxlength="16" required pattern="(?=.*[0-9])(?=.*[!@#$%^&*_-])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^_&*-]{6,}">
                    <button type="submit" class="login-btn">Войти</button>
                    <p>
                        У вас нет аккаунта? - <a class="ref" href="/register.php">зарегистрируйтесь</a>!
                    </p>
                    <p class="msg none"></p>
                </form>  
            </div>
        </div>
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
    <script>
        $(function () {
        $('input[type="tel"]').mask('8 (000) 000-00-00');
        });
    </script>
</body>
</html>