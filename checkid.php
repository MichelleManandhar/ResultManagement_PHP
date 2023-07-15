<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con)
{
	die('no connection'.mysqli_connect_error());
}
else{
	echo "Connection Successful";
}
$users=$_POST['user'];
$passs=$_POST['pass'];

	$sql="SELECT * FROM userid WHERE username='$users' AND password='$passs'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
	
			header("location:homepage.html");
	          exit();
}
else{

	echo"error login";
}
mysqli_close($con);
?>
