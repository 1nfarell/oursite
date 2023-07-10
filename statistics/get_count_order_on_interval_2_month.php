
<?php
require_once 'StaticConnection_db_order.php';

// вывод списка в таблицу в order.php
function get_count_order_on_interval_2_month(){ 
    $db_order = StaticConnection::getConnection_db_order(); 
    $sth = $db_order->prepare("SELECT DATE_FORMAT(today_date_order, '%m') AS order_month, COUNT(id_order) AS order_interval, SUM(price_order - payment_balance) AS price_interval
        FROM orders
        WHERE DATE_FORMAT(today_date_order, '%m') IN (
            DATE_FORMAT(CURRENT_DATE - INTERVAL 1 MONTH, '%m'), 
            DATE_FORMAT(CURRENT_DATE - INTERVAL 2 MONTH, '%m'),
            DATE_FORMAT(CURRENT_DATE - INTERVAL 3 MONTH, '%m'),
            DATE_FORMAT(CURRENT_DATE - INTERVAL 4 MONTH, '%m')
        ) AND order__status != 'Отменен'
        GROUP BY DATE_FORMAT(today_date_order, '%m')
        ORDER BY order_month DESC"); 
    $sth->execute();

    if ($sth->rowCount() > 0){
        while($update = $sth->fetch(PDO::FETCH_ASSOC)){ 
            
            $value_update [] =[
                'order_month' =>  $update['order_month'],
                'order_interval' => $update['order_interval'],
                'price_interval' => $update['price_interval'],
            ]; 
            
            $value_update_json = $value_update;
        }      
    } 
    return json_encode($value_update_json);
}

echo get_count_order_on_interval_2_month();