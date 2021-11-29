<?php 

$host= 'localhost';
$db='attendance_db';
$user='root';
$pass='';
$charset ='utf8mb4';

$dsn= "mysql:host=$host;dbname=$db;charset=$charset";

try{
    $pdo= new PDO($dsn,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'hello database';
}catch(PDOException $e){
       throw new PDOException($e ->getMessage());

}

require_once 'crud.php';
$crud = new crud($pdo)



?>