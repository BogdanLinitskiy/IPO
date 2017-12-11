<?php

try{
$pdoDB = new PDO('mysql:host=localhost;dbname=workers','jokes_member','123');
$pdoDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdoDB->exec("SET NAMES 'utf8' ");
}catch (PDOException $e){
die('No connection with DB'."<br>".$e->getMessage());
}
