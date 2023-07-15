<?php  include 'bimupdatefourth.php';?>
<?php
	$con=mysqli_connect("localhost","root","","result");
if(!$con){
die('sorry!connection failed<br>'.mysqli_connect_error());
}

$roll1=$_POST['roll'];
$name1=$_POST['name'];
$cis1=$_POST['cacc'];
$math1=$_POST['stat'];
$dl1=$_POST['dbms'];
$eng1=$_POST['dsa'];
$pom1=$_POST['webii'];

$sql="UPDATE bimfourth SET name4='$name1',one4='$cis1',two4='$math1',three4='$dl1',four4='$eng1',five4='$pom1' WHERE roll4='$roll1'";

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

