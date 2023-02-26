<?php

require_once 'StaticConnection.php';

const PER_PAGE = '2';

function getSortField(string $method = 'date')
{
    switch ($method) {
        case 'date':
            return 'articles.date';
    }
}

function getPosts($offset, $limit, $sortField, array $categorIdArray = [])
{
    $db = StaticConnection::getConnection();
    $catArr = '(' . join(",", $categorIdArray) . ')';
    $categories = $categorIdArray != [] ? "WHERE categories.id in $catArr" : '';
    $countH = $db->prepare("SELECT COUNT(*) AS count FROM articles " . 
    (string) str_replace('categories.id', 'id_categories', $categories) .
    ";"
    );
    $countH->execute();
    $sth = $db->prepare("SELECT DISTINCT articles.id, title, users.id AS id_user, users.full_name, date, categories.id AS categID, categories.name AS categName   
    FROM articles             
    JOIN categories ON articles.id_categories = categories.id   
    JOIN users ON articles.id_username = users.id " .
    $categories .
    "GROUP BY articles.id 
    ORDER BY $sortField DESC LIMIT $offset,$limit");
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
                'date' => date("d.m.Y",strtotime($article['date'])),  
            ]; 
            $valuecard_json = $valuecard;      
        }             
         
    }    return json_encode([
           'items' => $valuecard_json,
           'count' => $countH->fetch(PDO::FETCH_ASSOC)['count']
        ]);  
}

$pageNumber = $_POST['page'];
$perPage = isset($_POST['perPage']) ? $_POST['perPage'] : PER_PAGE;
$catId = [];
if(isset($_POST['category']) && $_POST['category'] != "all") {
    $catId = [$_POST['category']];
}
echo getPosts(($pageNumber - 1) * $perPage, $perPage, getSortField(), $catId);

