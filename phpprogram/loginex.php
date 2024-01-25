<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            margin: 20px auto;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border: 2px solid #ddd;
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #4CAF50;
        }
    </style>
</head>
<body bgcolor="">
 <h2>LOGIN</h2>
        <form method="POST" action="">
            <table bgcolor="" border="2" cellspacing="10">
                <tr>
                    <th>Username</th>
                    <td><input type="text" name="user"></td>
                </tr>
            
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="password"></td>
                </tr>
<tr class="center">
                    <th colspan="2"><input type="submit" value="Login" name="submit"></th>
                </tr>
            </table>
        </form></center>
<a href=register.php>new user register here</a>
</body>
</html>

<?php
$conn = new mysqli("localhost", "root", "", "asiet");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
if(isset($_POST['submit']))
{
    $uname=$_POST['user'];
    $psswd=$_POST['password'];
    $sql="Select * from registration where userid='$uname' AND password='$psswd'";
 $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "Login successful";
        }  else {
      echo mysqli_error($conn);
    }
  }
}
?>
