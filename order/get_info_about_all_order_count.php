<?php
require_once 'StaticConnection_db_order.php';

// вывод списка в таблицу в order.php
function get_info_about_all_order_count(){
   

    $db_order = StaticConnection::getConnection_db_order();
    $query = "SELECT COUNT(id_order) AS column_count FROM orders";
    
    $full_name = $_POST['full_name'];
    if(!empty($full_name)){
        $query .= " WHERE account = '$full_name'";
    }
    
    $sth = $db_order->prepare($query);  
    $sth->execute();

    if ($sth->rowCount() > 0){
        while($order_status = $sth->fetch(PDO::FETCH_ASSOC)){ 
            $value_order_status [] =[
                'column_count' =>  $order_status['column_count'],
            ]; 
            
            $value_order_status_json = $value_order_status;
        }      
    }
    
    return json_encode($value_order_status_json);
}

echo get_info_about_all_order_count();