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
    
    <link rel="stylesheet" href="/assets/css/status.css">
    <link rel="stylesheet" href="/assets/css/catalog.css">
    <link rel="stylesheet" href="/assets/css/moskit.css">
    <title>Личный кабинет</title>
    
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
                          
                        <div class ="menu-links">
                            <input type="checkbox" name="menu" id="btn-menu" />
                            <label for="btn-menu"><img class="icon-menu" src="/images/menu.png"></label> 
                            <ul>
                            <a  href="/cabinet.php">Личный кабинет</a>        
                            <a  href="/blog.php" title="Услуги Волжского Оконного завода ОТКРЫТИЕ">Статьи</a>             
                            <a  href="/status.php" title="Проекты Волжского Оконного завода ОТКРЫТИЕ">Отслеж. заказа</a>
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
                    
                    <p style="padding-bottom: 20px; padding-left: 20px; font-size: 18px">Добавить заказ</p>
                    <div class="balkon-wrapper">
                        
                        <form id="form--add_order" method="POST">
                            <div class="input-group mb-3">
                                <span  class="input-group-text" id="inputGroup-sizing-default">Номер заказа</span>
                                <input id="input-form--add_order" name="number_order" type="text" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-default" maxlength="20" required >
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Наименование</span>
                                <input name="description_order" type="text" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-default" maxlength="255" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">К оплате</span>
                                <input name="price_order" type="number" class="form-control" aria-label="Сумма в рублях (с точкой и двумя десятичными знаками)" maxlength="20" required>
                                <span id="input-group-text_dollar" class="input-group-text">₽</span>
                            </div>   
                            <div class="input-group mb-3">               
                                <select name="price_order--status" class="form-select form-select-default" required>
                                    <option disabled selected>Выберите статус оплаты</option>
                                    <option value="Не оплачен">Не оплачен</option>
                                    <option value="Рассрочка">Рассрочка</option>
                                    <option value="Оплачен">Оплачен</option>
                                </select>
                            </div>
                            
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">ФИО заказчика</span>
                                <input name="contact_name_order" type="text" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-default" maxlength="255" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Контакты</span>
                                <input name="contact_order" type="text" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-default" maxlength="255" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Адрес</span>
                                <input name="adress_order" type="text" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-default" maxlength="255" required>
                            </div>
                           
                            <button id="btn-form--add_order" type="submit" class="btn btn-primary ">Добавить заказ</button>
                        </form> 
                    </div>
                    <div class="balkon-wrapper">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text" id="inputGroup-sizing-lg">НОМЕР ЗАКАЗА</span>
                            <input type="text" class="form-control request__input--search"  aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg">
                            <button class="btn btn-outline-secondary" type="button">НАЙТИ</button>
                        </div>
                    </div>   
                    
                    <p style="padding-bottom: 20px; padding-left: 20px; font-size: 18px">Все заказы</p>
                    
                    <div id="table__order" class="balkon-wrapper table-responsive">
                        <!-- вывод таблицы -->
                    </div>
                   
                    <!-- <div class="balkon-wrapper table-responsive">                         -->
                        <!-- <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Номер заказа</th>
                                <th scope="col">Название изделия</th>
                                <th scope="col">К оплате</th>
                                <th scope="col">Статус оплаты</th>
                                <th scope="col">Дата оформления</th>                             
                                <th scope="col">Дата последнего статуса</th>
                                <th scope="col">Текущий статус</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <th scope="row">61111414</th>
                                    <td>Пластик. окна, Пластик. окна, Пластик. окна, Пластик. окна, Пластик. окна, Пластик. окна</td>                                    
                                    <td>10 000</td>
                                    <td>
                                        <select class="form-select form-select-default" aria-label=".form-select-sm пример">
                                            <option selected>Выберите статус</option>
                                            <option value="Не оплачен">Не оплачен</option>
                                            <option value="Рассрочка">Рассрочка</option>
                                            <option value="Оплачен">Оплачен</option>
                                        </select>
                                    </td>
                                    <td>01.01.01</td>                                    
                                    <td>01.01.01</td>
                                    <th scope="row">
                                        <select class="form-select form-select-default" aria-label=".form-select-sm пример">
                                            <option selected>Выберите статус</option>
                                            <option value="Обработка">Обработка</option>
                                            <option value="Сборка">Сборка</option>
                                            <option value="Доставка">Доставка</option>
                                            <option value="Выполнен">Выполнен</option>
                                        </select>
                                    </th> 
                                    <tr>
                                        <td colspan="7">
                                            <table class="table table-sm table-borderless mb-4 ">
                                                <thead>
                                                    <tr>
                                                        <th class="col-sm-9" scope="col">Адрес доставки</th>                                                   
                                                   
                                                        <th class="col-sm-1" scope="col">Дата доставки</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-group-divider">                                                  
                                                    <tr >
                                                        <td class="col-sm-11">
                                                            <div class="input-group mb-3">
                                                            <input type="text" class="form-control request__input--search"  aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-lg" value="1-й Индустриальный проезд, 18к15, г. Волжский, Волгоградская обл.">
                                                            </div>  
                                                        </td>
                                                        <td class="col-sm-1"><input id="startDate" class="form-control form-control-default" type="date" /></td>         
                                                    </tr>               
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>                                    
                                    <tr>
                                        <td colspan="2">
                                            <table class="table table-sm table-borderless mb-4">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Статус заказа</th>
                                                        <th scope="col">Дата присвоения статуса</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-group-divider">
                                                    <tr>
                                                        <td >В работе</td>
                                                        <td>01.01.01</td>
                                                        
                                                    </tr>  
                                                    <tr>
                                                        <td>Доставка</td>
                                                        <td>01.01.01</td>
                                                    </tr> 
                                                    <tr>
                                                        <td>Выполнен</td>
                                                        <td>01.01.01</td>
                                                    </tr>                          
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr> 
                                </tr> 
                                                                 
                            </tbody>
                        </table> -->
                    <!-- </div>                                   -->
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
<script src="order/add_order.js"></script>
<script src="order/get_order.js"></script>

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

   
</body>
</html>