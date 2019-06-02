<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}
table, td, th {
    border: 1px solid black;
    padding: 5px;
}
th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
$con = mysqli_connect('localhost','root','','projektiphp');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"projektiphp");
$sql="SELECT * FROM staff WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
echo "<table id='table'>
<tr style='border: 1px solid rgb(67, 178, 223); '>
<th>ID</th>
<th>Name</th>
<th>Surname</th>
<th>Position</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr style='border: 1px solid rgb(67, 178, 223); '>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['Emri'] . "</td>";
    echo "<td>" . $row['Mbiemri'] . "</td>";
    echo "<td>" . $row['Pozita'] . "</td>";
     echo "<td>" . $row['Numri Kontaktues'] . "</td>";

    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
