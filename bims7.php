<?php include 'bimsearch7.php'; ?>
<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
	die('no connection'.mysqli_connect_error());
}
$ab=$_POST['a'];

$sql="SELECT roll7,name7,one7,two7,three7,four7,five7,six7 FROM bimseventh WHERE roll7=$ab";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	echo"<center>";
	echo"<table border=1 bgcolor='white'>";
	echo "<tr><th>Roll</th><th>Name</th><th>Critical Thinking and Decision Making Process</th><th>High Speed Network and Multimedia Networking</th>
	<th>Human Resource Management</th>
	<th>IT Enterpreneurship and Supply Chain Management</th><th>Management Information System</th><th>Organizational Relation</th></tr>";
	while ($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td>".$row['roll7']."</td><td>".$row['name7']."</td><td>".$row['one7']."</td><td>".$row['two7'].
		"</td><td>".$row['three7']."</td><td>".$row['four7']."</td><td>".$row['five7']."</td><td>".$row['six7']."</td></tr>";
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