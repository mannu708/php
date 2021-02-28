<?php
$con=mysqli_connect("localhost","root","");
$x="create database mannu";
$y=mysqli_query($con,$x);
if($y)
{
    echo"created";
}
else{
    echo "not created";
}





?>