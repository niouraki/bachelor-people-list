<?php
$connection = mysqli_connect("localhost", "root", "", "t_people");

if(mysqli_connect_errno()){
    echo "Connection Failed: " . mysqli_connect_error();
}
?>