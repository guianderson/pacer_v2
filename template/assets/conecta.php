<?php
    
    $host = "127.0.0.1";
    $bd_user = "root"; 
    $bd_pass = "";     
    $bd_name = "pacer";
    
    $conecta = mysqli_connect($host,$bd_user,$bd_pass)
             or print (mysqli_error());
    mysqli_select_db($conecta,$bd_name)
             or print(mysqli_error());
?>