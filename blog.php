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
    <title>Создание успешных веб-сайтов - MNDP</title>

    <link rel="stylesheet" href="/assets/css/itc-slider.min.css">

    <link rel="stylesheet" href="/assets/css/blog.css">
    <link rel="stylesheet" href="/assets/css/index.css">
    
    <link rel="stylesheet" href="/assets/css/pagination.css">
    <meta name="application-name" content="Создание успешных веб-сайтов - MNDP">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mndp-studio.ru/">
    <meta property="og:title" content="Создание успешных веб-сайтов - MNDP">
    <meta property="og:description" content="Узнайте, как комбинировать разработку, дизайн и интернет-маркетинг для создания успешных и прибыльных веб-сайтов.">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:site_name" content="MNDP">
    <meta property="og:image" content="/images/banner.jpg">
    <meta name="robots" content="index,follow">
   
    <!--<meta name="keywords" content="лендинг, сайт, логотипы, визитки">-->
    <meta name="description" content="Узнайте, как комбинировать разработку, дизайн и интернет-маркетинг для создания успешных и прибыльных веб-сайтов.">
    <link rel="canonical" href="https://mndp-studio.ru/blog.php">
  
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/site.webmanifest">    
</head>
<body> 
    <div class="container" id="ancor">
        <!-- хедер  -->
        <header>
            <div id="header" class="header-wrapper">
                <div class="header">  
                    <div class="header-left">
                        <a id="hide-logo" class="logo" href="#ancor">                        
                            <img class="logo-icon" src="/images/logo.png" alt="Web studio MndP">
                        </a>               
                        <div class="site-description">
                            <span>ВЕБ-СТУДИЯ MNDP</span>  
                        </div> 
                    </div>           
                    <div class="header-ref-hide">   
                        <a class="header-ref mainpage-ref" href="/">ГЛАВНАЯ</a>                         
                        <div class="dropdown dropdown-high">                                
                            РАЗРАБОТКА САЙТОВ
                            <img class="icon-dropdown" src="/images/plus.png" alt="меню">
                            <div class="dropdown-content">                                
                                <a class="header-ref" href="/#stage">ЭТАПЫ РАБОТЫ</a>
                                <a class="header-ref" href="/#price">УСЛУГИ</a>
                                <a class="header-ref" href="/#ask">ОТВЕТЫ НА ВОПРОСЫ</a>
                                <a class="header-ref" href="/#portfolio">ПОРТФОЛИО</a>
                                <a class="header-ref" href="/#about">О НАС</a>  
                            </div>
                        </div>
                        <div class="dropdown dropdown-high">                                
                            РАБОТА С ТЕКСТОМ
                            <img class="icon-dropdown" src="/images/plus.png" alt="меню">
                            <div class="dropdown-content">                                
                                <a class="header-ref" href="/copywriting">КОПИРАЙТ ТЕКСТА</a>
                                <a class="header-ref" href="/rewriting">РЕРАЙТ ТЕКСТА</a>                                   
                            </div>
                        </div>
                        <a class="header-ref" href="/blog">БЛОГ</a> 
                    </div>  
                    <div class="menu">
                        <div class="dropdown dropdown-show">
                            <img class="icon-message" src="/images/menu.png" alt="меню">
                            <div class="dropdown-content">
                                <a class="header-ref" href="/">ГЛАВНАЯ</a> 
                                <a class="header-ref" href="/#stage">ЭТАПЫ РАБОТЫ</a>
                                <a class="header-ref" href="/#price">УСЛУГИ</a>
                                <a class="header-ref" href="/#ask">ОТВЕТЫ НА ВОПРОСЫ</a>
                                <a class="header-ref" href="/#portfolio">ПОРТФОЛИО</a>
                                <a class="header-ref" href="/#about">О НАС</a>  
                                <a class="header-ref" href="/copywriting">КОПИРАЙТ ТЕКСТА</a>
                                <a class="header-ref" href="/rewriting">РЕРАЙТ ТЕКСТА</a>
                                <a class="header-ref" href="/blog">БЛОГ</a>   
                            </div>
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
            <div class="container-background-block-1 offer-border container-radius-top"> 
                <div class="container-block-1 ">             
                    <div class="footer-row">               
                        <div class="footer-row-column">
                            <span>По вопросам сотрудничества писать на почту contact@mndp-studio.ru</span>
                        </div>                    
                        <div>
                            2022 - 2023 © Made with love by MndP.                           
                        </div>   
                    </div>                           
                </div> 
            </div>   
        </footer> 
    </div>
    <!-- itc-slider -->    
    <script src="/assets/js/itc-slider.min.js" defer></script> 
    <!-- jquery -->
    <script src="/assets/js/jquery-3.6.1.min.js"></script>
    <!-- все скрипты -->
    <script src="/assets/js/script.js" defer></script>
    <!-- отправка данных с формы в телегу -->
    <script src="/assets/js/telegramform.js" defer></script>

    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/index.js"></script>
    <script src="/assets/js/pagination.js"></script>

   
</body>
</html>