<form method="post" >
    Enter your folder name:<input type="text" name="fldnme">
    <input type="submit" name="sub">
</form>
<?php
if(isset($_POST['sub']))
{
    $f=$_POST['fldnme'];
    if(!file_exists("$f"))
    {
    $x=mkdir("$f");
    if($x)
    {
        echo "Folder created";
    }

    else{
        echo "Folder not created";
    }
}
}
?>