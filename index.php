<?php
session_start();
include 'config.php';
include 'functions.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Other common header/footer code
?>
<html>
<head>
    <title>Task Manager</title>
</head>
<body>
    <h1>Welcome to the Task Manager</h1>
    <?php include 'navigation.php'; ?>
