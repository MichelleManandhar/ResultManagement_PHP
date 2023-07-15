<?php include 'bimsearch4.php'; ?>
<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
	die('no connection'.mysqli_connect_error());
}
$ab=$_POST['a'];

$sql="SELECT roll4,name4,one4,two4,three4,four4,five4 FROM bimfourth WHERE roll4=$ab";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	echo"<center>";
	echo"<table border=1 bgcolor='white'>";
	echo "<tr><th>Roll</th><th>Name</th><th>Cost Accounting</th><th>Micro Economic</th><th>Database Management System</th>
	<th>Data Structure</th><th>Web Programming II</th></tr>";
	while ($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td>".$row['roll4']."</td><td>".$row['name4']."</td><td>".$row['one4']."</td><td>".$row['two4'].
		"</td><td>".$row['three4']."</td><td>".$row['four4']."</td><td>".$row['five4']."</td></tr>";
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