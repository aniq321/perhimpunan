<?php
include 'connection.php';
if (isset($_POST['TN']) && isset($_POST['TF']) && isset($_POST['AL']) && isset($_POST['TP']) && isset($_POST['TE'])) {
    $tarikh = $_POST['TN'];
    $doa = $_POST['TF'];
    $buku = $_POST['AL'];
    $senaman = $_POST['TP'];
    $speaking = $_POST['TE'];
    $message = "nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "invalid";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "perhimpunan"), "INSERT INTO work VALUES ('$tarikh','$doa','$buku','$senaman','$speaking')");
$sql = "CREATE TABLE " . $tarikh . " (
day VARCHAR(10) PRIMARY KEY, 
period1 VARCHAR(30),
period2 VARCHAR(30),
period3 VARCHAR(30),
period4 VARCHAR(30),
period5 VARCHAR(30),
period6 VARCHAR(30)
)";
mysqli_query(mysqli_connect("localhost", "root", "", "perhimpunan"), $sql);
$days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
for ($i = 0; $i < 6; $i++) {
    $day = $days[$i];
    $sql = "INSERT into " . $facno . " VALUES('$day','','','','','','')";
    mysqli_query(mysqli_connect("localhost", "root", "", "perhimpunan"), $sql);
}
if ($q) {
    $message = "Teavher added.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addstudent.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    // header("Location:index.php");

}

?>