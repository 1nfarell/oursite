<?php
require_once 'StaticConnection_db_order.php';

// вывод списка в таблицу в order.php
function get_Order(){ 
    $counter_element = 10; //шаг бесконечного скрола (изменять на такое же значение и в get_order.js) 
    $counter_pass = $_POST["counter_pass"];
   
    $db_order = StaticConnection::getConnection_db_order();
    $sth = $db_order->prepare("SELECT DISTINCT id_order, number_order, description_order, price_order, payment_balance, price_order__status, today_date_order, order__status, time_last_status, adress_order, contact_order, contact_name_order, date_montazh, account, time_last_pay
    FROM orders ORDER BY id_order DESC LIMIT $counter_pass, $counter_element"); 
    $sth->execute();

    if ($sth->rowCount() > 0){
        while($order = $sth->fetch(PDO::FETCH_ASSOC)){ 
            
            $value_order [] =[
                'number_order' =>  $order['number_order'],
                'description_order' => $order['description_order'],
                'price_order' => $order['price_order'],
                'payment_balance' => $order['payment_balance'],
                'price_order__status' => $order['price_order__status'],
                'today_date_order' => $order['today_date_order'],
                'order__status' => $order['order__status'],
                'time_last_status' => $order['time_last_status'],
                'adress_order' => $order['adress_order'],
                'contact_order' => $order['contact_order'],
                'contact_name_order' => $order['contact_name_order'],
                'date_montazh' => $order['date_montazh'],
                'account' => $order['account'],
                'time_last_pay' => $order['time_last_pay'],
            ]; 
            
            $value_order_json = $value_order;
        }      
    } 
    return json_encode($value_order_json);
}

echo get_Order();