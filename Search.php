<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search</title>
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
        <a href="#" class="navbar-brand"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> IMAGE</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-nav-demo">
          <ul class="nav navbar-nav">
              <li><a href="Register.php">Register</a></li>
              <li class="active"><a href="Search.php"><h3 style="display: inline;" class="fas fa-search"></h3></a></li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="Admin.php">Login <i class="fas fa-user"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <form action="Receipt.php" method="POST">
    <div class="container">
        <div class="input-field thumbnail col-xs-8 col-xs-offset-2">
                <input id="rollno" name="rollno" type="text" required maxlength="11" data-length="11"  class="form-contol input">
                <label for="rollno">Enter MAKAUT Roll Number</label>
        </div>
    </div>
    <center><button class="btn btn3" >Search <i class="fas fa-search"></i></button></center>
  </form>
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
</body>
</html>