<?php  include 'bimdeletesixth.php';?>
<?php
$con=mysqli_connect("localhost","root", "","result");
if(!$con)
{
	die('no connection'.mysqli_connect_error());
}
$a=$_POST["one"];
$sql="DELETE FROM bimsixth WHERE roll6=$a";

if(mysqli_query($con,$sql))
{
	echo"deleted record";
}
else
{
	echo"error".mysqli_error($con);
}
mysqli_close($con);
?>
