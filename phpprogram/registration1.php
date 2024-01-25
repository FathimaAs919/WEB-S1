<center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['txt1'];
    $lname = $_POST['txt2'];
    $password = $_POST['txt3'];
    $age = $_POST['txt4'];

    echo "<b><u><font size=5>REGISTRATION DETAILS</font></u></b><br>";
    echo "Name: $fname $lname<br>";
    echo "Age: $age<br>";

    $gender = $_POST['rd'];
    echo "Gender: $gender<br>";

    echo "Languages known:<br>";

    if (isset($_POST['chk'])) {
        foreach ($_POST['chk'] as $selected) {
            echo $selected . "<br>";
        }
    }
}
?>
