<!DOCTYPE html>
<html>
<head>
<title>Student Names</title>
</head>
<body>
<?php
$students = array("Namitha", "Vrinda", "Anna", "Devika","Fathima","Sumayya","Sruthy");
echo "<h2>Original Array:</h2>";
print_r($students);
asort($students);
echo "<h2>Ascending Sort:</h2>";
print_r($students);
arsort($students);
echo "<h2>Descending Sort:</h2>";
print_r($students);
?>
</body>
</html>