<form  method="post">
    Name<input type="text" id="user" name="user"><br> Password
    <input type="password" id="pass" name="pass"><br> Confirm Password<input type="password" id="cpass"><br> Email
    <input type="email" id="email" name="email"><br> Contact no<input type="number" id="num"><br>
    <input type="submit" onclick="return xyz()" id="sub" name="sub">
</form>
<?php
$con=mysqli_connect("localhost","root","","mannu");
if(isset($_POST['sub']))
{
$name=$_POST['user'];

$password=$_POST['pass'];
$email=$_POST['email'];

    $z="select * from signup where email='$email'";
    $a=mysqli_query($con,$z);
    $m=mysqli_num_rows($a);
    if($m>0)
    {
        echo "<script>"."alert('email already exists')"."</script>";
        return false;
    }
else{
    $x="insert into signup(name,pass,email)values('$name','$password','$email')";
    $y=mysqli_query($con,$x);
    if($y){
        echo "submitted";
    }
    else{
        echo "not submitted".mysqli_error($con);
    }  
}

}
?>