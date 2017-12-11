<?php

require_once 'connect_db.php';

try{
	$sql = 'INSERT INTO worker SET
        first_name = "Ilya",
        last_name = "Medoviy",
        birth_date ="1988-03-08",
        phone = "+380936295810",
        email = "medoviy@gmail.com",
        post = "Senior PHP developer",
        salary = 1300,
        experience = "5 years in Netpick as middle PHP developer";
		';
	$pdoDB->exec($sql);
    $sql = 'INSERT INTO worker SET
        first_name = "Ivan",
        last_name = "Demkin",
        birth_date ="1992-04-30",
        phone = "+380936220810",
        email = "demkin@gmail.com",
        post = "Junior PHP developer",
        salary = 350,
        experience = "0.5 year intership in Luxoft ";
		';
	$pdoDB->exec($sql);
    $sql = 'INSERT INTO worker SET
        first_name = "Andrew",
        last_name = "Anderson",
        birth_date ="1989-11-02",
        phone = "+380936295240",
        email = "anderson89@gmail.com",
        post = "Senior PHP developer",
        salary = 800,
        experience = "2 years in Sigma as junior PHP developer ";
		';
	$pdoDB->exec($sql);
    $sql = 'INSERT INTO login_info SET
          login = "admin",
          password ="admin";
          ';
    $pdoDB->exec($sql);
    $sql = 'INSERT INTO login_info SET
          login = "user1",
          password ="user1";
          ';
    $pdoDB->exec($sql);
    $sql = 'INSERT INTO login_info SET
          login = "user2",
          password ="user2";
          ';
    $pdoDB->exec($sql);
    $sql = 'INSERT INTO login_info SET
          login = "user3",
          password ="user3";
          ';
    $pdoDB->exec($sql);
}catch (PDOException $e){
	die('Cannot add an record<br>'.$e->getMessage());
}
echo 'data was successfully added';
