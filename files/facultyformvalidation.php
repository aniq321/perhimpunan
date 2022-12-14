<?php
session_start();
include 'connection.php';
if (isset($_POST['FN'])) {
    $fac = $_POST['FN'];
} else {
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "perhimpunan"), "SELECT nama FROM student WHERE no_ndp = '$fac'");
if (mysqli_num_rows($q) == 1) {
    $row = mysqli_fetch_assoc($q);
    $_SESSION['loggedin_name'] = $row['nama'];
    $_SESSION['loggedin_id'] = $fac;
    header("Location:facultypage.php");
} 
if (mysqli_num_rows($q) == 1) {
    $row = mysqli_fetch_assoc($q);
    echo 'welcome ' . $row['name'];
} else {
    $message = "Invalid No Ndp.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
?>