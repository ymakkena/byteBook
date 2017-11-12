<?php
$host = "host=ec2-184-73-222-90.compute-1.amazonaws.com";
 $database = "dbname=de18hr0v0cmnqo";
 $user = "user=jdvrhwptbfgcgv";
 $port = "port=5432";
 $password = "password=plU3zEqHm6Dj4Krujtl1k8yNzy";
 $db = pg_connect($host." ".$database. " " . $user. " ". $port. " " . $password);

$NAME = $_POST["firstName"];
$USER = $_POST["newUsername"];
$PASSWORD = $_POST["newPassword"];

$query = <<<EOF
CREATE TABLE IF NOT EXISTS ACCOUNTS_DATA(
	NAME varchar(255),
	USER varchar(255),
	PASSWORD varchar(255)
	);
EOF;

$val = pg_query($db, $query);

$query2 = <<<EOF
INSERT INTO ACCOUNTS_DATA(NAME, USER, PASSWORD)
VALUES("$NAME", "$USER", "$PASSWORD");
EOF;

$val = pg_query($db, $query2);

if(!val)
	echo "ERROR";

else 
	echo "fine";

}
?>