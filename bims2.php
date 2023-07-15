<?php  include 'bimsearch2.php'; ?>
<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
	die('no connection'.mysqli_connect_error());
}
$ab=$_POST['a'];
$sql="SELECT roll2,name2,one2,two2,three2,four2,five2 FROM bimsecond WHERE roll2=$ab";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	echo"<center>";
	echo"<table border=1 bgcolor='white'>";
	echo "<tr><th>Roll</th><th>Name</th><th>Business Communication</th><th>DCCN</th><th>Discrete Math</th><th>Sociology</th>
	<th>Structure Programming</th></tr>";
	while ($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td>".$row['roll2']."</td><td>".$row['name2']."</td><td>".$row['one2']."</td><td>".$row['two2'].
		"</td><td>".$row['three2']."</td><td>".$row['four2']."</td><td>".$row['five2']."</td></tr>";
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