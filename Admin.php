<?php
    include "connection.php";
    if (isset($_POST["import"])) {
        mysqli_query($connection,"DELETE FROM `std_detail`");
        $fileName = $_FILES["file"]["tmp_name"];
        if ($_FILES["file"]["size"] > 0) {
            $file = fopen($fileName, "r");
            while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
                $sqlInsert = "INSERT into std_detail (serial,std_name,std_email,std_number,std_id,std_regno,std_rollno)
                    values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "','" . $column[6] . "')";
                $sqlInsert1 = "INSERT into receipt (serial,std_rollno) values('" . $column[0] . "','" . $column[6] . "')";
                $result = mysqli_query($connection, $sqlInsert);
                $result1 = mysqli_query($connection, $sqlInsert1);
                if (! empty($result)) {
                    $type = "success";
                    $message = "<span style='color: lightgreen;'>CSV Data Imported into the Database</span>";
                }
                else {
                    $type = "error";
                    $message = "<span style='color: red;'>Problem in Importing CSV Data</span>";
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="jquery-3.2.1.min.js"></script>
    <title>Admin Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="Search.css">
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="Receipt.php" class="navbar-brand"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> IMAGE</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-nav-demo">
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="AdminLogin.php">Admin <i class="fas fa-user"></i></a></li>
			      <li><a href="Logout.php">Logout <i class="fas fa-sign-out-alt"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="container">
        <div class="jumbotron" style="background: none; color: white;">
            <h1 align="center">ABC WXYZ Engineering College</h1>
            <h4 align="center">Technocity, Panchpota, Garia, Kolkata - 700152, Phone: 1234567890</h4>
        </div>
    </div>
        <div class="col-sm-5 col-sm-offset-1">
            <form action="VerifyReceipt.php" method="POST">
                    <div class="input-field thumbnail">
                        <input id="rollno" name="rollno" type="text" required maxlength="11" minlength="11" data-length="11"  class="form-contol input">
                        <label for="rollno">Enter MAKAUT Roll Number</label>
                    </div>
                    <center><button class="btn btn3">Search <i class="fas fa-search"></i></button></center>
                    <center><a href="AdminChange.php">Click here to change Admin username and/or password</a></center>
            </form>
        </div>
        <div class="col-sm-5 col-sm-offset-1">
            <div style="color: yellow;" id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
            <form class="form-inline" style="padding-top: 45px" action="" method="post" name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
                <div class="form-group">
                    <h2 style="color: white; display: inline;">Import CSV file into Database:</h2>
                    <label class="thumbnail sr-only">Choose CSV File:</label>
                    <div class="input-group">
                        <input type="file" name="file" id="file" accept=".csv" style="color: white;">
                    </div>
                    <button type="submit" id="submit" name="import" class="btn btn1">Import <i class="fas fa-file-upload"></i></button>
                </div>
            </form>
        </div>
            <div class="container">
<?php
    $sqlSelect = "SELECT * FROM std_detail ORDER BY serial";
    $result = mysqli_query($connection, $sqlSelect);
    if (mysqli_num_rows($result) > 0) {
?>
                <div class="table-responsive" style="overflow-x: visible;">
                    <table id='userTable' style="color: white;" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Serial No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Student ID</th>
                                <th>Regstration No.</th>
                                <th>Roll No.</th>
                            </tr>
                        </thead>
<?php
                while ($row = mysqli_fetch_array($result)) {
?>                
                        <tbody>
                        <tr>
                            <td><?php  echo $row['serial']; ?></td>
                            <td><?php  echo $row['std_name']; ?></td>
                            <td><?php  echo $row['std_email']; ?></td>
                            <td><?php  echo $row['std_number']; ?></td>
                            <td><?php  echo $row['std_id']; ?></td>
                            <td><?php  echo $row['std_regno']; ?></td>
                            <td><?php  echo $row['std_rollno']; ?></td>
                        </tr>
<?php
                }
?>
                        </tbody>
                    </table>
            </div>
    </div>
<?php
    }
?>
</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input#rollno').characterCounter();
        });
        $(function(){
            $('#rollno').keypress(function(e){
                let allow_char = [48,49,50,51,52,53,54,55,56,57];
                if(allow_char.indexOf(e.which) !== -1 );
                else{
                    window.alert("Please enter a digit!");
                    return false;
                }
            });
        });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#frmCSVImport").on("submit", function ()
        {
            $("#response").attr("class", "");
            $("#response").html("");
            var fileType = ".csv";
            var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
            if (!regex.test($("#file").val().toLowerCase())) {
                $("#response").addClass("error");
                $("#response").addClass("display-block");
                $("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");
                return false;
            }
            return true;
        });
    });
    </script>
</body>
</html>