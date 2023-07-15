<?php  include 'bimsearch1.php';?>
		<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
	die('no connection'.mysqli_connect_error());
}
$ab=$_POST['a'];
$sql="SELECT roll,name,cis,basicmath,dl,eng,pom FROM bimfirst WHERE roll=$ab";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{	
	echo"<center>";
	echo"<table border=1 bgcolor='white'>";
	echo "<tr><th>Roll</th><th>Name</th><th>Computer Information System</th><th>Basic Math</th><th>Digital Logic</th><th>English composition</th>
	<th>Principle of Management</th></tr>";
	while ($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td>".$row['roll']."</td><td>".$row['name']."</td><td>".$row['cis']."</td><td>".$row['basicmath'].
		"</td><td>".$row['dl']."</td><td>".$row['eng']."</td><td>".$row['pom']."</td></tr>";
	}
	echo"</table>";
	echo"</center>";
}
else
{
	echo "no result";
}

mysqli_close($con);
?>
