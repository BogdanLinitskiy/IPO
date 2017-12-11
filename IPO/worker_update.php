<?php

require_once 'DB/connect_db.php';
session_start();
if(!empty($_POST['worker_id'])){
    $id = $_POST['worker_id'];
    $first_name = $_POST['worker_first_name'];
    $last_name = $_POST['worker_last_name'];
    $birth_date = $_POST['worker_birth_date'];
    $phone = $_POST['worker_phone'];
    $email = $_POST['worker_email'];
    $post = $_POST['worker_post'];
    $salary = $_POST['worker_salary'];
    $experience = $_POST['worker_experience'];
    $sql = 'UPDATE worker
 			SET first_name ="'.$first_name.'",
 			    last_name ="'.$last_name.'",
 			    birth_date ="'.$birth_date.'",
 			    phone ="'.$phone.'",
 			    email ="'.$email.'",
 			    post ="'.$post.'",
 			    salary ="'.$salary.'",
 			    experience ="'.$experience.'"
			WHERE id    ='.$id;
    $pdoDB->exec($sql);
    header("Location:worker_crud.php");
}
