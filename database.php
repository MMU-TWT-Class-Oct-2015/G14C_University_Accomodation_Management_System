<?php
session_start();
$host="localhost";
$user="root";
$password="";
$database = "twt06";
$connect = mysql_connect($host,$user,$password);

mysql_select_db($database, $connect)

?>