<?php include 'bimsearch6.php'; ?>
<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
	die('no connection'.mysqli_connect_error());
}
$ab=$_POST['a'];

$sql="SELECT roll6,name6,one6,two6,three6,four6,five6 FROM bimsixth WHERE roll6=$ab";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	echo"<center>";
	echo"<table border=1 bgcolor='white'>";
	echo "<tr><th>Roll</th><th>Name</th><th>BEIN</th><th>Business Finance</th><th>CSCL</th>
	<th>HRM</th><th>SE</th></tr>";
	while ($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td>".$row['roll6']."</td><td>".$row['name6']."</td><td>".$row['one6']."</td><td>".$row['two6'].
		"</td><td>".$row['three6']."</td><td>".$row['four6']."</td><td>".$row['five6']."</td></tr>";
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