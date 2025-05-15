<?php  

$sName = "localhost";
$uName = "root";
$pass  = "";
$db_name = "task_management_db";
//task_management_bd

try {
	$conn = new PDO("mysql:host=$sName;port=3307;dbname=$db_name", $uName, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Connection failed: ". $e->getMessage();
	exit;
}