<?php
$host="localhost";
$user="root";
$pass="";
$db="login";
$connect=new mysqli($host,$user,$pass,$db);
if($conn->connection_error){
    echo   "Failed to connect DB".$conn->connect_error;
}





