<?php
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>CRUD</title>
    <style>
        body{
            padding:15px;  }
        div{  padding:20px;  }
        table,td,th,tr{
            border: 2px solid black;
            border-collapse: collapse;
        }
        button a{  color:black;  }
        tr a,div{text-align: center;}
    </style>
</head>
<body>
<div>
    <table align="center">
        <tr>
           <th>Last name</th>
            <th>Edit Information</th>
            <th>Delete worker</th>
        </tr>
        <?php foreach($resultArray as $worker):?>
            <tr>
                <td><?=$worker['last_name']?></td>
                <td><a href="worker_edit.php?id=<?=$worker['id']?>">Edit</a></td>
                <td><form action="worker_delete.php" method="post">
                        <input type ="hidden" name="worker_id" value ="<?=$worker['id']?>">
                        <button type ="submit">DELETE</button>
                    </form>
                </td>
            </tr>
        <?endforeach;?>
    </table>
    <div style="text-align:center">
        <button><a href="worker_add_form.php">Add new worker</a></button>
        <button><a href="admin_panel.php">Go back</a></button>
    </div>
</div>
</body>
</html>