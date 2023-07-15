<?php  include 'bimfifth.php';?>
	<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
die('sorry!connection failed<br>'.mysqli_connect_error());
}

$roll=$_POST['roll'];
$name=$_POST['name'];
$cis1=$_POST['graph'];
$math1=$_POST['net'];
$dl1=$_POST['mark'];
$eng1=$_POST['javaii'];
$pom1=$_POST['meco'];
mysqli_query($con, "INSERT INTO bimfifth(roll5,name5,one5,two5,three5,four5,five5)
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
	
