<?php
include 'connection.php';
$student = $_GET["work"];
if (isset($_POST["update"])) {
    $tarikh = $_POST['tarikh'];
    $doa = $_POST['bacaan_doa'];
    $buku = $_POST['bacaanbuku_tatatertib'];
    $senaman = $_POST['senaman_ringkas'];
    $speaking = $_POST['public_speaking'];
    $result = mysqli_query(
        mysqli_connect("localhost", "root", "", "perhimpunan"),
        "UPDATE work SET
     tarikh ='$tarikh',bacaan_doa='$doa',bacaanbuku_tatatertib='$buku', senaman_ringkas='$senaman',public_speaking='$speaking' 
     WHERE tarikh ='$work'"
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
$result = mysqli_query(mysqli_connect("localhost", "root", "", "perhimpunan"), "SELECT * FROM work WHERE tarikh='$work'");
 $res = mysqli_fetch_array($result); 
    $tarikh = $res["tarikh"];
    $doa = $res["bacaan_doa"];
    $buku = $res["bacaanbuku_tatatertib"];
    $senaman = $res["senaman_ringkas"];
    $speaking = $res["public_speaking"];
?>
<form method="post">
    <div class="form-group">
        <label for="studentname">Nama Pelajar</label>
        <input type="text" class="form-control" id="studentname" name="tarikh"
        placeholder="nama pelajar ..." value="<?php echo $tarikh; ?>">
    </div>
    <div class="form-group">
     <label for="TF">No Ic</label>
    <input type="text" class="form-control"  name="bacaan_doa" placeholder="no ic.." value="<?php echo $doa; ?>">
     </div>
    <div class="form-group">
       <label for="studentcontactnumber">No.Telefon</label>
        <input type="text" class="form-control"  name="bacaanbuku_tatatertib"
         placeholder="+60 ..." value="<?php echo $buku; ?>">
    </div>
    <div class="form-group">
        <label for="studentemailid">Email</label>
            <input type="text" class="form-control" name="senaman_ringkas"
            placeholder="@gmail.com ..." value="<?php echo $senaman; ?>">
    </div>
    <div class="form-group">
        <label for="studentemailid">Email</label>
            <input type="text" class="form-control" name="public_speaking"
            placeholder="@gmail.com ..." value="<?php echo $speaking; ?>">
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
