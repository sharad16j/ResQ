<?php
    $connection=mysqli_connect('localhost','root','','register');
    if(!$connection)
    {
        die();
    }
    if(isset($connection));
    else
    {
?>
    <p class="f1 center tc w-50 mt5">Access denied.Enterk correct info. please!(:</p>
<?php
    }
?>