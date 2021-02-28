<script>
    function xyz() {
        a = document.getElementById('user').value;
        b = document.getElementById('pass').value;
        c = document.getElementById('cpass').value;
        d = document.getElementById('email').value;
        e = document.getElementById('num').value;
        if (a == "" && b == "" && c == "" && d == "" && e == "") {
            alert("Please fill all fields");
            return false;
        } else if (a == "") {
            alert("Please fill your name");
            return false;
        } else if (a.length < 5 || a.length > 15) {
            alert("Please enter your name 5-15 characters");
            return false;
        } else if (b == "") {
            alert("Please fill your password");
            return false;

        } else if (b.length < 8) {
            alert("please set 8 character password");
            return false;
        } else if (b != c) {
            alert("password dosen't match");
            return false;
        } else if (d == "") {
            alert("please fill email_id");
            return false;
        } else if (e == "") {
            alert("please fill your contact number");
            return false;

        } else if (e.length < 10) {
            alert("please enter valid number");
            return false;
        }

    }
</script>
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
$x="insert into signup(name,pass,email)values('$name','$password','$email')";
$y=mysqli_query($con,$x);
if($y){
    echo "submitted";
}
else{
    echo "not submitted".mysqli_error($con);
}
}
?>