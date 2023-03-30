<?php
    $host='localhost'; 
    $mysql_user="root";
    $mysql_pwd="";
    $con = mysqli_connect($host,$mysql_user,$mysql_pwd);
    if (!$con) die('Could not connect: ' . mysql_error());
    mysqli_select_db($con,"ebill") or die("cannot select DB" . mysql_error());
?>