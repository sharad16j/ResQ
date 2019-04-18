
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
$stream=$_POST['stream'];
$stdno=$_POST['number'];
$email=$_POST['email'];
$stdid=$_POST['studentID'];
$stdregno=$_POST['regno'];
$stdrollno=$_POST['rollno'];


$insert=mysqli_query($connection,"INSERT INTO std_detail (id,std_name,std_email,std_stream,std_number,std_id,std_regno,std_rollno)
VALUES ('','$name','$email','$stream','$stdno','$stdid','$stdregno','$stdrollno')");

if(isset($insert))
	{
		header("location:Register.php");
	}
else{
 echo "error"; 
	
} ?>