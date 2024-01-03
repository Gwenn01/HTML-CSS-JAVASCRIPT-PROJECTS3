<?php 
$host = 'localhost';
$name = 'gwen';
$password = '123';
$database = "accounts";

$con = mysqli_connect($host, $name, $password, $database);
if(mysqli_connect_error()){
    echo mysqli_connect_error();
};
?>