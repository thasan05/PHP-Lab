<?php

session_start();

// Get data from the form
$name = $_POST['student_name'];
$id = $_POST['student_id'];
$email = $_POST['email'];
$department = $_POST['department'];

// Store Name and ID in Session
$_SESSION['student_name'] = $name;
$_SESSION['student_id'] = $id;

// Store Name in Cookie for 1 hour
setcookie("student_name", $name, time() + 3600);

// Go to dashboard
header("Location: dashboard.php");
exit();

?>