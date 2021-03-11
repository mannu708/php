<form method="post">
Enter your Email_Id<input type="email" name="email"><br>
<input type="submit" name="sub" value="Show Password">
</form>
<?php
include("db.php");
if(isset($_POST['sub']))
{



$email=$_POST['email'];

    $z="select * from signup where email='$email'";
    $a=mysqli_query($con,$z);
    $m=mysqli_num_rows($a);
    if($m>0)
    {
        $b="select * from signup where pass='$password'";
        $c=mysqli_query($con,$b);
    while($n=mysqli_fetch_array($y))
    {
        echo $n['pass'];
    }
    }
    else{
        echo "email not exists";
    }
}









?>
