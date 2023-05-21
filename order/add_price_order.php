<?php
require_once 'StaticConnection_db_order.php';
// записать изменения поля "сумма заказа"
function add_price_order(){
    
        if($_POST['price_order']){

            $db_order = StaticConnection::getConnection_db_order();
                
            //добавление основных полей из формы
            $payment_balance = (integer)$_POST["payment_balance"];
            $price_order =  (integer)$_POST["price_order"];
            $number_order =  $_POST["number_order"];   
            $price_order_old = (integer)$_POST["price_order_old"]; 
            
            //если (старая сумма заказа - остаток оплаты) < новой суммы заказа
            if(($price_order_old - $payment_balance) <= $price_order){
                //новый остаток оплаты = новая сумма заказа - (старая сумма заказа - остаток оплаты)
                $payment_balance_new = $price_order - ($price_order_old - $payment_balance);
                //записать изменения суммы заказа                
                $sth = $db_order->prepare("UPDATE orders SET price_order = '$price_order' WHERE number_order = '$number_order'");                
                $sth->execute();
               
                //записать изменения  остатока оплаты
                $sthh = $db_order->prepare("UPDATE orders SET payment_balance = '$payment_balance_new' WHERE number_order = '$number_order'");
                $sthh->execute();
            
                $result = true;
            }
            // else{
            //     $payment_balance_new = $price_order - ($price_order_old - $payment_balance);

            //     $array = array('number_order' => $number_order, 'price_order' => $price_order);
            //     $sth = $db_order->prepare("UPDATE orders SET price_order = '$price_order' WHERE number_order = '$number_order'");
                
            //     $sth->execute($array);

            //     $db_order = StaticConnection::getConnection_db_order();
                
            //     $sthh = $db_order->prepare("UPDATE orders SET payment_balance = '$payment_balance_new' WHERE number_order = '$number_order'");

            //     $sthh->execute($array);
            
            //     $result = true;
            // }
        
    } 
    if ($result) {
        echo json_encode('SUCCESS');
    } else {
    echo json_encode('NOTVALID');
    }
}

echo add_price_order();