<?php
$host = "host=ec2-184-73-222-90.compute-1.amazonaws.com";
 $database = "dbname=de18hr0v0cmnqo";
 $user = "user=jdvrhwptbfgcgv";
 $port = "port=5432";
 $password = "password=plU3zEqHm6Dj4Krujtl1k8yNzy";
 $db = pg_connect($host." ".$database. " " . $user. " ". $port. " " . $password);
 
$check = pg_query($db, "SELECT USER FROM ACCOUNTS_DATA");
$q = $_REQUEST['query'];
while ($row = pg_fetch_row($check)) {
if(strcasecmp($q, $row[0]) == 0){
	echo "clear";
}
else{
	echo "exists";
}
}
?>