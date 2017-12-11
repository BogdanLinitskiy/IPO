<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add worker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style>
        body{
            padding:20px;
        }
        a{
            color:black;
        }
    </style>
</head>
<body>
<h2> All fields must be filled</h2>
    <form action="worker_add.php" method="post">
        <label for="first_name">First name</label><br>
        <input name="worker_first_name" id="first_name"><br>

        <label for="last name">Last name</label><br>
        <input name="worker_last_name" id="last_name"><br>

        <label for="birth_date">Birth date</label><br>
        <input name="worker_birth_date" id="birth_date"><br>

        <label for="phone">Phone</label><br>
        <input name="worker_phone" id="phone"><br>

        <label for="email">Email</label><br>
        <input name="worker_email" id="email"><br>

        <label for="post">Post</label><br>
        <input name="worker_post" id="post"><br>

        <label for="salary">Salary</label><br>
        <input name="worker_salary" id="salary"><br>

        <label for="experience">Experience</label><br>
        <input name="worker_experience" id="experience"><br>

        <button type="submit">Save</button>
        <button><a href="worker_crud.php">Cancel</a></button>
    </form>
</body>
</html>