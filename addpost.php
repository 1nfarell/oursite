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
    <link rel="stylesheet" href="/assets/css/index.css">
    <title>Добавить статью - Студия Веб Дизайна MNDP</title>
    
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
                    <!-- Профиль -->
                    <div class="header-profile">
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
                            <a href="register.php">Регистрация</a>
                            <a href="login.php">Вход</a>
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
        <p style="padding-bottom: 20px; font-size: 18px; color: #5b5b5b;">Добавить рецепт</p>
        <form class="formAdd" name="formAddPost" method="POST" enctype="multipart/form-data"   action="">
            <div class="CategoriesArea">
                <p class="formP">Выберите категорию</p> 
                <select class="selectCategories" name="categories" required> 
                    <option disabled selected></option>
                    <?php selectCategories(); ?>
                </select>
            </div>
            <div class="nameReceptArea">        
                <p class="formP">Название рецепта</p> 
                <input  class="nameRecept" name="title" type="text" placeholder="Название рецепта" maxlength="60" pattern="^[А-Яа-яЁё\s]+$" required/>           
            </div>             
            <div class="descriptionArea">
                <p class="formP">Краткое описание</p>                
                <textarea class="descriptionRecept" name="description" type="text" placeholder="Краткое описание" maxlength="170"  required></textarea> 
            </div>
            <div class="imageReceptArea">
                <p class="formP">Картинка для обложки</p>
                <label class="custom-file-upload">
                <input class="imageRecept" type="file" name="myimage" accept="image/jpeg" required/>Загрузить
                </label>
            </div>
            <div class="inputRecept"> 
                <div class="inputReceptPicture">
                    <div class="add_picture_button">
                        <p class="formP">Напишите рецепт. Процесс приготовления разбейте по пунктам и добавьте изображения.</p>
                        <input class="add_button_picture" id="INeedMoreImages" type="button" value="Добавить поле"/> 
                    </div>
                    <div class="inputReceptDescription" id="Wrapper_add_text">  <!-- поля с текстом -->  </div>
                </div>
            </div>
            <input class="saveButton" id="saveButton" type="submit" value="Сохранить рецепт"  />  
        </form>            
                                
        <?php addPost();?>                    
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
<script type="text/javascript">
   
    // $(document).ready(function() {
    //     var MaxInputs = 15;
    //     var Wrap = $("#Wrapper_add");
    //     var AddButton = $("#INeedMore");
    //     var x = Wrap.length;
    //     var FieldCount = 0;
    //     let SelectData = [];

    //     $(document).ready(function() {     
    //         let dataForm = $(this).serialize();
    //         $.ajax({
    //             url: 'vendor/selectMeashure.php',
    //             method: 'GET',
    //             data: dataForm,                   
    //             success: function(data){                
    //                 SelectData = JSON.parse(data);
    //                 $(Wrap).append('<div class="wrapper_indigrients" name="wrapper"><input id="indigrient'+x+'"  class="indigrient" name="indigrient'+x+'"  type="text" placeholder="Ингредиент" maxlength="40" style="width:60%;" required pattern="^[А-Яа-яЁё\\s]+$"/><input  class="amount" name="amount'+x+'" type="text" placeholder="Кол-во" maxlength="4" style="width:20%;" required pattern="^\\d+([,.]\\d){0,1}\\d*$"/><select class="measure" required name="measure'+x+'"><option disabled selected></option>'+SelectData.reduce((previousValue, currentValue) => previousValue + `<option value="${currentValue['id']}"> ${currentValue['value']}</option>`, '')+' </select> </div>');
    //                 x++; 
    //             }, 
    //             error: function(...data){    
    //             }                
    //         })            
    //     });     
           
          
    //         //   добавление и удаление полей индигриентов
        // $(AddButton).click(function(e) //функция добавления нового поля
        // {
        //     if (x <= MaxInputs) //проверяем на максимальное кол-во
        //     {   $(".removeclass").hide();
        //         FieldCount++;
        //         //добавляем поле
        //         $(Wrap).append('<div  class="wrapper_indigrients" name="wrapper"><input id="indigrient'+x+'"  class="indigrient" name="indigrient'+x+'"  type="text" placeholder="Ингредиент" maxlength="40" style="width:60%;" required pattern="^[А-Яа-яЁё\\s]+$"/><input  class="amount" name="amount'+x+'" type="text" placeholder="Кол-во" maxlength="4" style="width:20%;" required pattern="^\\d+([,.]\\d){0,1}\\d*$"/><select class="measure" required name="measure'+x+'"><option disabled selected></option>'+SelectData.reduce((previousValue, currentValue) => previousValue + `<option value="${currentValue['id']}"> ${currentValue['value']}</option>`, '')+' </select><input id="removeclass'+x+'" class="removeclass" type="button" value="Удалить"/> </div>');
                
        //         x++; //приращение текстового поля
        //     }
        //     return false;
        // });
        
        // $("body").on("click", ".removeclass", function(e) { //удаление поля
        //     if (x > 2) {
        //         var id_btnRemove = "#removeclass";                
        //         console.log(x);
        //         $(this).parent('div').remove(); //удалить блок с полем
        //         x--; //уменьшаем номер текстового поля
        //         if (x > 2){
        //         id_btnRemoveCount = id_btnRemove + (x - 1);
        //         $(id_btnRemoveCount).show()};   
        //     }
        //     return false;
        // })
    // });
    $(document).ready(function() {
        var MaxInputs = 5;
        var Wrap = $("#Wrapper_add_image");        
        var Wraptext = $("#Wrapper_add_text");
        var AddButton = $("#INeedMoreImages");    
        let y = Wrap.length;
        var FieldCount = 0;
        let count = 1;
        
        
        let el = $('<div id="wrapper_Text'+y+'"  class="wrapper_Text" name="wrapper_Text">  <div class="text"> <p class="formP"> Пункт №'+(count)+'</p> <input id="header_text'+y+'"  class="header_text" name="header_text'+y+'"  type="text" placeholder="Заголовок" maxlength="60" required /><textarea class="textRecept" name="text'+y+'"  type="text" placeholder="Опишите процесс приготовления.." maxlength="500" required></textarea> </div></div> ');
                let buttons = $('<div class="area_add_picture" id="Wrapper_add_image"><div  class="wrapper_Image" name="wrapperImage"> <p class="formP">Прикрепите изображение</p> <label class="custom-file-upload"><input  class="addpicture" name="picture'+y+'" type="file" accept="image/jpeg" required/>Загрузить</label> </div><!-- поля с картинками --> </div>');
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
                let el = $('<div id="wrapper_Text'+y+'"  class="wrapper_Text" name="wrapper_Text">  <div class="text"> <p class="formP"> Пункт №'+(count)+'</p> <input id="header_text'+y+'"  class="header_text" name="header_text'+y+'"  type="text" placeholder="Заголовок" maxlength="60" required />  <textarea class="textRecept" name="text'+y+'"  type="text" placeholder="Опишите процесс приготовления.." maxlength="500" required></textarea> </div></div> ');
                let buttons = $('<div class="area_add_picture" id="Wrapper_add_image"><div  class="wrapper_Image" name="wrapperImage"> <p class="formP">Прикрепите изображение</p> <label class="custom-file-upload"><input  class="addpicture" name="picture'+y+'" type="file" accept="image/jpeg" required/>Загрузить</label><input id="removeclassimage'+y+'" class="removeclassimage" type="button" value="Удалить поле"/> </div><!-- поля с картинками --> </div>');
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
</body>
</html>