<?php  include 'bimupdateeighth.php';?>
<?php
	$con=mysqli_connect("localhost","root","","result");
if(!$con){
die('sorry!connection failed<br>'.mysqli_connect_error());
}

$roll1=$_POST['roll'];
$name1=$_POST['name'];
$cis1=$_POST['engi'];
$math1=$_POST['cscl'];
$dl1=$_POST['eic'];
$eng1=$_POST['wint'];

$sql="UPDATE bimeighth SET name8='$name1',one8='$cis1',two8='$math1',three8='$dl1',four8='$eng1' WHERE roll8='$roll1'";

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

