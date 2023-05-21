<?php
require_once 'StaticConnection_db_order.php';
session_start();
// добавление в базу изменения статуса оплаты
function add_price_change_order(){
        $sum_pay = $_POST["sum_pay"];
        $price_change_order =  $_POST["price_change_order"];
        $number_order =  $_POST["number_order"];
        $payment_balance =  (integer)$_POST["payment_balance"];
        $price_order =  (integer)$_POST["price_order"];
        $time_pay = date("d.m.Y");
        $account = $_SESSION['user']['full_name'];

        if($_POST['price_change_order']){

            $db_order = StaticConnection::getConnection_db_order();
                
            //запись измененного стутуса оплаты
            $sth = $db_order->prepare("UPDATE orders SET price_order__status = '$price_change_order' WHERE number_order = '$number_order'");            
            $sth->execute();

            //если статус "оплачен"
            if ($price_change_order == 'Оплачен') {
                //записать последнюю оплату как как разницу суммы оплаты и остатка оплаты                
                $st = $db_order->prepare("INSERT INTO balance_orders(number_order, sum_pay, time_pay, account) VALUES ('$number_order', '$price_order - $payment_balance', '$time_pay', '$account')");
                $st->execute();

                //записать остаток оплаты как 0 если оплачен
                $sthh = $db_order->prepare("UPDATE orders SET payment_balance = 0 WHERE number_order = '$number_order'");
                $sthh->execute();
            }
            //если статус "не оплачен"
            if($_POST['price_change_order'] == "Не оплачен"){   
                //удалить данные об оплате 
                $stt = $db_order->prepare("DELETE FROM balance_orders WHERE number_order = '$number_order'");
                $stt->execute(); 
                //остаток оплаты равен сумме оплаты
                $sttt = $db_order->prepare("UPDATE orders SET payment_balance =  '$price_order' WHERE number_order = '$number_order'");
                $sttt->execute();

            }
           
            $result = true;
        } 
    if ($result) {
        echo json_encode('SUCCESS');
    } else {
    echo json_encode('NOTVALID');
    }
}

echo add_price_change_order();