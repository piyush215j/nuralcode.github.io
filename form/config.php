<?php
session_start();
$dbHost = 'localhost';
$dbName = 'combilinkDB';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>