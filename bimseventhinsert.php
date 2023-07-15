<?php  include 'bimseventh.php';?>
	<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
die('sorry!connection failed<br>'.mysqli_connect_error());
}

$roll=$_POST['roll'];
$name=$_POST['name'];
$cis1=$_POST['ctdmp'];
$math1=$_POST['hsnmn'];
$dl1=$_POST['hrm'];
$eng1=$_POST['itescm'];
$pom1=$_POST['mis'];
$yo=$_POST['or'];
mysqli_query($con, "INSERT INTO bimseventh(roll7,name7,one7,two7,three7,four7,five7,six7)
 VALUES ('$roll','$name','$cis1','$math1','$dl1','$eng1','$pom1','$yo')");

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
	
