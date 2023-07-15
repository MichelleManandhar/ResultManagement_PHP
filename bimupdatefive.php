<?php  include 'bimupdatefifth.php';?>
<?php
	$con=mysqli_connect("localhost","root","","result");
if(!$con){
die('sorry!connection failed<br>'.mysqli_connect_error());
}

$roll1=$_POST['roll'];
$name1=$_POST['name'];
$cis1=$_POST['graph'];
$math1=$_POST['net'];
$dl1=$_POST['mark'];
$eng1=$_POST['javaii'];
$pom1=$_POST['meco'];

$sql="UPDATE bimfifth SET name5='$name1',one5='$cis1',two5='$math1',three5='$dl1',four5='$eng1',five5='$pom1' WHERE roll5='$roll1'";

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

