<?php include 'bimsearch8.php'; ?>
<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
	die('no connection'.mysqli_connect_error());
}
$ab=$_POST['a'];

$sql="SELECT roll8,name8,one8,two8,three8,four8 FROM bimeighth WHERE roll8=$ab";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	echo"<center>";
	echo"<table border=1 bgcolor='white'>";
	echo "<tr><th>Roll</th><th>Name</th><th>Computer Based Finacial Engineering</th><th>Computer Security and Cyber Law</th>
	<th>Economics of Information and Comunication</th>
	<th>System Administrative wintt</th></tr>";
	while ($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td>".$row['roll8']."</td><td>".$row['name8']."</td><td>".$row['one8']."</td><td>".$row['two8'].
		"</td><td>".$row['three8']."</td><td>".$row['four8']."</td></tr>";
	}
	echo"</table>";
	echo "</center>";
}
else
{
	echo "no result";
}

mysqli_close($con);
?>
	