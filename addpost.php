<?php

session_start();
    
if (!$_SESSION['user']) {
    header('Location: /');
};
include 'vendor/generator.php';

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
    <title>Добавить статью</title>
    
    <meta name="robots" content="noindex">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/site.webmanifest">

    
</head>
<body>
<!-- header -->
    <div id="wrap_preloader" class="d-flex justify-content-center" style="position: fixed;top: 400px;width: 100%;margin: 0 auto;z-index: 100">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Загрузка...</span>
        </div>
    </div>
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
                            <input type="checkbox" name="menu" id="btn-menu" />
                            <label for="btn-menu"><img class="icon-menu" src="/images/menu.png"></label> 
                            <ul>
                            <a  href="/cabinet.php">Личный кабинет</a>        
                            <a  href="/blog.php" title="Услуги Волжского Оконного завода ОТКРЫТИЕ">Статьи</a>             
                            <a  href="/status.php" title="Проекты Волжского Оконного завода ОТКРЫТИЕ">Отслеж. заказа</a>
                            <a  href="/order.php" title="Проекты Волжского Оконного завода ОТКРЫТИЕ">Кабинет заказов</a>
                            </ul>
                        </div>             
                    </div>
                </div>
            </div>
        </header>   

        <!-- main -->
        <div class="container-block-1">    
            <div class="wrapper-block">
                <p class="wrapper-block--addpost__title">Добавить статью</p>
                <form class="formAdd" name="formAddPost" method="POST" enctype="multipart/form-data"   action="">
                    <div class="CategoriesArea">
                        <p class="formP">1. Выберите категорию</p> 
                        <select class="selectCategories" name="categories" required> 
                            <option disabled selected></option>
                            <?php selectCategories(); ?>
                        </select>
                    </div>
                    <div class="nameReceptArea">        
                        <p class="formP">2. Название статьи (TITLE / H1)</p> 
                        <input  class="nameRecept" name="title" type="text" placeholder="Название статьи. Макс. длина 70 символов" maxlength="70"  required/>           
                    </div>             
                    <div class="descriptionArea">
                        <p class="formP">3. Краткое описание (DESCRIPTION)</p>                
                        <textarea class="descriptionRecept" name="description" type="text" placeholder="Краткое описание. Макс. длина 180 символов" maxlength="180"  required></textarea> 
                    </div>
                    <div class="imageReceptArea">
                        <p class="formP">4. Картинка на главной (.WEBP --ar 16:9)</p>
                        <input class="imageRecept" type="file" name="myimage" accept="image/*" required/>
                    
                    </div>
                    <div class="inputRecept"> 
                        <div class="inputReceptPicture">
                            <div class="add_picture_button">
                                <p class="formP">5. Напишите статью</p>
                                <input class="add_button_picture" id="INeedMoreImages" type="button" value="Добавить поле"/> 
                            </div>
                            <div class="inputReceptDescription" id="Wrapper_add_text">  <!-- поля с текстом -->  </div>
                        </div>
                    </div>
                    <input class="saveButton" id="saveButton" type="submit" value="Сохранить"  />  
                </form>            
                                        
                <?php addPost();?>                    
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
<script type="text/javascript">
  
    $(document).ready(function() {
        var MaxInputs = 5;
        var Wrap = $("#Wrapper_add_image");        
        var Wraptext = $("#Wrapper_add_text");
        var AddButton = $("#INeedMoreImages");    
        let y = Wrap.length;
        var FieldCount = 0;
        let count = 1;
        
        
        let el = $('<div id="wrapper_Text'+y+'"  class="wrapper_Text" name="wrapper_Text">  <div class="text"> <p class="formP"> Заголовок №'+(count)+'</p> <input id="header_text'+y+'"  class="header_text" name="header_text'+y+'"  type="text" placeholder="H2 Заголовок. Макс. длина 60 символов" maxlength="60" required /><textarea class="textRecept" name="text'+y+'"  type="text" placeholder="Текст.."  required></textarea> </div></div> ');
                let buttons = $('<div class="area_add_picture" id="Wrapper_add_image"><div  class="wrapper_Image" name="wrapperImage"> <p class="formP">Прикрепите изображение (.WEBP --ar 16:9 width: 600px)</p><input  class="addpicture" name="picture'+y+'" type="file" accept="image/*" required/> </div><!-- поля с картинками --> </div>');
                Wraptext = $("#Wrapper_add_text");
                $(Wraptext).append(el);
                el.append(buttons);
        y++;
        count++;
        $(AddButton).click(function(e) //функция добавления нового поля
        {
            if (y <= MaxInputs) //проверяем на максимальное кол-во
            {   $(".removeclassimage").hide();    
                
                FieldCount++;
                //добавляем поле
                let el = $('<div id="wrapper_Text'+y+'"  class="wrapper_Text" name="wrapper_Text">  <div class="text"> <p class="formP"> Заголовок №'+(count)+'</p> <input id="header_text'+y+'"  class="header_text" name="header_text'+y+'"  type="text" placeholder="H2 Заголовок. Макс. длина 60 символов" maxlength="60" required />  <textarea class="textRecept" name="text'+y+'"  type="text" placeholder="Текст.." required></textarea> </div></div> ');
                let buttons = $('<div class="area_add_picture" id="Wrapper_add_image"><div  class="wrapper_Image" name="wrapperImage"> <p class="formP">Прикрепите изображение (.WEBP --ar 16:9 width: 600px)</p> <input  class="addpicture" name="picture'+y+'" type="file" accept="image/*" required/><input id="removeclassimage'+y+'" class="removeclassimage" type="button" value="Удалить поле"/> </div><!-- поля с картинками --> </div>');
                Wraptext = $("#Wrapper_add_text");
                $(Wraptext).append(el);
                el.append(buttons);
                count++;
                y++; //приращение текстового поля
                
                buttons.on("click", '.removeclassimage', function(e) { 
                    var id_btnRemoveImage = "#removeclassimage";
                    //удаление поля
                    buttons.remove();
                    count--;
                    el.remove();
                    y--;
                    if (y > 1){
                    id_btnRemoveImageCount = id_btnRemoveImage + (y - 1);
                    $(id_btnRemoveImageCount).show();
                    }
                });
            }
            return false;
        });
    });   
</script>

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