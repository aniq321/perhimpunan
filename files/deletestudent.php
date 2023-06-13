<?php
include 'connection.php';
$id = $_GET['student'];
$conn = new mysqli("localhost", "root", "", "perhimpunan");
$sql = "DELETE FROM student WHERE no_ndp";

if ($conn->query($sql) === TRUE) {
    echo "Student Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
?>

