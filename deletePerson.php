<?php
include 'dbconnection.php';

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

// solves issue with cache showing old values after deletion
header("Cache-Control: no-cache, must-revalidate");

$id=$_GET['id'];

try {
    $sqlQuery = "DELETE FROM t_people WHERE id=?";
    $sql = $connection->prepare($sqlQuery);
    $sql -> bind_param('i', $id); // "i" is a bind parameter indicating an integer is passed
    $sql -> execute(); // execute query

    header("Location: index.php");
} catch (Exception $e) {
    //TO DO show alert with msg
   echo $e->getMessage();
}

mysqli_close($connection);
?>