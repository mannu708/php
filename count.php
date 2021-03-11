
<?php
include("db.php");
$x="select count(sno) from signup";
$y=mysqli_query($con,$x);

while($c=mysqli_fetch_array($y))
{
    
    echo $c[0];
    
}
?>
