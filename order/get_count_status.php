
<?php
require_once 'StaticConnection_db_order.php';

// вывод списка в таблицу в order.php
function get_count_status(){ 
    
    $db_order = StaticConnection::getConnection_db_order();
    $field_query_full_name = "";
    
    $full_name = $_POST['full_name'];
    if(!empty($full_name)){
        $field_query_full_name .= " AND account = '$full_name'";
    }
    // если не выбран фильрт по статусу заказа
    $query = "SELECT order__status AS status, COUNT(*) AS results FROM orders WHERE order__status IN ('В обработке', 'Сборка', 'Доставка', 'Готово к отгрузке') $field_query_full_name GROUP BY order__status
        UNION ALL
        SELECT price_order__status AS status, COUNT(*) AS results FROM orders WHERE price_order__status IN ('Предоплата', 'Рассрочка') $field_query_full_name"; 
    
    
    $query .= " GROUP BY price_order__status";
    $sth = $db_order->prepare($query);
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