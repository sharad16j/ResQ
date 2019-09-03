
<?php
include "connection.php";
if(empty(trim($_POST['name'])))
{
   die( "only space in name is not allowed"); 

}
else 
{
	$name=trim($_POST['name']);
}

$stdno=$_POST['number'];
$email=$_POST['email'];
$stdid=$_POST['studentID'];
$stdregno=$_POST['regno'];
$stdrollno=$_POST['rollno'];


$insert=mysqli_query($connection,"INSERT INTO std_detail (id,std_name,std_email,std_number,std_id,std_regno,std_rollno)
VALUES ('','$name','$email','$stdno','$stdid','$stdregno','$stdrollno')");

$insert=mysqli_query($connection,"INSERT INTO receipt (id,std_rollno)
VALUES ('','$stdrollno')");
if(isset($insert))
	{
		echo "SUCCESFUL";
	}
else{
 echo "error"; 
	
} ?>