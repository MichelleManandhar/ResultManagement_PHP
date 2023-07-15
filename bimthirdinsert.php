<?php  include 'bimthird.php';?>
	<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
die('sorry!connection failed<br>'.mysqli_connect_error());
}

$roll=$_POST['roll'];
$name=$_POST['name'];
$cis1=$_POST['co'];
$math1=$_POST['stat'];
$dl1=$_POST['facc'];
$eng1=$_POST['java'];
$pom1=$_POST['webi'];
mysqli_query($con, "INSERT INTO bimthird(roll3,name3,one3,two3,three3,four3,five3)
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
	
