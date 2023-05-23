<?php
require_once 'StaticConnection_db_order.php';

// вывод списка в таблицу в order.php
function get_order_search(){
    $number_order = $_POST['number_order'];
    $db_order = StaticConnection::getConnection_db_order();
    $sth = $db_order->prepare("SELECT DISTINCT id_order, number_order, description_order, price_order, payment_balance, price_order__status, today_date_order, order__status, time_last_status, adress_order, contact_order, contact_name_order, date_montazh, account, time_last_pay, montazh_order
    FROM orders WHERE number_order = '$number_order'"); 
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
                'montazh_order' => $order['montazh_order'],
            ]; 
            
            $value_order_json = $value_order;
        }      
    } 
    return json_encode($value_order_json);
}

echo get_order_search();