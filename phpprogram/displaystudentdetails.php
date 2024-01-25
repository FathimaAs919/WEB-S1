
<html>
<head>
    <title>REGISTRATION</title>
</head>
<body bgcolor="">
    <center>
        <h2>STUDENT DETAILS</h2>
        <form method="POST" action="">
            <table bgcolor="" border="2" cellspacing="10">
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="sname"></td>
                </tr>
                <tr>
                    <th>Email id</th>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><textarea rows="3" cols="20" name="address"></textarea></td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td>
                       <input type="number" name="age">
                    </td>
                </tr>
<tr>
<th>Course</th><td><input type="text" name="course"></td></tr>
                
                <tr>
                    <th>Gender</th>
                    <td>
                        <input type="radio" value="male" name="gender">Male
                        <input type="radio" value="female" name="gender">Female
                    </td>
                </tr>
              
                <tr class="center">
                    <th colspan="2"><input type="submit" value="Submit" name="submit"></th>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","asiet");
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
else
{
if(isset($_POST['submit']))
{
$name=$_POST['sname'];
$mail=$_POST['email'];
$add=$_POST['address'];
$age=$_POST['age'];
$cour=$_POST['course'];
$gen=$_POST['gender'];
$sql="INSERT INTO students(name,email,address,age,course,gender)VALUES('$name','$mail','$add','$age','$cour','$gen')";
$result=mysqli_query($conn,$sql);
if($result)
{
echo "<h1>STUDENT DETAILS</h1>";
$query="select * from students";
$res=mysqli_query($conn,$query);
if($res)
{
echo "<table border=1>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "<th>Address</th>";
echo "<th>Age</th>";
echo "<th>Course</th>";
echo "<th>Gender</th>";
echo "</tr>";
 while ($row = $res->fetch_assoc()) {
 echo "<tr>";
      echo "<td>".$row['name']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['address']."</td>";
      echo "<td>".$row['age']."</td>";
      echo "<td>".$row['course']."</td>";
      echo "<td>".$row['gender']."</td>";
   echo "</tr>";
}
    echo "</table>";
}
else {
echo "No data";
}
}else{
echo mysqli_error($conn);
}
}
}
?>
