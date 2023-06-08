<?php
require_once 'StaticConnection.php';

// вывод списка в таблицу в order.php
function get_user(){
    $db_order = StaticConnection::getConnection();
    $sth = $db_order->prepare("SELECT full_name FROM users");
    $sth->execute();

    if ($sth->rowCount() > 0){
        while($user = $sth->fetch(PDO::FETCH_ASSOC)){ 
            $value_user [] =[
                'full_name' =>  $user['full_name'],
            ]; 
            
            $value_user_json = $value_user;
        }      
    }
    return json_encode($value_user_json);
}

echo get_user();