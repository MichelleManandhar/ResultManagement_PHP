<?php  include 'bimsecond.php';?>
	<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
die('sorry!connection failed<br>'.mysqli_connect_error());
}

$roll=$_POST['roll'];
$name=$_POST['name'];
$cis1=$_POST['bc'];
$math1=$_POST['dccn'];
$dl1=$_POST['dma'];
$eng1=$_POST['soc'];
$pom1=$_POST['sp'];
mysqli_query($con, "INSERT INTO bimsecond(roll2,name2,one2,two2,three2,four2,five2)
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
	
