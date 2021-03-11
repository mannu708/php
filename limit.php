<table border='3px'>
<tr>
<th>Sno</th>
<th>Name</th>
<th>Password</th>
<th>Email</th>
<th>Delete</th>
<th>Update</th>
<th>Change Password</th>
</tr>
<?php
include("db.php");
$x="select * from signup order by name limit 2";
$y=mysqli_query($con,$x);

while($c=mysqli_fetch_array($y))
{
    echo "<tr>";
    echo "<td>".$c[0]."</td>";
    echo "<td>".$c['name']."</td>";
    echo "<td>".$c['pass']."</td>";
    echo "<td>".$c['email']."</td>";
    echo "<td><a href=delete_query.php?x=$c[0]>Delete</a></td>";
    echo "<td><a href=update_query.php?x=$c[0]>Update</a></td>";
    echo "<td><a href=chng_pw.php?x=$c[0]>Change password</a></td>";
    echo "</tr>";
}
?>
</table>