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
$q = intval($_REQUEST['q']);
$con = mysqli_connect('localhost','root','puhiza890','projektiphp');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"projektiphp");
$sql="SELECT * FROM staff WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
// if (!$result) {
//     printf("Error: %s\n", mysqli_error($con));
//     exit();
// }
echo "<table id='table'>
<tr style='border: 1px solid rgb(67, 178, 223); '>
<th>ID</th>
<th>Name</th>
<th>Surname</th>
<th>Position</th>
<th>Phone Number</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr style='border: 1px solid rgb(67, 178, 223); '>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['emri'] . "</td>";
    echo "<td>" . $row['mbiemri'] . "</td>";
    echo "<td>" . $row['pozita'] . "</td>";
     echo "<td>" . $row['numriKontakues'] . "</td>";

    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
