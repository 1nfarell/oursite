<?php
require_once 'StaticConnection_db_order.php';

// вывод списка в таблицу в order.php
function get_Order(){ 
    $counter_element = 10; //шаг бесконечного скрола (изменять на такое же значение и в get_order.js) 
    $counter_pass = $_POST["counter_pass"];
    
    
    $db_order = StaticConnection::getConnection_db_order();

    $change_select_order = $_POST["change_select_order"]; 
    $change_select_user = $_POST["change_select_user"];
    $search_order_in_db = $_POST["search_order_in_db"];
    $date_sort_order_value = $_POST["date_sort_order_value"];

    if(empty($date_sort_order_value)){
        $date_sort_order_value = 'DESC';
    }

    if(strpos($search_order_in_db, "т\\")=== 0 || strpos($search_order_in_db, "т/")=== 0){
        $search_order_in_db = str_replace("т\\", "", $search_order_in_db); // удалление т\ перед строкой  
        $search_order_in_db = str_replace("т/", "", $search_order_in_db); // удалление т\ перед строкой        
        $search_order_in_db = trim($search_order_in_db); //удалление пробелов в начане и конце строки
        $query_text = 'contact_order';
    } else if(strpos($search_order_in_db, "н\\")=== 0 || strpos($search_order_in_db, "н/")=== 0){
        $search_order_in_db = str_replace("н\\", "", $search_order_in_db); // удалление т\ перед строкой  
        $search_order_in_db = str_replace("н/", "", $search_order_in_db); // удалление т\ перед строкой       
        $search_order_in_db = trim($search_order_in_db); //удалление пробелов в начане и конце строки
        $query_text = 'description_order';
    }  else if(strpos($search_order_in_db, "ф\\")=== 0 || strpos($search_order_in_db, "ф/")=== 0){
        $search_order_in_db = str_replace("ф\\", "", $search_order_in_db); // удалление т\ перед строкой 
        $search_order_in_db = str_replace("ф/", "", $search_order_in_db); // удалление т\ перед строкой        
        $search_order_in_db = trim($search_order_in_db); //удалление пробелов в начане и конце строки
        $query_text = 'contact_name_order';
    }  else if(strpos($search_order_in_db, "м\\")=== 0 || strpos($search_order_in_db, "м/")=== 0){
        $search_order_in_db = str_replace("м\\", "", $search_order_in_db); // удалление т\ перед строкой   
        $search_order_in_db = str_replace("м/", "", $search_order_in_db); // удалление т\ перед строкой      
        $search_order_in_db = trim($search_order_in_db); //удалление пробелов в начане и конце строки
        $query_text = 'montazh_order';
    }  else if(strpos($search_order_in_db, "а\\")=== 0 || strpos($search_order_in_db, "а/")=== 0){
        $search_order_in_db = str_replace("а\\", "", $search_order_in_db); // удалление т\ перед строкой  
        $search_order_in_db = str_replace("а/", "", $search_order_in_db); // удалление т\ перед строкой       
        $search_order_in_db = trim($search_order_in_db); //удалление пробелов в начане и конце строки
        $query_text = 'adress_order';
    }  else if(strpos($search_order_in_db, "з\\")=== 0 || strpos($search_order_in_db, "з/")=== 0){
        $search_order_in_db = str_replace("з\\", "", $search_order_in_db); // удалление т\ перед строкой    
        $search_order_in_db = str_replace("з/", "", $search_order_in_db); // удалление т\ перед строкой     
        $search_order_in_db = trim($search_order_in_db); //удалление пробелов в начане и конце строки
        $query_text = 'number_order';
    }  else if(strpos($search_order_in_db, "до\\")=== 0 || strpos($search_order_in_db, "до/")=== 0){
        $search_order_in_db = str_replace("до\\", "", $search_order_in_db); // удалление т\ перед строкой    
        $search_order_in_db = str_replace("до/", "", $search_order_in_db); // удалление т\ перед строкой     
        $search_order_in_db = trim($search_order_in_db); //удалление пробелов в начане и конце строки
        $query_text = 'today_date_order';
    }  else if(strpos($search_order_in_db, "по\\")=== 0 || strpos($search_order_in_db, "по/")=== 0){
        $search_order_in_db = str_replace("по\\", "", $search_order_in_db); // удалление т\ перед строкой 
        $search_order_in_db = str_replace("по/", "", $search_order_in_db); // удалление т\ перед строкой        
        $search_order_in_db = trim($search_order_in_db); //удалление пробелов в начане и конце строки
        $query_text = 'time_last_pay';
    }  else if(strpos($search_order_in_db, "дм\\")=== 0 || strpos($search_order_in_db, "дм/")=== 0){
        $search_order_in_db = str_replace("дм\\", "", $search_order_in_db); // удалление т\ перед строкой   
        $search_order_in_db = str_replace("дм/", "", $search_order_in_db); // удалление т\ перед строкой      
        $search_order_in_db = trim($search_order_in_db); //удалление пробелов в начане и конце строки
        $query_text = 'date_montazh';
    }  else if(strpos($search_order_in_db, "п\\")=== 0 || strpos($search_order_in_db, "п/")=== 0){
        $search_order_in_db = str_replace("п\\", "", $search_order_in_db); // удалление т\ перед строкой 
        $search_order_in_db = str_replace("п/", "", $search_order_in_db); // удалление т\ перед строкой        
        $search_order_in_db = trim($search_order_in_db); //удалление пробелов в начане и конце строки
        $query_text = 'account';
    }  else if(strpos($search_order_in_db, "сг\\")=== 0 || strpos($search_order_in_db, "сг/")=== 0){
        $search_order_in_db = str_replace("сг\\", "", $search_order_in_db); // удалление т\ перед строкой   
        $search_order_in_db = str_replace("сг/", "", $search_order_in_db); // удалление т\ перед строкой      
        $search_order_in_db = trim($search_order_in_db); //удалление пробелов в начане и конце строки
        $query_text = 'order__status';
    }  else if(strpos($search_order_in_db, "со\\")=== 0 || strpos($search_order_in_db, "со/")=== 0){
        $search_order_in_db = str_replace("со\\", "", $search_order_in_db); // удалление т\ перед строкой 
        $search_order_in_db = str_replace("со/", "", $search_order_in_db); // удалление т\ перед строкой        
        $search_order_in_db = trim($search_order_in_db); //удалление пробелов в начане и конце строки
        $query_text = 'price_order__status';
    }   else if(strpos($search_order_in_db, "дд\\")=== 0 || strpos($search_order_in_db, "дд/")=== 0){
        $search_order_in_db = str_replace("дд\\", "", $search_order_in_db); // удалление т\ перед строкой  
        $search_order_in_db = str_replace("дд/", "", $search_order_in_db); // удалление т\ перед строкой       
        $search_order_in_db = trim($search_order_in_db); //удалление пробелов в начане и конце строки
        $query_text = 'date_montazh';
    }
    // if(empty($search_order_in_db)) {    
        $query = "SELECT DISTINCT id_order, number_order, description_order, price_order, payment_balance, price_order__status, today_date_order, order__status, time_last_status, adress_order, contact_order, contact_name_order, date_montazh, account, time_last_pay, montazh_order FROM orders";

        //Проверяем выбор фильтров
        if (!empty($change_select_order) && !empty($change_select_user)) {
            //если выбраны оба фильтра
            if($change_select_order == 'Предоплата' || $change_select_order == 'Рассрочка'){
                $query .= " WHERE price_order__status = '$change_select_order' AND account = '$change_select_user'";
            } else{
                $query .= " WHERE order__status = '$change_select_order' AND account = '$change_select_user' AND order__status != 'Отменен'";
            }
            if(!empty($search_order_in_db)){
                $query .= " AND ".$query_text." LIKE '%" . $search_order_in_db . "%'";
            }
        } else if (!empty($change_select_order)) {
            //если выбран только фильтр по статусу заказа
            if($change_select_order == 'Предоплата' || $change_select_order == 'Рассрочка'){
                $query .= " WHERE price_order__status = '$change_select_order' AND order__status != 'Отменен'";
            } else{
                $query .= " WHERE order__status = '$change_select_order'";
            }
            if(!empty($search_order_in_db)){
                $query .= " AND ".$query_text." LIKE '%" . $search_order_in_db . "%'";
            }
        } else if (!empty($change_select_user)) {
            //если выбран только фильтр по пользователю
            
            $query .= " WHERE account = '$change_select_user'";
            if(!empty($search_order_in_db)){
                $query .= " AND ".$query_text." LIKE '%" . $search_order_in_db . "%'";
            }
        } else if (empty($change_select_order) && empty($change_select_user)){
            if(!empty($search_order_in_db)){
                $query .= " WHERE ".$query_text." LIKE '%" . $search_order_in_db . "%'";
            }
        }

       
        if(isset($counter_pass)){
            // Добавляем сортировку и лимит
            $query .= " ORDER BY id_order $date_sort_order_value LIMIT $counter_pass, $counter_element";
        }
        $sth = $db_order->prepare($query); 
        $sth->execute();
    // }

    if ($sth->rowCount() > 0){
        while($order = $sth->fetch(PDO::FETCH_ASSOC)){ 
            
            $value_order [] =[
                'number_order' =>  $order['number_order'],
                'description_order' => $order['description_order'],
                'price_order' => $order['price_order'],
                'payment_balance' => $order['payment_balance'],                
                'price_order__status' => $order['price_order__status'],
                'time_last_pay' => $order['time_last_pay'],                
                'order__status' => $order['order__status'],
                'time_last_status' => $order['time_last_status'],
                'contact_name_order' => $order['contact_name_order'],
                'contact_order' => $order['contact_order'],                
                'adress_order' => $order['adress_order'], 
                'montazh_order' => $order['montazh_order'],                
                'date_montazh' => $order['date_montazh'],
                'account' => $order['account'],
                'today_date_order' => $order['today_date_order'],  
            ]; 
            
            $value_order_json = $value_order;
        }      
    } 
    return json_encode($value_order_json);
}

echo get_Order();