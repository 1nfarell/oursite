<?php
require_once 'StaticConnection_db_order.php';
session_start();
// добавление в базу из формы в order.php
function add_sum_pay(){

    if($_POST['sum_pay']){

            $db_order = StaticConnection::getConnection_db_order();

            //добавление основных полей из формы
            $payment_balance =  (integer)$_POST["payment_balance"];
            $sum_pay =  (integer)$_POST["sum_pay"];
            $number_order =  $_POST["number_order"];
            $time_pay = date("d.m.Y");
            $account = $_SESSION['user']['full_name'];
            $time_last_pay = date("d.m.Y");

            if($sum_pay <= $payment_balance){

                $sth = $db_order->prepare("UPDATE orders SET payment_balance = payment_balance - '$sum_pay' WHERE number_order = '$number_order'");
                $sth->execute();
               
                $st = $db_order->prepare("INSERT INTO balance_orders(number_order, sum_pay, time_pay, account) VALUES ('$number_order', '$sum_pay', '$time_pay', '$account')");
                $st->execute();  
                
                $stt = $db_order->prepare("UPDATE orders SET time_last_pay = '$time_last_pay' WHERE number_order = '$number_order'");
                $stt->execute();

                $result = true;
            }

        }
    if ($result) {
        echo json_encode('SUCCESS');
    } else {
    echo json_encode('NOTVALID');
    }
}

echo add_sum_pay();