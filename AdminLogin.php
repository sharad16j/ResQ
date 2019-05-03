<?php
  require 'connection.php';
  session_start();
  if(isset($_POST['loginbtn']))
  {
      $email = $_POST['uname'];
      $pass = $_POST['psw'];

      $query = "SELECT * FROM admin WHERE Username = '$email' AND Password = '$pass'";

      $data = mysqli_query($connection,$query);
      $num = mysqli_num_rows($data);
      if($num != 0 )
      {
          $res = mysqli_fetch_assoc($data);
          $_SESSION['id'] = $res['ID'];

          $_SESSION['loggedIn'] = 'true';
          ?>
          <script>
              window.location.href='Admin.php';
          </script>
          <?php
      }
      else
      {
          echo "<span style='color:red;'>Invalid Credentials</span>";
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS.css">
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
          <ul class="nav navbar-nav">
              <li><a href="Search.php"><h3 style="display: inline;" class="fas fa-search"></h3></a></li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="AdminLogin.php">Admin Login Page <i class="fas fa-user"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="jumbotron" style="background: none; color: white;">
        <h1 align="center">ABC WXYZ Engineering College</h1>
        <h4 align="center">QQQQ, WWWW, YYYY, India - 999999, Phone: 1234567890</h4>
    </div>
    <p style="font-size:55px; color: lightblue ;" align='center'>
    <font face="FreeSerif">Admin L☺gin</font></p>
    <form class="box" method="POST" onsubmit='return login()'>
        <center><div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="thumbnail">
                    <label for="uname" style="font-size: 20px;"><b>Username:</b></label>
                    <input required type="text" onkeypress="return NAME(event,this);" class="validate form-control input" id="uname" name="uname" placeholder="Enter user name..">
                    <div id='adminerr'></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="thumbnail">
                    <label for="psw" style="font-size: 20px;"><b>Password:</b></label>
                    <input required type="password" placeholder="Enter Password..." name="psw" id="pass">
                    <div id='passerr'></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <button class="btn btn4" type="submit"  name="loginbtn" value="LOGIN">Login <i class="fas fa-sign-in-alt"></i></button>
            </div>
        </div>
        </div></center>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <script>
    function login()
    {
        var admin=document.getElementById('admin').value;
        var pass=document.getElementById('pass').value;
        if(admin=='')
        {
            document.getElementById('adminerr').innerHTML="Enter username.";
            return false;
        }
        if(pass=='')
        {
            document.getElementById('passerr').innerHTML="Enter password.";
            return false;
        }
        return true;
    }
  </script>
</body>
</html>