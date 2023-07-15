<?php  include 'bimfirst.php';?>
	<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
die('sorry!connection failed<br>'.mysqli_connect_error());
}

$roll1=$_POST['roll'];
$name1=$_POST['name'];
$cis1=$_POST['cis'];
$math1=$_POST['bm'];
$dl1=$_POST['dl'];
$eng1=$_POST['eng'];
$pom1=$_POST['pom'];
mysqli_query($con, "INSERT INTO bimfirst(roll,name,cis,basicmath,dl,eng,pom)
 VALUES ('$roll1','$name1','$cis1','$math1','$dl1','$eng1','$pom1')");

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
	
