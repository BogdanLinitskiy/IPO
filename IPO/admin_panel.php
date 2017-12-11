<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once 'DB/connect_db.php';

try{
    $sql = "SELECT * FROM worker";
    $result = $pdoDB->query($sql);
    $resultArray = $result->fetchAll();
} catch(PDOException $e){
    die("Error while extracting workers data".$e->getMessage());
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style>
        body{
            padding:15px;  }
        div{  padding:20px;  }
        table,td,th,tr{
            border: 2px solid black;
            border-collapse: collapse;
        }
        button a{
            color:black;
        }
        tr a{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php require_once 'workers_info_admin.php';?>
    <div style="text-align:center">
        <button><a href="worker_crud.php">Workers accounting</a></button>
        <button><a href="logout.php">Logout</a></button>
    </div>
</body>
</html>

