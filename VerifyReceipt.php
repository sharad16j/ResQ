<?php
    include "connection.php";
    $roll_no=$_REQUEST["rollno"];
    session_start();
    $_SESSION['rollno'] = $roll_no;
    $fetch=mysqli_query($connection,"select * from std_detail where std_rollno='$roll_no' ");
    while($res=mysqli_fetch_assoc($fetch)){
      session_start();
      $_SESSION['roll'] = $res['std_rollno'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Verify Receipt</title>
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
              <li><a href="Admin.php"><h3 style="display: inline;" class="fas fa-search"></h3></a></li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="AdminLogin.php">Admin <i class="fas fa-user"></i></a></li>
			      <li><a href="Logout.php">Logout <i class="fas fa-sign-out-alt"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="jumbotron" style="background: none; color: white;">
        <h3 align="center" style="text-shadow: 1px 1px;">STUDENT COPY</h3>
        <h1 align="center">ABC WXYZ Engineering College</h1>
        <h4 align="center">Technocity, Panchpota, Garia, Kolkata - 700152, Phone: 1234567890</h4>
        <h4 align="center">Money Receipt</h4>
    </div>
    <form name="myform" action="document.php" method="POST" onsubmit="return formcheck()">
      <div class="boxDisabled">
        <fieldset>
          <div class="row">
              <div class="col-sm-6">
                  <div class="thumbnail">
                      <label for="name">Student's Name (BLOCK LETTER):</label>
                      <input disabled required type="text" onkeypress="return NAME(event,this);" class="validate form-control input" id="name" name="name" placeholder="Your name.." value="<?php  echo $res['std_name']?>">
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="thumbnail">
                      <label for="email">Email ID:</label>
                      <input disabled required type="email" onkeypress="return EMAIL(event,this);" class="form-control input" id="email" name="email" placeholder="Make sure it is correct, to receive the receipt.." value="<?php  echo $res['std_email']?>">
                  </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                  <div class="thumbnail">
                      <label for="number">Phone Number: </label>
                      <input disabled required maxlength="10" data-length="10" type="text" class="form-control input" id="number" name="number" placeholder="Your contact number.." value="<?php  echo $res['std_number']?>">
                  </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                  <div class="thumbnail">
                      <label for="studentID">Student ID Number: </label>
                      <input disabled required maxlength="10" data-length="10" type="text" class="form-control input" id="studentID" name="studentID" placeholder="Enter Student ID.." value="<?php ; echo $res['std_id']?>">
                  </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                  <div class="thumbnail">
                      <label for="regno">MAKAUT Registration Number: </label>
                      <input disabled required maxlength="12" data-length="12" type="text" class="form-control input" id="regno" name="regno" placeholder="Enter MAKAUT registration no..." value="<?php  echo $res['std_regno']?>">
                  </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                  <div class="thumbnail">
                      <label for="rollno">MAKAUT Roll Number: </label>
                      <input disabled required maxlength="11" data-length="11" type="text" class="form-control input" id="rollno" name="rollno" placeholder="Enter MAKAUT roll no..." value="<?php  echo $res['std_rollno']?>">
                  </div>
              </div>
            </div>
          </fieldset>
          <div class="form-horizontal">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <label for="stream">Stream- </label>
                    <select disabled required name="stream" id="stream" class="form-control input">
                        <option name="select0" value=""  disabled="disabled" selected="selected">select stream</option>
                        <option value="AEIE">AEIE</option>
                        <option value="BBA">BBA</option>
                        <option value="BCA">BCA</option>
                        <option value="BME">BME</option>
                        <option value="CE">CE</option>
                        <option value="CSE">CSE</option>
                        <option value="ECE">ECE</option>
                        <option value="EEE">EEE</option>
                        <option value="IT">IT</option>
                        <option value="MBA">MBA</option>
                        <option value="MCA">MCA</option>
                        <option value="ME">ME</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <label for="year" style="margin-left: 5px;">Year-</label>
                    <select disabled required name="year" id="year" class="form-control input">
                        <option name="select1" value=""  disabled="disabled" selected="selected">select year</option>
                        <option value="First">1st</option>
                        <option value="Second">2d</option>
                        <option value="Third">3rd</option>
                        <option value="Fourth">4th</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <label for="semester" style="margin-left: 5px;">Semester-</label>
                    <select disabled required name="semester" id="semester" class="form-control input">
                        <option name="select2" value=""  disabled="disabled" selected="selected">select semester</option>
                        <option value="First">1st</option>
                        <option value="Second">2nd</option>
                        <option value="Third">3rd</option>
                        <option value="Fourth">4th</option>
                        <option value="Fifth">5th</option>
                        <option value="Sixth">6th</option>
                        <option value="Seventh">7th</option>
                        <option value="Eighth">8th</option>
                    </select>
                </div>
            </div>
            <label class="thumbnail"><h3><b>Fees Details:</b></h3>(in rupees)</label>
            <div class="thumbnail">
              <center>
                <label for="rupees">Received a sum of Rupees:</label>
                <input disabled required onkeypress="return RUPEES(event,this);" type="text" name="rupees" id="rupees" placeholder="Amount in words..">
              </center>
            </div> 
            <fieldset>
              <div class="row">
                <div class="atLeastOne">
                  <div class="col-sm-6">
                    <label for="cb1" class="thumbnail col-xs-7 control-label">MAKAUT Development Fees:</label>
                    <div class="col-xs-5">
                      <input disabled type="text" name="cb1" id="cb1" value="" placeholder="0"><br>
                    </div>
                    <label for="cb2" class="thumbnail col-xs-7 control-label">MAKAUT Registration Fees:</label>
                    <div class="col-xs-5">
                      <input disabled type="text" name="cb2" id="cb2" value="" placeholder="0"><br>
                    </div>
                    <label for="cb3" class="thumbnail col-xs-7 control-label">MAKAUT Exam Fees:</label>
                    <div class="col-xs-5">
                      <input disabled type="text" name="cb3" id="cb3" value="" placeholder="0"><br>
                    </div>
                    <label for="cb4" class="thumbnail col-xs-7 control-label">MAKAUT PPR/PPS:</label>
                    <div class="col-xs-5">
                      <input disabled type="text" name="cb4" id="cb4" value="" placeholder="0"><br>
                    </div>
                    <label for="cb5" class="thumbnail col-xs-7 control-label">MAKAUT Back Log:</label>
                    <div class="col-xs-5">
                      <input disabled type="text" name="cb5" id="cb5" value="" placeholder="0"><br>
                    </div>
                    <label for="cb6" class="thumbnail col-xs-7 control-label">Other:</label>
                    <div class="col-xs-5">
                      <input disabled type="text" name="cb6" id="cb6" value="" placeholder="0"><br>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="payvia" class="thumbnail col-xs-4 control-label" for="payvia">Select payment method-</label>
                  <div class="col-xs-8">
                    <div class="thumbnail">
                      <select disabled required name="payvia" id="payvia" class="form-control input">
                        <option name="select4" value="" disabled="disabled" selected="selected">select method</option>
                        <option value="Cash">Cash</option>
                        <option value="chkdd">Cheque or Demand Draft</option>
                      </select>
                    </div>
                  </div>

                  <fieldset id="chkdd" class="col-xs-12">
                    <label class="thumbnail col-xs-5 control-label"  for="num">Cheque/DD number:</label>
                    <div class="col-xs-7">
                      <input disabled required="" name="num"  type="text" id="num"><br>
                    </div>
                    <label class="thumbnail col-xs-5 control-label"  for="bank">Issuing bank:</label>
                    <div class="col-xs-7">
                      <input disabled required="" name="bank" type="text" id="bank" onkeypress="return RUPEES(event,this);"><br>
                    </div>
                    <label class="thumbnail col-xs-5 control-label"  for="branch">Bank branch:</label>
                    <div class="col-xs-7">
                      <input disabled required="" type="text" name="branch" id="branch" onkeypress="return RUPEES(event,this);"><br>
                    </div>
                    <label class="thumbnail col-xs-5 control-label"  for="date">Cheque/DD date:</label>
                    <div class="col-xs-7">
                      <input disabled required="" name="date" type="date" id="date">
                    </div>
                  </fieldset>
                </div>
              </div>
            </fieldset>
            <div class="col-xs-4">
                <center><button class="btn btn1">Verify</button></center>
            </div>
            <div class="col-xs-8">
              <label class="thumbnail" for="Comments">Comments:</label>
              <textarea disabled name="Comments" id="Comments" placeholder="Write number printed on notes (if asked)." style="height:100px; width: 100%;"></textarea><br>
            </div>
          </div>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
    function formcheck(){
        var total=0;
        var fields = $(".atLeastOne")
        .find("input").serializeArray();
        $.each(fields, function(i, field) {
            if (field.value!="")
                total=total+parseInt(field.value);
        }); 
        if(total==0){
            alert("Please fill the amount of fees that you want to pay, in the respective fields.");
            return false;
        }
        else{
            if(confirm("Total amount to be paid = Rs. "+total))
                return true;
            else
                return false;
        }
    }
    $("#chkdd").prop('disabled', true);
    $("#chkdd").hide();
    $('select[name="payvia"]').change(function()
    {
      if ($(this).val() == "Cash")
      {
        $("#chkdd").prop('disabled', true);
        $("#chkdd").hide();
      }
      else
      {
        $("#chkdd").prop('disabled', false);
        $("#chkdd").show();
      }
    });
    $(function(){
        $('#cb1, #cb2, #cb3, #cb4, #cb5, #cb6, #num').keypress(function(e){
            let allow_char = [48,49,50,51,52,53,54,55,56,57];
            if(allow_char.indexOf(e.which) !== -1 );
            else{
                window.alert("Please enter a digit!");
                return false;
            }
        });
    });
    $(document).ready(function() { $('.form-popup').modal({ show: true, }) });
    function RUPEES(e, t) {
        try {
            if (window.event) {
                var charCode = window.event.keyCode;
            }
            else if (e) {
                var charCode = e.which;
            }
            else { return true; }
            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode==32)
                return true;
            else{
                window.alert("Please enter alphapets or space.");
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
<?php
    }
?>