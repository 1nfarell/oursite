<?php
session_start();
    
if (!$_SESSION['user']) {
    header('Location: /login.php');
};
if ($_SESSION['user']['id'] != 2) {
    header('Location: /order.php');
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
    <title>Панель администратора</title>
    
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
                        <div class ="menu-links">
                            <input type="checkbox" name="menu" id="btn-menu" />
                            <label for="btn-menu"><img class="icon-menu" src="/images/menu.png"></label> 
                            <ul>
                            <!-- <a  href="/cabinet.php">Личный кабинет</a>        
                            <a  href="/blog.php" title="Услуги Волжского Оконного завода ОТКРЫТИЕ">Статьи</a> -->
                            
                            <span title="наверх страницы" onclick="topScroll()" class="">Наверх</span>
                            <a  href="/order.php">Заказы</a> 
                            <span title="добавить изменение" data-bs-toggle="modal" data-bs-target="#ModalUpdate" class="">Добавить изменение</span>
                            
                          
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
                         
                    <form id="form--update" method="POST">
                        <div id="ModalUpdate" class="modal fade" tabindex="-1" aria-labelledby="ModalUpdateLabel" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalUpdateLabel">Добавить изменение</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>       
                                    <div id="body_update" class="modal-body ">
                                       
                                    </div>
                                    <div class="modal-footer">                                        
                                        <div class="input-floati mb-1">
                                            <button onclick="add_new_field_description()" id="id_new_field_description" type="button" style="margin-right:20px" class="btn btn-primary">Добавить описание</button>
                                        </div>
                                        <hr>
                                        <div class="input-group mb-1">    
                                            <button id="btn-form--update" type="submit" class="btn btn-primary">Сохранить</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </form>          
                    <div style="padding-bottom: 0px;" class="balkon-wrapper">
                       
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
<script src="/panel_admin/index_update.js"></script>
<script src="/panel_admin/add_update.js"></script>
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

</body>
</html>