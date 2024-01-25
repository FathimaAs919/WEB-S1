<!DOCTYPE html>
<html>
<head>
    <title>Cricket Players</title>
</head>
<body bgcolor="pink">

<?php
$array = array("virat kohli", "dhoni", "dravid", "jadeja","yuvaraj","shami","sanju","abd");
?>
<center>
<h1 >Cricket Players</h1>
<table border="3">
    <tr>
        <th>Serial Number</th>
        <th>Name of Players</th>
    </tr>
</center>
    <?php
    $arraySize = sizeof($array);
    for ($i = 0; $i < $arraySize; $i++) {
        echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>";
        echo "<td>" . $array[$i] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>