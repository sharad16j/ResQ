<?php
    $var = $_POST['roll'];
    require "connection.php";
        session_start();
        $fetch=mysqli_query($connection,"select * from std_detail where std_rollno='$var' ");
        $fetch1=mysqli_query($connection,"select * from std_detail where std_rollno='$var' ");
        if(mysqli_fetch_assoc($fetch1))
        {
            while($res=mysqli_fetch_assoc($fetch))
            {
                echo '<script>alert("Data found")</script>';
                echo '<center><button id="ajax_button" class="btn btn3">Search <i class="fas fa-search"></i></button></center>';
            }
        }
?>