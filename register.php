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
    <title>Регистрация - Студия Веб Дизайна MNDP</title>
    
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
                            <a href="login.php">У вас уже есть аккаунт? - Войти</a>
                        <?php endif;?>
                    </div>
                </div>
               
            </div>                  
        </div>
    </div>  
</header>   

    <!-- Форма регистрации -->
<div class="container-block-1">
    <div class="wrapper-block">  
        <form>
            <label class="lbl-registr">Регистрация</label>
            <label>Фамилия и Имя</label>
            <input type="text" name="full_name" placeholder="Введите фамилию и имя" maxlength="30" required pattern="[a-zA-ZА-Яа-яЁё\s]{3,}">
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите свой логин" maxlength="20" required pattern="[a-zA-ZА-Яа-яЁё0-9\s]{3,}">
            <label>Почта</label>
            <input type="email" name="email" placeholder="Введите адрес своей почты" maxlength="40" required pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите пароль" maxlength="16" required pattern="(?=.*[0-9])(?=.*[!@#$%^&*_-])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^_&*-]{6,}">
            <label>Подтверждение пароля</label>
            <input type="password" name="password_confirm" placeholder="Подтвердите пароль" maxlength="16" required pattern="(?=.*[0-9])(?=.*[!@#$%^&*_-])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^_&*-]{6,}">
            <button type="submit" class="register-btn">Зарегистрироваться</button>
            <p>
                У вас уже есть аккаунт? - <a class="ref" href="/login.php">авторизируйтесь</a>!
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