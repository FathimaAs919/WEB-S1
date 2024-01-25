<html><body>
    <table>
    <form action="reg.php" method="POST">

      userid <input type="text" name="userid">
      password<input type="password" name="password">
    phno<input type="text" name="phno">
    <input type="submit" tvalue="sumbit" name="submit">
    </form>
</table>
</body></html>
<?php
    $conn=new mysqli("localhost","root","","asiet");
    if($conn->connect_error){
    die("connection failed".$conn->connect_error);
    }
    else
    {
        if(isset($_POST['submit']))
        {
        $userid=$_POST['userid'];
        $pass=$_POST['password'];
        $phno=$_POST['phno'];
        $sql="INSERT INTO registration(userid,password,phno) VALUES($userid,$pass,$phno)";
        $result=mysqli_query($conn,$sql);

    
    if($result){
        echo"new record added";
    }
    else 
    {
    echo mysqli_error($conn);
    }
}
    }
