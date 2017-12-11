<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if(isset($_SESSION['wrong_user'])&&isset($_GET['login_error'])){
    echo '<script>alert("wrong password or login");</script>';
    session_unset($_SESSION['wrong_user']);
}
if(isset($_SESSION['logged_user'])){
    header('Location:admin_panel.php');
}
require_once 'DB/connect_db.php';
?>
<!DOCTYPE  html>
<html>
	<head>
		<title>Login form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
    <h3 align="center">Please login to your account</h3>
		<form action="auth_check.php" style="text-align:center" method="post">
            <label for="login">Login</label><br>
            <input type="text" name="login" id="login"><br>
            <label for = "password">Password</label><br>
            <input type="password" name="password" id="password"><br>
            <button type="submit">Enter</button>
		</form>
	</body>
</html>
