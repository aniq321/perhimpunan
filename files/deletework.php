<?php
include 'connection.php';
$id = $_GET['work'];
$conn = new mysqli("localhost", "root", "", "perhimpunan");
$sql = "DELETE FROM work WHERE tarikh";

if ($conn->query($sql) === TRUE) {
    echo "Work Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
?>