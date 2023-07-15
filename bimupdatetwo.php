<?php  include 'bimupdatesecond.php';?>
<?php
	$con=mysqli_connect("localhost","root","","result");
if(!$con){
die('sorry!connection failed<br>'.mysqli_connect_error());
}

$roll1=$_POST['roll'];
$name1=$_POST['name'];
$cis1=$_POST['bc'];
$math1=$_POST['dccn'];
$dl1=$_POST['dma'];
$eng1=$_POST['soc'];
$pom1=$_POST['sp'];

$sql="UPDATE bimsecond SET name2='$name1',one2='$cis1',two2='$math1',three2='$dl1',four2='$eng1',five2='$pom1' WHERE roll2='$roll1'";

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

