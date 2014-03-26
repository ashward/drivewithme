<?php
include 'connection_info.php';

$result = $db->query("SELECT * from drivewithme.Journeys, drivewithme.Users, drivewithme.Addresses where Users.ID = Journeys.User_ID and Journeys.From_Address_ID = Addresses.ID");
if(! $result){
echo "No journeys";
die();
}
echo "<table>";
echo "<tr>";
echo "<th>Address Line 1</th>";
echo "<th>Address Line 2</th>";
echo "<th>Address Line 3</th>";
echo "<th>Address Line 4</th>";
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    printf("<tr><td>%s</td> <td>%s</td>  <td>%s</td> <td>%s</td> <td>%s</td></tr>\n", $row["Address_Line_1"], $row["Address_Line_2"],$row["Address_Line_3"], $row["Address_Line_4"], $row["PostCode"]);
}

echo "</table>";

?>


<hr />

<a href="index.html">Back</a>
</html>