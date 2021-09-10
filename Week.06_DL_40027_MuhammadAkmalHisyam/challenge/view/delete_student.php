<?php
include_once '../include/config.php';
$id = $_GET['id'];
$query = "DELETE FROM students WHERE id='$id'";
$result = $conn->query($query);
header("Location:students.php");
