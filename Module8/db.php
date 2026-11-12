<?php

$host = "localhost";
$db ="db";
$user = "root";
$pass = "";


try{
    $pdo = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    $sql = "CREATE TABLE user (id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    username VARCHAR( 30 ) NOT NULL ,
    password VARCHAR( 50 ) NOT NULL";

    $pdo -> exec($sql);

    echo "Table was created Successfully"
}catch(Exception $e){
    echo "Erorr- Table Not Created:" .$e->getMessage();
}





?>