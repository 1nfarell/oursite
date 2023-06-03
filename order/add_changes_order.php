<?php
require_once 'StaticConnection_db_order.php';
session_start();
// добавление в базу из формы в order.php
function add_changes_order(){
       

        if($_POST['order__status']){
            
            $db_order = StaticConnection::getConnection_db_order();
                
            //добавление основных полей из формы
        
            $order__status =  $_POST["order__status"];
            $number_order =  $_POST["number_order"];
            $time_last_status = date("d.m.y, G:i");  
            $account = $_SESSION['user']['full_name'];      
            $array = array('number_order' => $number_order, 'order__status' => $order__status, 'time_last_status' => $time_last_status, 'account' => $account);
            $sth = $db_order->prepare("UPDATE orders SET time_last_status = '$time_last_status', order__status = '$order__status' WHERE number_order = '$number_order'");            
            $sth->execute();
         
            $st = $db_order->prepare("INSERT INTO order_status(number_order, status, time_status, account) VALUES (:number_order, :order__status, :time_last_status, :account)");
            
            $st->execute($array);

            $result = true;
        } 
    if ($result) {
        echo json_encode('SUCCESS');
    } else {
    echo json_encode('NOTVALID');
    }
}

echo add_changes_order();