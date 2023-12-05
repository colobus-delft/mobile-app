<?php
$db_host = 'localhost';
$db_user = 'username';
$db_pass = 'password';
$db_name = 'task_manager';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
