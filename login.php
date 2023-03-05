<?php
session_start();

if ($_SESSION['user']) {
    header('Location: /blog.php');
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/index.css">
    <link rel="stylesheet" href="/assets/css/addpost.css">
    <title>Авторизация - Студия Веб Дизайна MNDP</title>
    
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
    <div id="header" class="header-wrapper" >
        <div class="header">  
            <div class="header-left">
                <a class="logo" href="/"><img id="hide-logo" class="logo-icon" src="/images/logo.png" alt="Web studio MndP"></a>
                <div class="site-description">
                    <span>ВЕБ-СТУДИЯ MNDP</span>
                </div> 
            </div>           
            <div class="header-ref-hide">  
                <a class="header-ref mainpage-ref" href="/">ГЛАВНАЯ</a> 
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
                            <a class="header-ref" href="/copywriting">КОПИРАЙТ ТЕКСТА</a>
                            <a class="header-ref" href="/rewriting">РЕРАЙТ ТЕКСТА</a>
                            <a class="header-ref" href="/blog">БЛОГ</a>   
                        </div>
                    </div>
                <div class="title-icon-message"> 
                     <!-- Профиль -->
                    <div class="header-right-form">
                        <form>
                            <p><?= $_SESSION['user']['full_name'] ?></p>
                        </form>
                    </div>                
                    <div class="header-right-form-button">                    
                        <?php if(isset($_SESSION['user'])): ?> 
                            <a href="cabinet.php?user=<?= $_SESSION['user']['id'] ?>">Личный кабинет</a> 
                            <a href="vendor/logout.php">Выход</a>
                        <?php else: ?> 
                            <a href="register.php">У вас нет аккаунта? - Зарегистрироваться</a>
                        <?php endif; ?>
                    </div>
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
    <script src="assets/js/main.js"></script>
</body>
</html>