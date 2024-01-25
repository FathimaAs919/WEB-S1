<table>
<?php
$conn=mysqli_connect("localhost","root","","asiet") or die("unable to connect");
$query="select * from student";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))

{
    echo $row['name'];
    echo " ".$row['grade'];
    echo"<br>";
}

?>
</table>