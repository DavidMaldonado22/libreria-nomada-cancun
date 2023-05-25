<?php
require_once('connection.php');

$sql = "SELECT * FROM libros";

$result = mysqli_query($link, $sql) or die (mysqli_error($link));

if (mysqli_num_rows($result) > 0)
{
    $data = array();

    while($row = mysqli_fetch_assoc($result))
    {
    $data[] = $row;
    }
    $json = json_encode($data);

    echo $json;
}





?>