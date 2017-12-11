<?php

session_start();

require_once 'DB/connect_db.php';

try{
    $sql = "SELECT * FROM login_info";
    $result = $pdoDB->query($sql);
    $resultArray = $result->fetchAll();
} catch(PDOException $e){
    die("Error while extracting workers data".$e->getMessage());
}

if(!empty($_POST['login'])) {
    foreach ($resultArray as $login) {
        if (($_POST['login'] == $login['login']) && ($_POST['password'] == $login['password'])) {
            if($_POST['login']=='admin'){
                $_SESSION['logged_user'] = $resultArray['login'];
                header("Location:admin_panel.php");
                die();
            }
            else{
                $_SESSION['logged_user'] = $resultArray['login'];
                header("Location:user_panel.php");
                die();
            }
        }
        else{
            $_SESSION['wrong_user'] = $_POST['login'];
            header("Location:index.php?login_error");
        }
    }
}
else{
    echo "<script>alert('You don\'t set a login or password');document.location='index.php'</script>";
}

