<?php
include 'connection.php';
$id = $_GET['student'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "perhimpunan"),
    "DELETE FROM student WHERE no_ndp = '$id' ");
$drop = "DROP TABLE " . $id;

$q = mysqli_query(mysqli_connect("localhost", "root", "", "perhimpunan"), $drop);
if ($drop) {

    header("Location:addstudent.php");

} else {
    echo 'Error';
}
?>

