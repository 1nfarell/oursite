
<?php
require_once 'StaticConnection_db_order.php';

// вывод списка в таблицу в order.php
function get_interval(){ 
    $db_order = StaticConnection::getConnection_db_order(); 
    $sth = $db_order->prepare("SELECT DATE_FORMAT(time_last_status, '%m') AS month, SUM(DATEDIFF(DATE_FORMAT(SUBSTRING_INDEX(time_last_status, ',', 1), '%d.%m.%y'), DATE_FORMAT(SUBSTRING_INDEX(today_date_order, ',', 1), '%d.%m.%y'))) / COUNT(time_last_status) AS time_interval
    FROM orders 
    WHERE DATE_FORMAT(time_last_status, '%m') IN (
        DATE_FORMAT(CURRENT_DATE - INTERVAL 1 MONTH, '%m'), 
        DATE_FORMAT(CURRENT_DATE - INTERVAL 2 MONTH, '%m'),
        DATE_FORMAT(CURRENT_DATE - INTERVAL 3 MONTH, '%m'),
        DATE_FORMAT(CURRENT_DATE - INTERVAL 4 MONTH, '%m')) AND order__status = 'Выполнен'  
    GROUP BY month ORDER BY month DESC"); 
    $sth->execute();

    if ($sth->rowCount() > 0){
        while($update = $sth->fetch(PDO::FETCH_ASSOC)){ 
            
            $value_update [] =[
                'month' =>  $update['month'],
                'time_interval' =>  $update['time_interval'],
            ]; 
            
            $value_update_json = $value_update;
        }      
    } 
    return json_encode($value_update_json);
}

echo get_interval();