<?php
//подключение к базе
class StaticConnection
{    
    private static $host='127.0.0.1';
    private static $db = 'db_admin';
    private static $username = 'root';
    private static $password = 'root';
     
    public static function getConnection_db_admin (): ?PDO
    { 
        $connect = null;        

        $con = "mysql:dbname=".self::$db.";host=".self::$host.";port=3306";
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