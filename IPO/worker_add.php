<?php
session_start();
require_once 'DB/connect_db.php';
if((!empty($_POST['worker_first_name']))){
    if((!empty($_POST['worker_last_name']))){
        if((!empty($_POST['worker_birth_date']))){
            if((!empty($_POST['worker_phone']))){
                if((!empty($_POST['worker_email']))){
                    if((!empty($_POST['worker_post']))){
                        if((!empty($_POST['worker_salary']))){
                            if((!empty($_POST['worker_experience']))){
                                $worker_first_name = $_POST['worker_first_name'];
                                $worker_last_name = $_POST['worker_last_name'];
                                $worker_birth_date = $_POST['worker_birth_date'];
                                $worker_phone = $_POST['worker_phone'];
                                $worker_email = $_POST['worker_email'];
                                $worker_post = $_POST['worker_post'];
                                $worker_salary = $_POST['worker_salary'];
                                $worker_experience = $_POST['worker_experience'];

                                $sql = 'INSERT INTO worker SET 
                                    first_name = "'.$worker_first_name.'",
                                    last_name = "'.$worker_last_name.'",
                                    birth_date = "'.$worker_birth_date.'",
                                    phone = "'.$worker_phone.'",
                                    email = "'.$worker_email.'",
                                    post = "'.$worker_post.'",
                                    salary = "'.$worker_salary.'",
                                    experience = "'.$worker_experience.'"
                                ';
                                $pdoDB->exec($sql);
                                header("Location:worker_crud.php");
                            }
                        }
                    }
                }
            }
        }
    }
}
