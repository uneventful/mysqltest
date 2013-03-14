<?php
$con=mysqli_connect("localhost","teststudent","testtest","teststudent");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM persons");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Firstname'] . "</td>";
  echo "<td>" . $row['Lastname'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?> 