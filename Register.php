<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
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
            <li class="active"><a href="Register.php">Register</a></li>
            <li><a href="Search.php"><h3 style="display: inline;" class="fas fa-search"></h3></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="AdminLogin.php">Admin Login Page <i class="fas fa-user"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="jumbotron" style="background: none; color: white;">
        <h1 align="center">ABC WXYZ Engineering College</h1>
        <h4 align="center">Technocity, Panchpota, Garia, Kolkata - 700152, Phone: 1234567890</h4>
    </div>
    <fieldset>
    <form name="myform" action="registeraction.php" class="box" method="POST">
    <div class="row">
        <div class="col-sm-6">
            <div class="thumbnail">
                <label for="name">Student's Name (BLOCK LETTER):</label>
                <input required type="text" onkeypress="return NAME(event,this);" class="validate form-control input" id="name" name="name" placeholder="Your name..">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="thumbnail">
                <label for="email">Email ID:</label>
                <input required type="email" onkeypress="return EMAIL(event,this);" class="form-control input" id="email" name="email" placeholder="Make sure it is correct, to receive the receipt..">
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="thumbnail">
                <label for="number">Phone Number: </label>
                <input required minlength="10" maxlength="10" data-length="10" type="text" class="form-control input" id="number" name="number" placeholder="Your contact number..">
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="thumbnail">
                <label for="studentID">Student ID Number: </label>
                <input required minlength="10" maxlength="10" data-length="10" type="text" class="form-control input" id="studentID" name="studentID" placeholder="Enter Student ID..">
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="thumbnail">
                <label for="regno">MAKAUT Registration Number: </label>
                <input required minlength="12" maxlength="12" data-length="12" type="text" class="form-control input" id="regno" name="regno" placeholder="Enter MAKAUT registration no...">
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="thumbnail">
                <label for="rollno">MAKAUT Roll Number: </label>
                <input required minlength="11" maxlength="11" data-length="11" type="text" class="form-control input" id="rollno" name="rollno" placeholder="Enter MAKAUT roll no...">
            </div>
        </div>
    </div>
    <center><button class="btn btn2">Submit</button></center>
  </form>
  </fieldset>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
        $(document).ready(function() {
            $('input#number, input#studentID, input#regno, input#rollno').characterCounter();
        });
        $(function(){
            $('#number, #studentID, #regno, #rollno').keypress(function(e){
                let allow_char = [48,49,50,51,52,53,54,55,56,57];
                if(allow_char.indexOf(e.which) !== -1 );
                else{
                    window.alert("Please enter a digit!");
                    return false;
                }
            });
        });
        function NAME(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode==32 || charCode==46)
                    return true;
                else{
                    window.alert("Please enter alphapets, space or period.");
                    return false;
                }
            }
            catch (err) {
                alert(err.Description);
            }
        }
        function EMAIL(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode > 49 && charCode < 58) || charCode==46 || charCode==64)
                    return true;
                else{
                    window.alert("Please enter alphapets, numbers, period or at symbol.");
                    return false;
                }
            }
            catch (err) {
                alert(err.Description);
            }
        }
    </script>
</body>
</html>