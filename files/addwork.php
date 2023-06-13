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

<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">MENU
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href=addstudent.php>TAMBAH PELAJAR</a>
                        </li>
                         <li>
                            <a href=addwork.php>JADUAL PELAJAR</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">LOGOUT</a></li>
            </ul>

        </div>
    </div>
</div>
<!--NAVBAR SECTION END-->
<br>
<br>

<div align="center" style="margin-top:20px">
    <button id="workmanual" class="btn btn-success btn-lg">TAMBAH JADUAL</button>
</div>

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content" style="margin-top: -60px">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Tambah Jadual</h2>
        </div>
        <div class="modal-body" id="EnterWork">
            <!--Admin Login Form-->
            <div style="display:none" id="addworkForm">
                <form action="addworkFormValidation.php" method="POST">
                    <div class="form-group">
                        <label for="tarikh">Tarikh (Bertugas)</label>
                        <input type="text" class="form-control" id="tarikh" name="TN"
                               placeholder=" ...">
                    </div>
                    <div class="form-group">
                        <label for="TF">Bacaan Doa</label>
                        <input type="text" class="form-control" id="bacadoa" name="TF" placeholder=" ...">
                    </div>
                    <div class="form-group">
                        <label for="TF">Bacaan Buku Tatatertib</label>
                        <input type="text" class="form-control" id="bacabuku" name="AL" placeholder=" ...">
                    </div>
                    <div class="form-group">
                        <label for="teachercontactnumber">Senaman Ringkas</label>
                        <input type="text" class="form-control" id="senaman" name="TP"
                               placeholder=" ...">
                    </div>

                    <div class="form-group">
                        <label for="teacheremailid">Public Speaking</label>
                        <input type="text" class="form-control" id="speaking" name="TE"
                               placeholder=" ...">
                    </div>
                    <div align="right">
                        <input type="submit" class="btn btn-default" name="ADD" value="ADD">
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
        </div>
    </div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var addteacherBtn = document.getElementById("workmanual");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("addworkForm");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal

    addteacherBtn.onclick = function () {
        modal.style.display = "block";
        //heading.innerHTML = "Faculty Login";
        facultyForm.style.display = "block";
        //adminForm.style.display = "none";


    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        //adminForm.style.display = "none";
        facultyForm.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script> 
           function updateHandlers() {
            var table = document.getElementById("worktable");
            var rows = table.getElementsByTagName("tr");
            for (i = 0; i < rows.length; i++) {
                var currentRow = table.rows[i];
                var b = currentRow.getElementsByTagName("td")[0];
                var createUpdateHandler =
                    function (row) {
                        return function () {
                            var cell = row.getElementsByTagName("td")[0];
                            var id = cell.innerHTML;
                            var x;
                            if (confirm("Are You Sure?") == true) {
                                window.location.href = "updatework.php?work=" + id;

                            }

                        };
                    };
                currentRow.cells[5].onclick = createUpdateHandler(currentRow);
            }
        }


        function deleteHandlers() {
            var table = document.getElementById("worktable");
            var rows = table.getElementsByTagName("tr");
            for (i = 0; i < rows.length; i++) {
                var currentRow = table.rows[i];
                var b = currentRow.getElementsByTagName("td")[0];
                var createDeleteHandler =
                    function (row) {
                        return function () {
                            var cell = row.getElementsByTagName("td")[0];
                            var id = cell.innerHTML;
                            var x;
                            if (confirm("Are You Sure?") == true) {
                                window.location.href = "deletework.php?work=" + id;

                            }

                        };
                    };
                currentRow.cells[6].onclick = createDeleteHandler(currentRow);
            }
        }
        


    </script>


<div>
    <br>
    <style>
        table {
            margin-top: 10px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            margin-left: 30px;
            width: 90%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

    <table id=worktable style="margin-left: 80px">
        <caption><strong>Jadual Bertugas </strong></caption>
        <tr>
            <th width="330">Tarikh(Hari)</th>
            <th width=390>Bacaan Doa</th>
            <th width=350>Bacaan Buku Tatatertib</th>
            <th width="390">Senaman Ringkas</th>
            <th width="400">Public Speaking</th>
            <th width="40">Update</th> <th width="40">Action</th>
        </tr>
        <tbody>
        <?php
        include 'connection.php';
        $q = mysqli_query(mysqli_connect("localhost", "root", "", "perhimpunan"),
            "SELECT * FROM work ORDER BY tarikh ASC");

        while ($row = mysqli_fetch_assoc($q)) {
            echo "<tr>
                    <td>{$row['tarikh']}</td>
                    <td>{$row['bacaan_doa']}</td>
                    <td>{$row['bacaanbuku_tatatertib']}</td>
                    <td>{$row['senaman_ringkas']}</td>
                    <td>{$row['public_speaking']}</td>
                   <td>
                   <button>Update</button>
                    </td>
                    <td><button>Delete</button>
                    </td>
                    </tr>\n";
        }
        echo "<script>updateHandlers();</script>";
        echo "<script>deleteHandlers();</script>";
        ?>
        </tbody>
    </table>

</div>

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
</body>
</html>
