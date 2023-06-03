<?php
require_once 'StaticConnection_db_admin.php';
session_start();
// добавление в базу из формы в order.php
function add_Update(){
    $x = 1; 
    $count=1; 
    $result = false;

    while(isset($_POST['type_update'.$x]) && !empty($_POST['type_update'.$x]) && isset($_POST['text_update'.$x]) && !empty($_POST['text_update'.$x])){
        
        $db_order = StaticConnection::getConnection_db_admin();

        $count++;     
        //добавление основных полей из формы
        $text_update = $_POST['text_update'.$x];
        $type_update = $_POST['type_update'.$x];  
        $date_update= date("d.m.y");
       
        $array = array('date_update' => $date_update ,'type_update' => $type_update, 'text_update' => $text_update);

        $sth = $db_order->prepare("INSERT INTO info_update_website(date_update, type_update, text_update) VALUES (:date_update, :type_update, :text_update)");
        $sth->execute($array);

        $x = $x + 1;
        
        $result = true;
    } 

    if ($result){echo json_encode('SUCCESS');} else if ($result == false){ echo json_encode('NOEMPTY');};
}

echo add_Update();