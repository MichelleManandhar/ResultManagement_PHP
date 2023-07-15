<?php  include 'bimupdateseventh.php';?>
<?php
	$con=mysqli_connect("localhost","root","","result");
if(!$con){
die('sorry!connection failed<br>'.mysqli_connect_error());
}

$roll1=$_POST['roll'];
$name1=$_POST['name'];
$cis1=$_POST['ctdmp'];
$math1=$_POST['hsnmn'];
$dl1=$_POST['hrm'];
$eng1=$_POST['itescm'];
$pom1=$_POST['mis'];
$yo=$_POST['or'];
$sql="UPDATE bimseventh SET name7='$name1',one7='$cis1',two7='$math1',three7='$dl1',four7='$eng1',five7='$pom1',six7='$yo' WHERE roll7='$roll1'";

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

