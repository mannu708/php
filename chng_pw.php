<form method="post">
Old password<input type="password" name="opass"><br>
New password<input type="password" name="npass"><br>
Confirm password<input type="password" name="cpass"><br>
<input type="submit" name="sub" value="change password">
</from>
<?php
include("db.php");
if(isset($_POST['sub']))
{
    $opass=$_POST['opass'];
    $npass=$_POST['npass'];
    $cpass=$_POST['cpass'];
    $z="select * from signup where email='$opass'";
    $a=mysqli_query($con,$z);
    $m=mysqli_num_rows($a);
    if($m>0)
    {
        echo "<script>"."alert('Password matched')"."</script>";
        return false;
    }
else{
    $x="update signup set pass='$npass' where sno='9'";
    $y=mysqli_query($con,$x);
    if($y){
        echo "Password changed";
    }
    else{
        echo "not changed".mysqli_error($con);
    }  
}
    
}





?>