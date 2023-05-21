<?php
require_once 'StaticConnection_db_order.php';

// вывод списка в таблицу в order.php
function get_order_pay(){
    $number_order = $_POST['number_order'];
    $db_order = StaticConnection::getConnection_db_order();
    $sth = $db_order->prepare("SELECT id_balance_orders, number_order, sum_pay, time_pay, account 
    FROM balance_orders WHERE number_order = '$number_order' ORDER BY id_balance_orders");
    $sth->execute();

    if ($sth->rowCount() > 0){
        while($order_status = $sth->fetch(PDO::FETCH_ASSOC)){ 
            $value_order_status [] =[
                'number_order' =>  $order_status['number_order'],
                'sum_pay' => $order_status['sum_pay'],
                'time_pay' => $order_status['time_pay'],
                'account' => $order_status['account'],
            ]; 
            
            $value_order_status_json = $value_order_status;
        }      
    }
    
    return json_encode($value_order_status_json);
}

echo get_order_pay();