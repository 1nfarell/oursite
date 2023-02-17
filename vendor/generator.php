<?php

require_once 'StaticConnection.php';
//вывод ингридиентов на главную страницу blog.php, вызывается в function generationPost 

function autorPost()
{
    $full_name = $_GET['user'];
    
    $db = StaticConnection::getConnection();
    $sth = $db->prepare("SELECT DISTINCT articles.id, title, description, users.id AS id_user, users.full_name, categories.name 
    FROM articles             
    JOIN categories ON articles.id_categories = categories.id   
    JOIN users ON articles.id_username = users.id
    WHERE users.full_name = '$full_name'
    GROUP BY articles.id 
    ORDER BY articles.id DESC");

    $sth->execute();

    if ($sth->rowCount() > 0){
        while($article = $sth->fetch(PDO::FETCH_ASSOC)){ 
            ?>
            <div class="main-field">
                <a class="card-picture-teg-a" href="post.php?id_article=<?= $article['id'] ?>">
                    <img class="card-text-picture"  <?= $id_article = $article['id'];
                                                        $sthh = $db->prepare("SELECT images.id_article, images.image_name, images.image_tmp
                                                        FROM images            
                                                        WHERE images.id_article = $id_article AND recipe_picture_boolean = 1"); 
                                                        $sthh->execute();
                                                        $image = $sthh->fetch(PDO::FETCH_ASSOC); ?> src="data:image/jpeg;base64, <?= base64_encode($image['image_tmp']) ?>">
                </a>
                
                <div class="card-id"> 
                    <img class="card-icon-id" src="images\hashtag-sign.png">
                    <p class="card-id-name"><?= $article['name'] ?></p>
                </div>
                 
                <a class="card-title" href="post.php?id_article=<?= $article['id'] ?>">
                    <h2><?= $article['title'] ?></h2>
                </a>
                
                <div class="card-autor">    
                    <img class="card-icon-autor" src="images\icon-user.png">
                    <a href="autor.php?user=<?= $article['full_name'] ?>">
                        <p class="card-text-autor"><?= $article['full_name'] ?></p> 
                    </a>
                </div>                 
            </div>
            <?php             
        }     
    } else echo "Нет статей";      
}



//добавление полей из формы addpost.php в бд
function addPost(){
    
    if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['categories']) && isset($_FILES['myimage'])){
        
        $db = StaticConnection::getConnection();
             
        //добавление основных полей из формы
        $title = $_POST['title'];
        $description = $_POST['description'];                
        $id_categories = intval($_POST['categories']);
        $user = $_SESSION['user']['id']; 
        $views = 0;           
                
        $array = array('id_username' => $user ,'title' => $title, 'description' => $description, 'id_categories' => $id_categories, 'views' => $views);
        $sth = $db->prepare("INSERT INTO articles(id_username, title, description, id_categories, views) VALUES (:id_username, :title, :description, :id_categories, :views)");
        
        $sth->execute($array);

        //сохранение изображения в бд
        $imagename=$_FILES["myimage"]["name"];
        
        //Получаем содержимое изображения и добавляем к нему слеш            
        $imagetmp=addslashes(file_get_contents($_FILES['myimage']['tmp_name']));    
        
        $sth = $db->prepare("INSERT INTO images(image_tmp, image_name, recipe_picture_boolean, id_article) VALUES('$imagetmp','$imagename', 1, (SELECT id FROM articles ORDER BY ID DESC LIMIT 1))");
        $sth->execute();
        
        $y = 0; 
        $count=1; 

        while(isset($_FILES['picture'.$y])){
            $count++;

            $db = StaticConnection::getConnection();

            $picturename=$_FILES['picture'.$y]['name'];
            
            //Получаем содержимое изображения и добавляем к нему слеш            
            $imagetmp=addslashes(file_get_contents($_FILES['picture'.$y]['tmp_name']));        
           
            $sth = $db->prepare("INSERT INTO images(image_tmp, image_name, recipe_picture_boolean, id_article) VALUES('$imagetmp','$picturename', '$count', (SELECT id FROM articles ORDER BY ID DESC LIMIT 1))");
            $sth->execute();
            $y = $y + 1;
        };
        
        $x = 0; 
        $count=1; 

        while (isset($_POST['text'.$x]) && isset($_POST['header_text'.$x])){
            $count++;
            $db = StaticConnection::getConnection();
            $header_text = $_POST['header_text'.$x];
            $text = $_POST['text'.$x];
           
            $sth = $db->prepare("INSERT INTO recept_text(text, id_article, numeration, header_text) VALUES ('$text', (SELECT id FROM articles ORDER BY ID DESC LIMIT 1), '$count', '$header_text')");
            
            $sth->execute();

            $x = $x + 1;
        };
        $result = true;        
    }

    if ($result) {
        echo "Успех. Информация занесена в базу данных";
    } 
}

//SELECT categories в выпадающий список addpost.php
function selectCategories(){

    $db = StaticConnection::getConnection();
    $sth = $db->prepare("SELECT DISTINCT * FROM categories");
    $sth->execute();            
    
    if ($sth->rowCount() > 0){
        while($article = $sth->fetch(PDO::FETCH_ASSOC)){ 
            ?>
            <option value="<?= $article['id']?>"><?= $article['name'] ?></option>
            <?php
        }
    };            
}





