<?php
/*
File Name: list.php
Description: This is used for number of doctors information.
Create By: Pawan kumar 
*/

include_once("config.php"); // database connection.

$result = mysql_query("SELECT * FROM doctorInfo");
?>

<html>
  <head>
    <head>
	  <title>View Number of Doctor</title>
	</head>
  </head>
  <body>
    <table>
	  <tr>
	  <th>Name</th>
	  <th>Qulification</th>
	  <th>Specialist</th>
	  <th>Exprience</th>
      </tr>	  
	  <?php
	  while ($row =  mysql_fetch_assoc($result))
      {
		 echo "<tr>";
         echo "<td>" . $row["name"] . "</td>";
         echo "<td>" . $row["doctorQulification"] . "</td>";
         echo "<td>" . $row["doctorspecialist"] . "</td>";
         echo "<td>" . $row["doctorExprience"] . "</td>";
		 echo "</tr>";
      }
	  ?>
	</table>
  </body>
</html>