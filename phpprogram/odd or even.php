   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODD OR EVEN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        input[type="text"] {
            padding: 8px;
            width: 200px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="odd or even.php" method="POST">
        <h1>ODD OR EVEN</h1> 
        Enter a number:  
        <input type="number" name="number">  
        <input type="submit" value="Submit">  
    </form>  
    </body>  
    </html>  
    <?php   
        if($_POST){  
            $number = $_POST['number'];   
            //divide entered number by 2   
            //if the reminder is 0 then the number is even otherwise the number is odd  
            if(($number % 2) == 0){  
                echo "$number is an Even number";  
            }else{  
                echo "$number is Odd number";  
            }  
        }  
    ?>  