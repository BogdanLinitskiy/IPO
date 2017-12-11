<?php

require_once 'DB/connect_db.php';
session_start();
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$sql = "SELECT * FROM worker
  			WHERE id =".$id;
	$result = $pdoDB->query($sql);
	$result_object = $result->fetchObject();
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
	<title>Edit worker info</title>
    <style>
        body{
            padding:20px;
        }
    </style>
</head>
<body>
	<h2>Edit information: </h2>
	<form action="worker_update.php" method="post">
        <label for="worker_first_name">First name:</label><br>
        <input type="text" name="worker_first_name" id="worker_first_name" value="<?=$result_object->first_name?>"><br>
        <input type="hidden" name="worker_id" value="<?=$result_object->id?>">

        <label for="worker_last_name">Last name:</label><br>
        <input type="text" name="worker_last_name" id="worker_last_name"  value="<?=$result_object->last_name?>"><br>
        <input type="hidden" name="worker_id" value="<?=$result_object->id?>">


        <label for="worker_birth_date">Birth date:</label><br>
        <input type="text" name="worker_birth_date" id="worker_birth_date" value="<?=$result_object->birth_date?>"><br>
        <input type="hidden" name="worker_id" value="<?=$result_object->id?>">

        <label for="worker_phone">Phone:</label><br>
        <input type="text" name="worker_phone" id="worker_phone" value="<?=$result_object->phone?>"><br>
        <input type="hidden" name="worker_id" value="<?=$result_object->id?>">

        <label for="worker_email">Email:</label><br>
        <input type="text" name="worker_email" id="worker_email" value="<?=$result_object->email?>"><br>
        <input type="hidden" name="worker_id" value="<?=$result_object->email?>">

        <label for="worker_post">Post:</label><br>
        <input type="text" name="worker_post" id="worker_post" value="<?=$result_object->post?>"><br>
        <input type="hidden" name="worker_id" value="<?=$result_object->id?>">

        <label for="worker_salary">Salary:</label><br>
        <input type="text" name="worker_salary" id="worker_salary" value="<?=$result_object->salary?>"><br>
        <input type="hidden" name="worker_id" value="<?=$result_object->id?>">

        <label for="worker_experience">Experience:</label><br>
        <input type="text" name="worker_experience" id="worker_experience" value="<?=$result_object->experience?>"><br>
        <input type="hidden" name="worker_id" value="<?=$result_object->id?>">

        <button type="submit">Update</button>
        <button><a style="color:black;text-decoration:none" href="worker_crud.php">Go back</a></button>
</form>
</body>
</html>