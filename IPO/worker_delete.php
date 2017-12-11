<?php

require_once 'DB/connect_db.php';
session_start();
if(!empty($_POST['worker_id'])){
	$id = $_POST['worker_id'];
	$sql = 'DELETE FROM worker
			WHERE id='.$id;
	$pdoDB->exec($sql);
	header("Location:admin_panel.php");
}