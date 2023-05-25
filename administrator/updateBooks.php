<?php
require_once('connection.php');
$isbn = $_POST['isbn'];
$status = $_POST['state'];


$sql = "UPDATE libros SET available =  $status WHERE isbn = $isbn";
$result = mysqli_query($link, $sql) or die (mysqli_error($link));

?>