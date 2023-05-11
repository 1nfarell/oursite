<?php
require_once 'StaticConnection_db_order.php';
// добавление в базу из формы в order.php
function add_changes_date_montazhValue(){
    
        if($_POST['date_montazh_order']){

            $db_order = StaticConnection::getConnection_db_order();
                
            //добавление основных полей из формы
        
            $date_montazh_order =  (string)$_POST["date_montazh_order"];
            $number_order =  $_POST["number_order"];   
            $array = array('number_order' => $number_order, 'date_montazh_order' => $date_montazh_order);
            // $sth = $db_order->prepare("INSERT INTO orders(date_montazh) VALUES ('$date_montazh_order') WHERE number_order = '$number_order'");
            $sth = $db_order->prepare("UPDATE orders SET date_montazh = '$date_montazh_order' WHERE number_order = '$number_order'");
            
            $sth->execute($array);
           
            $result = true;
        } 
    if ($result) {
        echo json_encode('SUCCESS');
    } else {
    echo json_encode('NOTVALID');
    }
}

echo add_changes_date_montazhValue();