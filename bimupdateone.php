<?php  include 'bimupdatefirst.php';?>
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

$sql="UPDATE bimfirst SET name='$name1',cis='$cis1',basicmath='$math1',dl='$dl1',eng='$eng1',pom='$pom1' WHERE roll='$roll1'";

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

