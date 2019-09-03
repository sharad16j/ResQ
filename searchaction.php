<?php
    include "connection.php";
    $roll_no=$_REQUEST["rollno"];
    $fetch=mysqli_query($connection,"select * from std_detail where std_rollno='$roll_no' ");
    if(mysqli_fetch_assoc($fetch)){
        while($res=mysqli_fetch_assoc($fetch)){
?>
    <tr>
        Name:  <input type="text" name="name" value=<?php echo $res['std_name']?>><br>
        email: <input type="text" name="type" value=<?php echo $res['std_email']?>><br>
        stream:<input type="text" name="type" value=<?php echo $res['std_stream']?>><br>
        number:<input type="text" name="type" value=<?php echo $res['std_number']?>><br>
        regno: <input type="text" name="type" value=<?php echo $res['std_regno']?>><br>
        stdid: <input type="text" name="type" value=<?php echo $res['std_id']?>><br>
        <td><a href="Receipt.php?id=<?php echo $res['ID'] ?>">print pdf</a></td>
    </tr>
<?php
        }
    }
    else
    {
        ?>
        <script>
        alert("Helloooooooooo");
        </script>
        <?php
    }
?>