<html>
<body>
<?php
   $con=mysqli_connect('localhost','root','','harsha');
   if(!$con)
   {
	die('error in connecting database'.mysqli_error());  
   }
   $sel=mysqli_select_db($con,'reg');
   if(!$sel)
	   echo"<br>database not selected";
   else
	   echo "selected<br>";
   $un=$_POST['uname'];
   $em=$_POST['eid'];
   $pn=$_POST['mn'];
   $gen=$_POST['gender'];
   $pwd=$_POST['pas'];
   $qry="INSERT INTO reg VALUES('$un','$em','$pn','$gen','$pwd')";
   $ins=mysqli_query($con,$qry);
   if(!$ins)
	   echo "values not inserted<br>";
   else
	   echo "inserted<br>";
   mysqli_close($con);
    
?>
</body>
</html>