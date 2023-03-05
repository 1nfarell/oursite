<?php

include 'vendor/outputPost.php';

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="/assets/css/itc-slider.min.css">
    <link rel="stylesheet" href="/assets/css/index.css">
    <link rel="stylesheet" href="/assets/css/blog.css">
    <meta name="application-name" content="">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mndp-studio.ru/">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:site_name" content="MNDP">
    <meta property="og:image" content="/images/banner.jpg">
    <meta name="robots" content="index,follow">
   
    <meta name="description" content="">
    
  
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
                        <a class="header-ref mainpage-ref" href="/">ГЛАВНАЯ</a> 
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
<!-- main -->
<div class="container-block-1">
    <div class="wrapper-block">
        <div class="main main-color">        
            <div class="main-post">
                <?php generationOutput($shouldCountView); ?>                              
            </div>    
        </div>
    </div> 
    
    <div class="wrapper-block">
        <div class="pricesite-title">
            <h2>Читайте и другие статьи в блоге MNDP</h2>
        </div>
        <div class="main">        
            <div id="main-center" class="main-center">
                
            </div>                    
        </div>
    </div>
                 
    <!-- фон и курсор -->
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>                    
    </div>    
</div>
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
<!-- jquery -->
<script src="/assets/js/jquery-3.6.1.min.js"></script>
<!-- все скрипты -->
<script src="/assets/js/script.js" defer></script>
<script src="/assets/js/outlikepost.js"></script>


</body>
</html>