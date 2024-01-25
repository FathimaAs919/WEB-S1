<html><body>
    <table>
    <form action="login.php" method="POST">

      userid <input type="text" name="userid">
      password<input type="password" name="password">
   
    <input type="submit" tvalue="sumbit" name="submit">
    </form>
<?php
    $conn=new mysqli("localhost","root","","asiet");
    if($conn->connect_error){
    die("connection failed".$conn->connect_error);
    }
    else{
        if(isset($_POST['submit']))
        {
            $userid=$_POST['userid'];
            $pass=$_POST['password'];
        }
    }
    $query="SELECT * FROM registration WHERE userid='$userid' and pass='$pass'";
    $result=mysqli_query($conn,$query);
    //$row=mysqli_fetch_assoc($result);
    if($query==1)
    {
        echo "login successfully";
    }
    else{
        echo "wrong";
    }