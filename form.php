
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
    echo "Your name is: $name".'<br>'."Your password is: $password";
}



?>