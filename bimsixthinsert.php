<?php  include 'bimsixth.php';?>
	<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
die('sorry!connection failed<br>'.mysqli_connect_error());
}

$roll=$_POST['roll'];
$name=$_POST['name'];
$cis1=$_POST['bein'];
$math1=$_POST['fina'];
$dl1=$_POST['cscl'];
$eng1=$_POST['hrm'];
$pom1=$_POST['se'];
mysqli_query($con, "INSERT INTO bimsixth(roll6,name6,one6,two6,three6,four6,five6)
 VALUES ('$roll','$name','$cis1','$math1','$dl1','$eng1','$pom1')");

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
	
