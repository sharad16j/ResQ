<?php
	include "connection.php";
	session_start();
	$rollno = $_SESSION['rollno'];
	$stream=$_POST['stream'];
	$year=$_POST['year'];
	$semester=$_POST['semester'];
	$rupees=$_POST['rupees'];
	$dfees=$_POST['cb1'];
	$rfees=$_POST['cb2'];
	$efees=$_POST['cb3'];
	$ppfees=$_POST['cb4'];
	$backlog=$_POST['cb5'];
	$other=$_POST['cb6'];
	$payvia=$_POST['payvia'];

	if($payvia =="chkdd"){
		$num=$_POST['num'];
		$bank=$_POST['bank'];
		$branch=$_POST['branch'];
		$date=$_POST['date'];
	} 
	$comments=$_POST['Comments'];

	if($payvia =="chkdd")
		$insert=mysqli_query($connection,"UPDATE receipt set stream='$stream',semester='$semester',year='$year',sumofrupee='$rupees',dfees='$dfees',rfees='$rfees',efees='$efees',ppfee='$ppfees',backlog='$backlog',other='$other',payvia='$payvia',comments='$comments',checkno='$num',bank='$bank',branch='$branch',dateofissue='$date' WHERE std_rollno='$rollno'");
	else
		$insert=mysqli_query($connection,"UPDATE receipt set stream='$stream',semester='$semester',year='$year',sumofrupee='$rupees',dfees='$dfees',rfees='$rfees',efees='$efees',ppfee='$ppfees',backlog='$backlog',other='$other',payvia='$payvia',comments='$comments' WHERE std_rollno='$rollno'");

	if(isset($insert))
	{
?>
	<script>
		window.location.href = "Search.php";
	</script>
<?php
		// echo "Successfully updated";
		//Dont print this directly redirect to Search.php
	}
	else
	{
		echo "error"; 
	}
?>