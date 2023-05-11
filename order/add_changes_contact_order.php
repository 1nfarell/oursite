<?php
require_once 'StaticConnection_db_order.php';
// добавление в базу из формы в order.php
function add_changes_contact_order(){
    
        if($_POST['contact_order']){

            $db_order = StaticConnection::getConnection_db_order();
                
            //добавление основных полей из формы
        
            $contact_order =  $_POST["contact_order"];
            $number_order =  $_POST["number_order"];   
            $array = array('number_order' => $number_order, 'contact_order' => $contact_order);
            $sth = $db_order->prepare("UPDATE orders SET contact_order = '$contact_order' WHERE number_order = '$number_order'");
            
            $sth->execute($array);
           
            $result = true;
        } 
    if ($result) {
        echo json_encode('SUCCESS');
    } else {
    echo json_encode('NOTVALID');
    }
}

echo add_changes_contact_order();