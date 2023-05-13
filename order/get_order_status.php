<?php
require_once 'StaticConnection_db_order.php';

// вывод списка в таблицу в order.php
function get_order_status(){
    $number_order = $_POST['number_order'];
    $db_order = StaticConnection::getConnection_db_order();
    $sth = $db_order->prepare("SELECT id_status, number_order, status, time_status, account 
    FROM order_status WHERE number_order = '$number_order' ORDER BY id_status");
    $sth->execute();

    if ($sth->rowCount() > 0){
        while($order_status = $sth->fetch(PDO::FETCH_ASSOC)){ 
            $value_order_status [] =[
                'number_order' =>  $order_status['number_order'],
                'status' => $order_status['status'],
                'time_status' => $order_status['time_status'],
                'account' => $order_status['account'],
            ]; 
            
            $value_order_status_json = $value_order_status;
        }      
    }
    
    return json_encode($value_order_status_json);
}

echo get_order_status();