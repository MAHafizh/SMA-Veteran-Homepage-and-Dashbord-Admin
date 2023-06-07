<?php
$host="localhost";
$username="root";
$password="";
$database="sma_veteran";
$mysqli = new mysqli($host, $username, $password, $database);

if($mysqli->connect_errno)
{
    echo "Failed Connect To MySQL: ".$mysqli->connect_error;
    exit();
}else
{
    echo "";
}
?>