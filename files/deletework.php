<?php
include 'connection.php';
$id = $_GET['work'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "perhimpunan"),
    "DELETE FROM work WHERE tarikh = '$id' ");
$drop = "DROP TABLE " . $id;

$q = mysqli_query(mysqli_connect("localhost", "root", "", "perhimpunan"), $drop);
if ($drop) {

    header("Location:addwork.php");

} else {
    echo 'Error';
}
?>