<?php
$servername="localhost";
$username="pedtacuser";
$password="9802874";
$database="pedtacdb";

//建立連線
$con=new mysqli($server,$username,$password,$database);
if($con->connect_error){
    die("資料庫連線失敗：".$con->connect_error);
}
mysql_query("SET NAMES UTF8");
header('Access-Control-Allow-Origin: *');
?>