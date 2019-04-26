<?php
    $conn = mysqli_connect("localhost", "root", "", "register");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="jquery-3.2.1.min.js"></script>
    <title>Admin Change Page</title>
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
    <div class="col-sm-6 col-md-offset-3">
        <form action="#" method="POST">
                <div class="input-field thumbnail">
                    <input id="uname" name="uname" type="text" class="form-contol input">
                    <label for="uname">Enter new Username</label>
                </div>
                <div class="input-field thumbnail">
                    <input id="pword" name="pword" type="text" class="form-contol input">
                    <label for="pword">Enter new Password</label>
                </div>
                <center><button class="btn btn2">Update <i class="fas fa-user-edit"></i></button></center>
                <center><a href="AdminChange.php">Click here to go to Admin Page</a></center>
        </form>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>