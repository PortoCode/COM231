<?php
include_once "database.php";

header('Content-type: text/html; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');

$query = new Database();

$name =  $_REQUEST["name"];
//$pass =  str_replace("'","",$_REQUEST["pass"]);
$pass = $_REQUEST["pass"];

$sql = "select * from usuarios where login = '".$name."' and senha = '".$pass."'";

$result =  $query->select($sql);

if($result == false) {
	echo 'login invalido';
}else {
	var_dump(pg_fetch_all($result));

	echo 'tem dado';
}

?>