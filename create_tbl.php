<?php
$con=mysqli_connect("localhost","root","","mannu");
$x="create table signup(name varchar(200),pass varchar(200),email varchar(200))";
$y=mysqli_query($con,$x);
if($y)
{
    echo"created";
}
else{
    echo "not created".mysqli_error($con);
}

?>