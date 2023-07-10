

<?php
require_once 'StaticConnection_db_order.php';

// вывод списка в таблицу в order.php
function get_count_order_on_data(){ 
    $db_order = StaticConnection::getConnection_db_order(); 
    $sth = $db_order->prepare("SELECT SUBSTRING_INDEX(today_date_order, ',', 1) AS day, COUNT(id_order) AS total_amount, SUM(price_order - payment_balance) AS total_price
        FROM orders WHERE order__status != 'Отменен'
        GROUP BY day"); 
    $sth->execute();

    if ($sth->rowCount() > 0){
        while($update = $sth->fetch(PDO::FETCH_ASSOC)){ 
            
            $value_update [] =[
                'day' =>  $update['day'],
                'total_amount' => $update['total_amount'],
                'total_price' => $update['total_price'],
            ]; 
            
            $value_update_json = $value_update;
        }      
    } 
    return json_encode($value_update_json);
}

echo get_count_order_on_data();