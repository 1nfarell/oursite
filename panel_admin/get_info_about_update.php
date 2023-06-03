<?php
require_once 'StaticConnection_db_admin.php';

// вывод списка в таблицу в order.php
function get_info_about_update(){ 
    $db_order = StaticConnection::getConnection_db_admin(); 
    $sth = $db_order->prepare("SET SESSION group_concat_max_len = 2000;"); 
    $sth->execute();
    $sth = $db_order->prepare("SELECT date_update, GROUP_CONCAT(type_update SEPARATOR '; ') AS type_update, GROUP_CONCAT(text_update SEPARATOR '; ') AS text_update
    FROM info_update_website 
    GROUP BY date_update
    ORDER BY date_update DESC LIMIT 100"); 
    $sth->execute();

    if ($sth->rowCount() > 0){
        while($update = $sth->fetch(PDO::FETCH_ASSOC)){ 
            
            $value_update [] =[
                'date_update' =>  $update['date_update'],
                'type_update' => $update['type_update'],
                'text_update' => $update['text_update'],
            ]; 
            
            $value_update_json = $value_update;
        }      
    } 
    return json_encode($value_update_json);
}

echo get_info_about_update();

