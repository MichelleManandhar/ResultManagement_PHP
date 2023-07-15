<?php  include 'bimfourth.php';?>
	<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
die('sorry!connection failed<br>'.mysqli_connect_error());
}

$roll=$_POST['roll'];
$name=$_POST['name'];
$cis1=$_POST['cacc'];
$math1=$_POST['stat'];
$dl1=$_POST['dbms'];
$eng1=$_POST['dsa'];
$pom1=$_POST['webii'];
mysqli_query($con, "INSERT INTO bimfourth(roll4,name4,one4,two4,three4,four4,five4)
 VALUES ('$roll','$name','$cis1','$math1','$dl1','$eng1','$pom1')");

if(mysqli_affected_rows($con)>0){
	echo"Record added";
}
else{
	echo"error:".$sql."<br>".mysqli_error($con);
}
mysqli_close($con);
?>
	
</body>
</html>
	
