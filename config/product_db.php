<?php

include 'database.php';
$sql = 'SELECT * FROM books';


$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);;
mysqli_close($conn);
var_dump($products);










