<?php
include "connection.php";
$id=$_REQUEST['id'];
$select=mysqli_query($connection,"select * from std_detail where std_id='$id'");
$res=mysqli_fetch_assoc($select);

?>
<center>
	<h1>Registration Form</h1>
<form action='editaction.php'  method="POST">
	<input type="hidden" name="id" value="<?php echo $res['ID']?>">
	Name:<input type="text" name="name" value=<?php echo $res['name']?>><br>
	type:<input type="text" name="type" value=<?php echo $res['type']?>><br>
	Address:<input type="text" name="link" value=<?php echo $res['link']?>><br>
	<input type="submit" value="Update">
	<input type="reset" value="Refresh">
</form>
</center>
