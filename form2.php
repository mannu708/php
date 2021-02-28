<form method="post">
Userid<input type="text" name="user"><br>
Password<input type="password" name="pass"><br>
<input type="submit" name="sub"><br>
</form>
<?php
if(isset($_POST['sub']))
{
    $name=$_POST['user'];
    $password=$_POST['pass'];
if($name=='admin' && $password=='admin123')
{
    echo "Login Successfully";
}
else
{
    echo "wrong username and password";
}
}


?>