<?php 
require_once 'StaticConnection_db_order.php';

function deleteOrder(){
    if($_POST['number_order']){

        $number_order = $_POST['number_order'];
        $db_order = StaticConnection::getConnection_db_order();
        $sth = $db_order->prepare("DELETE FROM orders
        WHERE number_order = '$number_order'");
        $sth->execute();  

        $sth = $db_order->prepare("DELETE FROM order_status
        WHERE number_order = '$number_order'");
        $sth->execute(); 

        $sth = $db_order->prepare("DELETE FROM balance_orders
        WHERE number_order = '$number_order'");
        $sth->execute(); 
    
        $result = true;
    } 
    if ($result) {
        echo json_encode('SUCCESS');
    } else {
    echo json_encode('NOTVALID');
    }
}

echo deleteOrder();