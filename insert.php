<?php
/*
File Name: insert.php
Description: This is used for insert data in database.
Create By: Pawan kumar 
*/

include_once("config.php"); // database connection 

// If login button is set then perfrom insert operation.
if (isset($_POST['btn-login'])) 
{ 
  $Name = $_POST['name'];
  $Qulification = $_POST['qulification'];
  $specialist = $_POST['specialist'];
  $Exprience = $_POST['exprience'];
 
  $query = "INSERT INTO doctorInfo(name,doctorQulification,doctorspecialist,doctorExprience) VALUES('$Name','$Qulification','$specialist', '$Exprience')";
  $res = mysql_query($query);
  
  header("location:list.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Doctor Registration System</title>
  </head>
  <body>
    <div class="container">
      <div id="login-form">
        <form method="post">
          <label>Doctor Name:</label> <input type="text" name="name" placeholder="Pleae Enter Doctor Name" maxlength="50" value="" /><br/><br/>
      	  <label>Doctor Qulification:</label><select name="qulification">
      	                        <option>MD</option>
      							<option>BAMS</option>
      							<option>MBBS</option>
      	                       </select><br/><br/>
      	  <label>Doctor specialist:</label> <select name="specialist">
      	                        <option>MD</option>
      							<option>BAMS</option>
      							<option>MBBS</option>
      	                       </select><br/><br/>				   
      	  <label>Doctor exprience:</label> <select name="exprience">
      	                        <option>1</option>
      							<option>2</option>
      							<option>3</option>
      							<option>4</option>
      							<option>5</option>
      							<option>6</option>
      	                       </select><br/><br/>
      	  <button type="submit" name="btn-login">Save</button>
        </form>
      </div> 
    </div>
  </body>
</html>