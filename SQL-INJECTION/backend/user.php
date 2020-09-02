<?php
include_once "database.php";

header('Content-type: text/html; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');

$query = new Database();

$name =  $_REQUEST["name"];
$pass = $_REQUEST["pass"];

// Obtendo a senha dessa forma evita-se SQL Injection
//$pass =  str_replace("'","",$_REQUEST["pass"]);

$sql = "select * from usuarios where login = '".$name."' and senha = '".$pass."'";

$result =  $query->select($sql);

$rs = pg_fetch_assoc($result);

if(!$rs) {
	echo 'user does not exist';
}

$data = pg_fetch_all($result);
if(!$data == false) {
	var_dump(pg_fetch_all($result));
} 

?>