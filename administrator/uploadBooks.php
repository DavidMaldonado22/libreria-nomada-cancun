<?php
require_once('connection.php');

$isbn = $_POST['isbn'];
$title = $_POST['title'];
$author = $_POST['author'];
$price = $_POST['price'];
$picture = $_POST['urlImage'];
$available = 1;

$sql = "INSERT INTO libros (isbn, title, author, price, picture, available) VALUES ('$isbn','$title', '$author', '$price', '$picture', '$available')";

if(mysqli_query($link, $sql))
{
    echo 'Datos insertados correctamente.';
}
else
{
    echo 'Error al insertar datos' . mysqli_error($link);
}
?>