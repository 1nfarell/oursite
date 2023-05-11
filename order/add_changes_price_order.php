<?php
require_once 'StaticConnection_db_order.php';
// добавление в базу из формы в order.php
function add_price_change_order(){
    
        if($_POST['price_change_order']){

            $db_order = StaticConnection::getConnection_db_order();
                
            //добавление основных полей из формы
        
            $price_change_order =  $_POST["price_change_order"];
            $number_order =  $_POST["number_order"];   
            $array = array('number_order' => $number_order, 'price_change_order' => $price_change_order);
            $sth = $db_order->prepare("UPDATE orders SET price_order__status = '$price_change_order' WHERE number_order = '$number_order'");
            
            $sth->execute($array);
           
            $result = true;
        } 
    if ($result) {
        echo json_encode('SUCCESS');
    } else {
    echo json_encode('NOTVALID');
    }
}

echo add_price_change_order();