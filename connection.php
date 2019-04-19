<!-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> -->
<?php
    $connection=mysqli_connect('localhost','root','','register');
    if(isset($connection));
    else
    {
?>
    <p class="f1 center tc w-50 mt5">Hold right there,sparky!</p>
    <p class="f1 center tc w-50 mt5">Access denied.Enter correct info. please!(:</p>
<?php
    }
?>