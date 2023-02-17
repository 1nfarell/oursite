<?php
require_once 'StaticConnection.php';

//вывод статей на главную страницу blog.php
function outputHome()
{
    
    $db = StaticConnection::getConnection();
    $sth = $db->prepare("SELECT DISTINCT articles.id, title, users.id AS id_user, users.full_name, date, categories.id AS categID, categories.name AS categName   
    FROM articles             
    JOIN categories ON articles.id_categories = categories.id   
    JOIN users ON articles.id_username = users.id
    GROUP BY articles.id 
    ORDER BY articles.id DESC");
    $sth->execute();

    if ($sth->rowCount() > 0){
        while($article = $sth->fetch(PDO::FETCH_ASSOC)){ 
            
            $id_article = $article['id'];

            $sthh = $db->prepare("SELECT images.id_article, images.image_name, images.image_tmp
                FROM images            
                WHERE images.id_article = $id_article AND recipe_picture_boolean = 1"); 
            $sthh->execute();

            $image = $sthh->fetch(PDO::FETCH_ASSOC);

            $valuecard [] =[
                'id' =>  $article['id'],
                'image' => base64_encode($image['image_tmp']),
                'categID' => $article['categID'],
                'categName' => $article['categName'],
                'title' => $article['title'],
                'full_name' => $article['full_name'],
                'date' => $article['date'],                
            ]; 
            $valuecard_json = $valuecard;      
        }             
         
    }    return json_encode($valuecard_json);  
}

echo outputHome();