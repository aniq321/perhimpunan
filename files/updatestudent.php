<?php
include 'connection.php';
$student = $_GET["student"];
if (isset($_POST["update"])) {
    $name = $_POST['nama'];
    $noic = $_POST['no_ic'];
    $class = $_POST['kelas'];
    $nofon = $_POST['no_telefon'];
    $email = $_POST['email'];
    $result = mysqli_query(
        mysqli_connect("localhost", "root", "", "perhimpunan"),
        "UPDATE student SET
     nama ='$name',no_ic='$noic',kelas='$class', no_telefon='$nofon',email='$email' 
     WHERE no_ndp ='$student'"
    );if ($result) {echo "Berjaya";} else {echo "tidak Berjaya";}}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>SISTEM JADUAL PERHIMPUNAN PAGI TPP</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>

</head>
<body>

<?php
$result = mysqli_query(mysqli_connect("localhost", "root", "", "perhimpunan"), "SELECT * FROM student WHERE no_ndp='$student'");
 $res = mysqli_fetch_array($result); 
    $name = $res["nama"];
    $noic = $res["no_ic"];
    $class = $res["kelas"];
    $nofon = $res["no_telefon"];
    $email = $res["email"];
?>
<form method="post">
    <div class="form-group">
        <label for="studentname">Nama Pelajar</label>
        <input type="text" class="form-control" id="studentname" name="nama"
        placeholder="nama pelajar ..." value="<?php echo $name; ?>">
    </div>
    <div class="form-group">
     <label for="TF">No Ic</label>
    <input type="text" class="form-control"  name="no_ic" placeholder="no ic.." value="<?php echo $noic; ?>">
     </div>
    <div class="form-group">
    <label for="designation">Kelas</label>
        <select class="form-control" name="kelas" required>
        <option disabled selected value> -- select an option -- </option>
            <option value="TPP">TPP</option>
        </select>
    </div>
    <div class="form-group">
       <label for="studentcontactnumber">No.Telefon</label>
        <input type="text" class="form-control"  name="no_telefon"
         placeholder="+60 ..." value="<?php echo $nofon; ?>">
    </div>

    <div class="form-group">
        <label for="studentemailid">Email</label>
            <input type="text" class="form-control" name="email"
            placeholder="@gmail.com ..." value="<?php echo $email; ?>">
    </div>
    <div>
    <button type="submit" name="update"  class="btn btn-default" name="update" >update</button>
    </div>
    </form>

<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>
<!--  Flexslider Scripts -->
<script src="assets/js/jquery.flexslider.js"></script>
<!--  Scrolling Reveal Script -->
<script src="assets/js/scrollReveal.js"></script>
<!--  Scroll Scripts -->
<script src="assets/js/jquery.easing.min.js"></script>
<!--  Custom Scripts -->
<script src="assets/js/custom.js"></script>
</div>
</body>
</html>
