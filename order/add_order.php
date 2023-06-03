<?php
require_once 'StaticConnection_db_order.php';
session_start();
// добавление в базу из формы в order.php
function add_Order(){
    
    if(isset($_POST['number_order']) && !empty($_POST['number_order']) && isset($_POST['description_order']) && !empty($_POST['description_order']) && isset($_POST['price_order']) && !empty($_POST['price_order']) && isset($_POST['price_order--status']) && !empty($_POST['price_order--status']) && isset($_POST['contact_order']) && !empty($_POST['contact_order']) && isset($_POST['contact_name_order']) && !empty($_POST['contact_name_order'])){
        
        $db_order = StaticConnection::getConnection_db_order();
             
        //добавление основных полей из формы
        $sum_pay = (integer)$_POST['sum_pay'];

        $number_order = $_POST['number_order'];
        $description_order = $_POST['description_order'];                
        $price_order = (integer)$_POST['price_order'];
        $price_order__status = $_POST['price_order--status'];
        $adress_order =  $_POST["adress_order"];

        if($adress_order == ''){
            $adress_order = 'Самовывоз';
        }
        
        $montazh_order = $_POST['montazh_order'];

        if($montazh_order == ''){
            $montazh_order = 'Без монтажа';
        }

        $contact_name_order = $_POST['contact_name_order'];
        $contact_order =  $_POST["contact_order"];
        $today_order = date("d.m.y, G:i"); 
        $order__status = ("В обработке");
        $time_last_status = date("d.m.y, G:i");
        $time_last_pay = date("d.m.y, G:i");
        $account = $_SESSION['user']['full_name'];
     
        $sthh = $db_order->prepare("SELECT number_order FROM orders WHERE number_order = '$number_order'");
        $sthh->execute();

        if($sthh->rowCount() == 0){           

            $array = array('number_order' => $number_order ,'description_order' => $description_order, 'price_order' => $price_order, 'price_order__status' => $price_order__status, 'today_date_order' => $today_order, 'order__status' => $order__status, 'time_last_status' => $time_last_status, 'adress_order' => $adress_order, 'contact_order' => $contact_order, 'contact_name_order' => $contact_name_order, 'account' => $account, 'montazh_order' => $montazh_order,);

            $sth = $db_order->prepare("INSERT INTO orders(number_order, description_order, price_order, payment_balance, price_order__status, today_date_order, order__status, time_last_status, adress_order, contact_order, contact_name_order, account, montazh_order) VALUES (:number_order, :description_order, :price_order, $price_order - $sum_pay, :price_order__status, :today_date_order, :order__status, :time_last_status, :adress_order, :contact_order, :contact_name_order, :account, :montazh_order)");
            $sth->execute($array);
           
            $st = $db_order->prepare("INSERT INTO order_status(number_order, status, time_status, account) VALUES ('$number_order', '$order__status', '$time_last_status', '$account')");
            $st->execute();

            // Если заказ оплачен сразу
            if($sum_pay == '' && $price_order__status == 'Оплачен'){
                
                $stg = $db_order->prepare("INSERT INTO balance_orders(number_order, sum_pay, time_pay, account) VALUES ('$number_order', '$price_order', '$today_order', '$account')");
                $stg->execute();

               
                $sthh = $db_order->prepare("UPDATE orders SET payment_balance = 0 WHERE number_order = '$number_order'");
                $sthh->execute();


                $stt = $db_order->prepare("UPDATE orders SET time_last_pay = '$time_last_pay' WHERE number_order = '$number_order'");
                $stt->execute();
            }

            // Если есть предоплата
            if($sum_pay != '' && $sum_pay <= $price_order && $price_order__status != 'Оплачен'){
               
                $stt = $db_order->prepare("INSERT INTO balance_orders(number_order, sum_pay, time_pay, account) VALUES ('$number_order', '$sum_pay', '$today_order', '$account')");
                $stt->execute();

                $stt = $db_order->prepare("UPDATE orders SET time_last_pay = '$time_last_pay' WHERE number_order = '$number_order'");
                $stt->execute();
            }
            $result = true;

        } else $result = false;
    }

    if ($result){echo json_encode('SUCCESS');} else if ($result == false){ echo json_encode('NOEMPTY');};
}

echo add_Order();