<?php include 'bimsearch3.php'; ?>
<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
	die('no connection'.mysqli_connect_error());
}
$ab=$_POST['a'];
$sql="SELECT roll3,name3,one3,two3,three3,four3,five3 FROM bimthird WHERE roll3=$ab";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	echo"<center>";
	echo"<table border=1 bgcolor='white'>";
	echo "<tr><th>Roll</th><th>Name</th><th>Computer Organization</th><th>Business Statistics</th><th>Financial Accounting</th>
	<th>Java Programming</th><th>Web Programming I</th></tr>";
	while ($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td>".$row['roll3']."</td><td>".$row['name3']."</td><td>".$row['one3']."</td><td>".$row['two3'].
		"</td><td>".$row['three3']."</td><td>".$row['four3']."</td><td>".$row['five3']."</td></tr>";
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