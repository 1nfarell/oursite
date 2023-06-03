
<?php
require_once 'StaticConnection_db_order.php';

// вывод списка в таблицу в order.php
function get_count_status(){ 
    
    $db_order = StaticConnection::getConnection_db_order();

    // если не выбран фильрт по статусу заказа
    $sth = $db_order->prepare("SELECT order__status AS status, COUNT(*) AS results FROM orders WHERE order__status IN ('В обработке', 'Сборка', 'Доставка', 'Готово к отгрузке') GROUP BY order__status
        UNION ALL
        SELECT price_order__status AS status, COUNT(*) AS results FROM orders WHERE price_order__status IN ('Предоплата', 'Рассрочка') GROUP BY price_order__status"); 
    $sth->execute();
   

    if ($sth->rowCount() > 0){
        while($status = $sth->fetch(PDO::FETCH_ASSOC)){ 
            
            $value_status [] =[
                'status' =>  $status['status'],
                'results' => $status['results'],
            ]; 
            
            $value_status_json = $value_status;
        }      
    } 
    return json_encode($value_status_json);
}

echo get_count_status();