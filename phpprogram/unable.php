<?php
$conn=mysqli_connect("localhost","root","","vrinda")or die("unable to connect:");
$query="select * from Grade";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
echo $row['Name'];
echo"".$row['Grade'];
echo"<br>";
}
?>
