<?php
//подключение к базе
class StaticConnection
{    
    private static $host='127.0.0.1';
    private static $db_order = 'db_order';
    private static $username = 'root';
    private static $password = 'root';
     
    
    public static function getConnection_db_order (): ?PDO
    { 
        $connect = null;        

        $con = "mysql:dbname=".self::$db_order.";host=".self::$host.";port=3306";
        try
        {
            $connect = new PDO($con, self::$username, self::$password);
        }
        catch(Exception $e)
        {  
            var_dump($e);
        }
        return $connect;
    }    
   
}    