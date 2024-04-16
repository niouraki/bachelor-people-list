<?php
include 'dbconnection.php';

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

// solves issue with cache showing old data after update
header("Cache-Control: no-cache, must-revalidate");

try {
    if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST['submit'])) {
        // update the users
        $id = $_POST['id']; //the ID of the person we wanted to edit from the hidden form field

        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $occupation = $_POST['occupation'];
        $skill = $_POST['skill'];
        $car = $_POST['car'];
        $education = $_POST['education'];

        $sqlQuery = "UPDATE t_people SET first_name=?, last_name=?, email=?, gender=?, occupation=?, skill=?, car=?, education=? WHERE id=?";
        $sql = $connection->prepare($sqlQuery);
        $sql -> bind_param('ssssssssi', $firstname, $lastname, $email, $gender, $occupation, $skill, $car, $education, $id);

        $sql -> execute(); // execute query

        header("Location: index.php");

    } else {
        $id=$_GET['id'];

        // get the data to fill the form
        $sqlQuery = "SELECT * FROM t_people WHERE id=?";
        $sql = $connection->prepare($sqlQuery);
        $sql -> bind_param('i', $id); // "i" is a bind parameter indicating an integer is passed
        $sql -> execute(); // execute query
        $result = $sql->get_result();
        $rowData = mysqli_fetch_assoc($result);

        $firstname = $rowData['first_name'];
        $lastname = $rowData['last_name'];
        $email = $rowData['email'];
        $gender = $rowData['gender'];
        $occupation = $rowData['occupation'];
        $skill = $rowData['skill'];
        $car = $rowData['car'];
        $education = $rowData['education'];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

mysqli_close($connection);
?>