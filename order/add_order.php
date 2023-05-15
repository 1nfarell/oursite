<?php
require_once 'StaticConnection_db_order.php';
session_start();
// добавление в базу из формы в order.php
function add_Order(){
    
    if(isset($_POST['number_order']) && !empty($_POST['number_order']) && isset($_POST['description_order']) && !empty($_POST['description_order']) && isset($_POST['price_order']) && !empty($_POST['price_order']) && isset($_POST['price_order--status']) && !empty($_POST['price_order--status']) && isset($_POST['adress_order']) && !empty($_POST['adress_order']) && isset($_POST['contact_order']) && !empty($_POST['contact_order']) && isset($_POST['contact_name_order']) && !empty($_POST['contact_name_order'])){
        
        $db_order = StaticConnection::getConnection_db_order();
             
        //добавление основных полей из формы
        $number_order = $_POST['number_order'];
        $description_order = $_POST['description_order'];                
        $price_order = $_POST['price_order'];
        $price_order__status = $_POST['price_order--status'];
        $adress_order =  $_POST["adress_order"];
        $contact_name_order = $_POST['contact_name_order'];
        $contact_order =  $_POST["contact_order"];
        $today_order = date("d.m.Y"); 
        $order__status = ("В обработке");
        $time_last_status = date("d.m.Y");
        $account = $_SESSION['user']['full_name'];
     
        $sthh = $db_order->prepare("SELECT number_order FROM orders WHERE number_order = '$number_order'");
        $sthh->execute();

        if($sthh->rowCount() == 0){
            $db_order = StaticConnection::getConnection_db_order();

            $array = array('number_order' => $number_order ,'description_order' => $description_order, 'price_order' => $price_order, 'price_order__status' => $price_order__status, 'today_date_order' => $today_order, 'order__status' => $order__status, 'time_last_status' => $time_last_status, 'adress_order' => $adress_order, 'contact_order' => $contact_order, 'contact_name_order' => $contact_name_order, 'account' => $account);

            $sth = $db_order->prepare("INSERT INTO orders(number_order, description_order, price_order, price_order__status, today_date_order, order__status, time_last_status, adress_order, contact_order, contact_name_order, account) VALUES (:number_order, :description_order, :price_order, :price_order__status, :today_date_order, :order__status, :time_last_status, :adress_order, :contact_order, :contact_name_order, :account)");

            $sth->execute($array);

            $db_order = StaticConnection::getConnection_db_order();
            $st = $db_order->prepare("INSERT INTO order_status(number_order, status, time_status, account) VALUES ('$number_order', '$order__status', '$time_last_status', '$account')");
            $st->execute($array);

            $result = true;

        } else $result = false;
    }

    if ($result){echo json_encode('SUCCESS');} else if ($result == false){ echo json_encode('NOEMPTY');};
}

echo add_Order();