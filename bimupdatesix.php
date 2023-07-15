<?php  include 'bimupdatesixth.php';?>
<?php
	$con=mysqli_connect("localhost","root","","result");
if(!$con){
die('sorry!connection failed<br>'.mysqli_connect_error());
}

$roll1=$_POST['roll'];
$name1=$_POST['name'];
$cis1=$_POST['bein'];
$math1=$_POST['fina'];
$dl1=$_POST['cscl'];
$eng1=$_POST['hrm'];
$pom1=$_POST['se'];

$sql="UPDATE bimsixth SET name6='$name1',one6='$cis1',two6='$math1',three6='$dl1',four6='$eng1',five6='$pom1' WHERE roll6='$roll1'";

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

