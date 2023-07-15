<?php  include 'bimupdatethird.php';?>
<?php
	$con=mysqli_connect("localhost","root","","result");
if(!$con){
die('sorry!connection failed<br>'.mysqli_connect_error());
}

$roll1=$_POST['roll'];
$name1=$_POST['name'];
$cis1=$_POST['co'];
$math1=$_POST['stat'];
$dl1=$_POST['facc'];
$eng1=$_POST['java'];
$pom1=$_POST['webi'];

$sql="UPDATE bimthird SET name3='$name1',one3='$cis1',two3='$math1',three3='$dl1',four3='$eng1',five3='$pom1' WHERE roll3='$roll1'";

if(mysqli_query($con,$sql))
{
	echo"updated record";
}
else
{
	echo"error".mysqli_error($con);
}
mysqli_close($con);
?>

