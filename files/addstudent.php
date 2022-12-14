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

</div>
<div align="center" style="margin-top:20px">
    <button id="studentmanual" class="btn btn-success btn-lg">TAMBAH PELAJAR</button>
</div>

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content" style="margin-top: -60px">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Tambah Pelajar</h2>
        </div>
        <div class="modal-body" id="EnterStudent">
            <!--Admin Login Form-->
            <div style="display:none" id="addstudentForm">
                <form action="addstudentFormValidation.php" method="POST">
                    <div class="form-group">
                        <label for="studentname">Nama Pelajar</label>
                        <input type="text" class="form-control" id="studentname" name="TN"
                               placeholder="nama pelajar ...">
                    </div>
                    <div class="form-group">
                        <label for="TF">No Ndp</label>
                        <input type="text" class="form-control" id="nondp" name="TF" placeholder="no ndp ...">
                    </div>
                    <div class="form-group">
                        <label for="TF">No Ic</label>
                        <input type="text" class="form-control" id="noic" name="AL" placeholder="no ic..">
                    </div>
                    <div class="form-group">
                        <label for="designation">Kelas</label>

                        <select class="form-control" id="designation" name="TD">
                            <option selected disabled>Select</option>
                            <option value="TPP">TPP</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="studentcontactnumber">No.Telefon</label>
                        <input type="text" class="form-control" id="studentcontactnumber" name="TP"
                               placeholder="+60 ...">
                    </div>

                    <div class="form-group">
                        <label for="studentemailid">Email</label>
                        <input type="text" class="form-control" id="studentemailid" name="TE"
                               placeholder="@gmail.com ...">
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
    var addstudentBtn = document.getElementById("studentmanual");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("addstudentForm");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal

    addstudentBtn.onclick = function () {
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

    <script> 
           function updateHandlers() {
            var table = document.getElementById("studenttable");
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
                                window.location.href = "updatestudent.php?student=" + id;

                            }

                        };
                    };
                currentRow.cells[6].onclick = createUpdateHandler(currentRow);
            }
        }


        function deleteHandlers() {
            var table = document.getElementById("studenttable");
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
                                window.location.href = "deletestudent.php?student=" + id;

                            }

                        };
                    };
                currentRow.cells[7].onclick = createDeleteHandler(currentRow);
            }
        }
        


    </script>

    <table id=studenttable style="margin-left: 80px">
        <caption><strong>Maklumat Pelajar </strong></caption>
        <tr>
            <th width="130">No Ndp</th>
            <th width=290>Nama</th>
            <th width=50>No Ic</th>
            <th width="190">Kelas</th>
            <th width="190">No Telefon</th>
            <th width="290">Email ID</th>
            <th width="40">Update</th> <th width="40">Action</th>
        </tr>
        <tbody>
        <?php
        include 'connection.php';
        $q = mysqli_query(mysqli_connect("localhost", "root", "", "perhimpunan"),
            "SELECT * FROM student ORDER BY no_ndp ASC");

        while ($row = mysqli_fetch_assoc($q)) {
            echo"<tr>
                    <td>{$row['no_ndp']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['no_ic']}</td>
                    <td>{$row['kelas']}</td>
                    <td>{$row['no_telefon']}</td>
                    <td>{$row['email']}</td>
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
