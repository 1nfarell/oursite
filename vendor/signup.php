<?php
//регистрация
session_start();
require_once 'StaticConnection.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

$db = StaticConnection::getConnection();
$sth = $db->prepare("SELECT * FROM users WHERE login = :login");
$sth->bindParam(':login', $login, PDO::PARAM_STR);
$sth->execute();

if ($sth->rowCount() > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Такой логин уже существует",
        "fields" => ['login']
    ];

    echo json_encode($response);
    die();
} 

$error_fields = [];

if ($login === '') {
    $error_fields[] = 'login';
}

if ($password === '') {
    $error_fields[] = 'password';
}

if ($full_name === '') {
    $error_fields[] = 'full_name';
}

if ($password_confirm === '') {
    $error_fields[] = 'password_confirm';
}


if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность полей",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}

if ($password === $password_confirm) {

        $password = md5($password);

        $sth = $db->prepare("INSERT INTO users (id, full_name, login, password) VALUES (default, '$full_name', '$login', '$password')");
        $sth->execute();

    $response = [
        "status" => true,
        "message" => "Регистрация прошла успешно!",
    ];
    echo json_encode($response);


} else {
    $response = [
        "status" => false,
        "message" => "Пароли не совпадают",
    ];
    echo json_encode($response);
}

?>
