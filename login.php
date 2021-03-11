<h1>Login</h1>
<form method="post">
User name<input type="email" name="user"><br> Password
<input type="password" name="pass"><br>
<input type="submit" name="log" value="login"></form>


<?php
if(isset($_POST['log']))
{
    $nme=$_POST['user'];
    $pass=$_POST['pass'];
    include("db.php");
    $x="select * from signup where email='$nme' and pass='$pass'";
    $y=mysqli_query($con,$x);
    $m=mysqli_num_rows($y);
    if($m>0)
    {
        echo "login succesfully";

    }
    else{
        echo "wrong username and password";
    }
}





?>