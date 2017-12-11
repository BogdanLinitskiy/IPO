<?php

require_once "connect_db.php";

try{
	$sqlQuery =
		'CREATE TABLE worker(
			id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            first_name  VARCHAR(255),
            last_name VARCHAR(255),
            birth_date DATE,
            phone  VARCHAR(255),
            email  VARCHAR(255),
            post  VARCHAR(255),
            salary INT,
            experience  VARCHAR(255)
	) DEFAULT CHARACTER SET utf8 ENGINE=innoDB;
	';
	$pdoDB->exec($sqlQuery);
	$sqlQuery =
	        'CREATE TABLE login_info(
                id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                login VARCHAR(255),
                password VARCHAR(255)
    ) DEFAULT CHARACTER SET utf8 ENGINE=innoDB;
	';
	$pdoDB->exec($sqlQuery);
}
catch(PDOException $e){
	die('Cannot create table worker!<br>'.$e->getMessage());

}
