<?php
session_start();
if (isset($_SESSION['name'])) {
    $name=$_SESSION['name'];
    echo "welcome".$name;

?>
<a href="new3.php">logout</a>

<?php
}
else{
    echo "not set";
}


?>