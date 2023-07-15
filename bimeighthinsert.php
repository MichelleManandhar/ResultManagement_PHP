<?php  include 'bimeighth.php';?>
	<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
die('sorry!connection failed<br>'.mysqli_connect_error());
}

$roll=$_POST['roll'];
$name=$_POST['name'];
$cis1=$_POST['engi'];
$math1=$_POST['cscl'];
$dl1=$_POST['eic'];
$eng1=$_POST['wint'];

mysqli_query($con, "INSERT INTO bimeighth(roll8,name8,one8,two8,three8,four8)
 VALUES ('$roll','$name','$cis1','$math1','$dl1','$eng1')");

if(mysqli_affected_rows($con)>0){
	echo"Record added";
}
else{
	echo"error:".$sql."<br>".mysqli_error($con);
}
mysqli_close($con);
?>
	
</body>
</html>
	
