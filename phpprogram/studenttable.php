<html>
   <body bgcolor="teal">
    <center>
    <h1>GRADE OF STUDENT</h1>
    <form method="POST"> 
        <table>
            <tr>
                <th>Name:<input type="text" name="name"></th>
            </tr>
            <tr>
                <th>Grade:<input type="text" name="grade"></th>
            </tr>
            <tr>
                <th><input type="submit" value="Submit" name="submit"></th>
            </tr>
            
        </table>
</form>
   </center> 
   </body>
</html>
<?php
$conn=new mysqli("localhost","root","","asiet");
if($conn->connect_error){
die("connection faild".$conn->connect_error);
}
else{
if(isset($_POST['submit'])){
$name=$_POST['name'];
$grade=$_POST['grade'];
$sql="INSERT INTO student(name,grade)VALUES ('$name','$grade')";
$result=mysqli_query($conn,$sql);
if($result){
    echo"New Record Added";
}
else{
    echo mysqli_error($conn);
}
}
}