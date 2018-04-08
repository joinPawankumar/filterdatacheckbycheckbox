<?php
include_once("config.php");
$bams = "";
$md = ""; 


if (isset($_GET['bams']))
	$bams = $_GET['bams'];
  
  if (isset($_GET['md']))
	$md = $_GET['md'];

if ($bams != "" || $md != "")
{
$qry = mysql_query("SELECT * FROM doctorInfo WHERE doctorQulification = '$bams' OR doctorQulification = '$md' ");


while ($row =  mysql_fetch_assoc($qry))
{
   echo $row["name"]."<br>";
   echo $row["doctorQulification"]."<br>";
   echo $row["doctorspecialist"]."<br>";
   echo $row["doctorExprience"]."<br>";
}

} 
else
	echo "Please select check box";
?>