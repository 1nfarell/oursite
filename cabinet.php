<?php

session_start();
    
if (!$_SESSION['user']) {
    header('Location: /login.php');
};
include 'vendor/generator.php';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/index.css">
    <link rel="stylesheet" href="/assets/css/blog.css">
    <title>Личный кабинет - Студия Веб Дизайна MNDP</title>
    
    <meta name="robots" content="noindex">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/site.webmanifest">
</head>
<body>
<div class="container">
  
<!-- header -->
<header>
    <div id="header" class="header-wrapper" style="background: rgb(88,60,135); background: -moz-linear-gradient(270deg, rgba(88,60,135,1) 0%, rgba(41,36,60,0.700717787114846) 20%); background: -webkit-linear-gradient(270deg, rgba(88,60,135,1) 0%, rgba(41,36,60,0.700717787114846) 20%); background: linear-gradient(270deg, rgba(88,60,135,1) 0%, rgba(41,36,60,0.700717787114846) 20%); filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#583c87',endColorstr='#29243c',GradientType=1); background-size: 400% 400%;">
        <div class="header">  
            <div class="header-left">
                
                <a href="/"><img id="hide-logo-site" class="logo-icon" src="/images/logo.png" alt="Web studio MndP"></a> 
                                
                <div class="site-description">
                    <span>СТУДИЯ ВЕБ-ДИЗАЙНА MNDP</span> 
                    
                </div> 
            </div>           
            <div class="header-ref-hide">                           
               
                <a class="header-ref" href="/">ГЛАВНАЯ</a>
                <a class="header-ref" href="/blog">БЛОГ</a> 
                <div class="dropdown dropdown-high">                                
                    ТЕКСТ
                    <img class="icon-dropdown" src="/images/plus.png" alt="меню">
                    <div class="dropdown-content">                                
                        <a class="header-ref" href="/copywriting">КОПИРАЙТ ТЕКСТА</a>
                        <a class="header-ref" href="/rewriting">РЕРАЙТ ТЕКСТА</a>                                  
                    </div>
                </div>
                
                            
                </div>
                <div class="menu">
                    <div class="dropdown dropdown-show">
                        <img class="icon-message" src="/images/menu.png" alt="меню">
                        <div class="dropdown-content">                            
                            <a class="header-ref" href="/">ГЛАВНАЯ</a>
                            <a class="header-ref" href="/blog">БЛОГ</a>  
                            <a class="header-ref" href="/copywriting">КОПИРАЙТ ТЕКСТА</a>
                            <a class="header-ref" href="/rewriting">РЕРАЙТ ТЕКСТА</a> 
                        </div>
                    </div>
                <div class="title-icon-message"> 
                     <!-- Профиль -->
                    <div class="header-profile">
                        <div class="header-right-form">
                            <form>
                                <p><?= $_SESSION['user']['full_name'] ?></p>
                            </form>
                        </div>
                        <div class="header-right-form-button">                    
                        <?php if(isset($_SESSION['user'])): ?> 
                            <a href="vendor/logout.php">Выход</a>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="header-nav">  
                        <div class="header-nav-1">
                        <?php if(isset($_SESSION['user'])): ?>
                            <a href="/addpost.php">Добавить статью</a>
                        <?php else: ?>
                            <a href="/register.php">Добавить статью</a>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
              
            </div>                  
        </div>
    </div>  
</header> 
    <!-- main -->
<div class="container-block-1">    
    <div class="wrapper-block">
        <div class="cabinet-main">
            <div class="feild-center" id="field-center">
                <p style="padding-bottom: 20px; font-size: 18px">Ваши статьи</p>
            </div>    
        </div>                        
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
<script src="assets/js/main.js"></script>
<script src="assets/js/cabinet.js"></script>
</body>
</html>