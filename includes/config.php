<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'nrrt';

$db = new mysqli($host,$user,$pass,$db_name);
if($db->connect_errno){
echo" Failed to connect!" . $mysqli->connect_error;
}