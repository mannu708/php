<form method="post" >
    Enter your file:<input type="file" name="filenme">
    <input type="submit" name="sub">
</form>
<?php
if(isset($_POST['sub']))
{
    $f=$_POST['filenme'];
    if(!file_exists("$f"))
    {
    $x=mkdir("$f");
    if($x)
    {
        echo "File created";
    }

    else{
        echo "File not created";
    }
}
}
?>