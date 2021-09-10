<?php
$host = "localhost";
$username = "root";
$dbname = "northwind";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);

$query = "SELECT * FROM employees";
$result = $conn->query($query);

foreach ($result as $row) {
  $item = array();

  $item['LastName'] = $row[1];
  $item['FirstName'] = $row[2];
  $item['Title'] = $row[3];
  $item['BirthDate'] = $row[5];
  $item['Address'] = $row[7];
  $item['City'] = $row[8];
  $item['HomePhone'] = $row[12];
  $item['Extension'] = $row[13];

  $output[] = $item;
}

$out = array('data' => $output);
echo json_encode($out);

$result = null;
$conn = null;
