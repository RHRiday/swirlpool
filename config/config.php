<?php
ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("Asia/Dhaka");

//Get Heroku Remote connection information
$remotedb_url = parse_url(getenv("REMOTE_DB"));
$remotedb_server = $remotedb_url["host"];
$remotedb_username = $remotedb_url["user"];
$remotedb_password = $remotedb_url["pass"];
$remotedb_db = substr($remotedb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$con = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);  //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>