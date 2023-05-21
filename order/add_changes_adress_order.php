<?php
require_once 'StaticConnection_db_order.php';
// добавление в базу из формы в order.php
function add_changes_adress_order(){
    
        if($_POST['adress_order']){

            $db_order = StaticConnection::getConnection_db_order();
                
            //добавление основных полей из формы
        
            $adress_order =  $_POST["adress_order"];
            $number_order =  $_POST["number_order"];   
            $sth = $db_order->prepare("UPDATE orders SET adress_order = '$adress_order' WHERE number_order = '$number_order'");
            
            $sth->execute();
           
            $result = true;
        } 
    if ($result) {
        echo json_encode('SUCCESS');
    } else {
    echo json_encode('NOTVALID');
    }
}

echo add_changes_adress_order();