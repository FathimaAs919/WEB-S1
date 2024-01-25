<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        center {
            margin-top: 50px;
        }

        h2 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
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
        input[type="number"],
        textarea {
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
    </style>
</head>
<body bgcolor="">
    <center>
        <h2>REGISTRATION</h2>
        <form method="POST" action="">
            <table bgcolor="" border="2" cellspacing="10">
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="name"></td>
                </tr>
<tr>
                    <th>UserId</th>
                    <td><input type="text" name="user"></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="password"></td>
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
                
           
                
                <tr class="center">
                    <th colspan="2"><input type="submit" value="Submit" name="submit"></th>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
<?php
$conn = new mysqli("localhost", "root", "", "asiet");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $userid = $_POST['user'];
 $password= $_POST['password'];
 $addr = $_POST['address'];
 $age = $_POST['age'];

    $sql = "INSERT INTO `registration` (name,userid,password,address,age) VALUES ('$name', '$userid','$password','$addr','$age')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo "New record added";
    } else {
      echo mysqli_error($conn);
    }
  }
}
?>