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
	<title>Document</title>
</head>
<body>
	<p>First name: <?=$result_object->first_name?></p>
	<p>Last name: <?=$result_object->last_name?></p>
    <p>Birth date: <?=$result_object->birth_date?></p>
    <p>Phone: <?=$result_object->phone?></p>
    <p>Email: <?=$result_object->email?></p>
    <p>Post: <?=$result_object->post?></p>
    <p>Salary: <?=$result_object->salary?></p>
    <p>Experience: <?=$result_object->experience?></p>

    <a href="admin_panel.php">Go back</a>
</body>
</html>
