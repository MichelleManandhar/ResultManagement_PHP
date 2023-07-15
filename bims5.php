<?php include 'bimsearch5.php'; ?>
<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
	die('no connection'.mysqli_connect_error());
}
$ab=$_POST['a'];

$sql="SELECT roll5,name5,one5,two5,three5,four5,five5 FROM bimfifth WHERE roll5=$ab";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	echo"<center>";
	echo"<table border=1 bgcolor='white'>";
	echo "<tr><th>Roll</th><th>Name</th><th>Computer Graphics</th><th>Advance Interworking</th><th>Fundamenal of Marketing</th>
	<th>Java Programming II</th><th>Macro Economic</th></tr>";
	while ($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td>".$row['roll5']."</td><td>".$row['name5']."</td><td>".$row['one5']."</td><td>".$row['two5'].
		"</td><td>".$row['three5']."</td><td>".$row['four5']."</td><td>".$row['five5']."</td></tr>";
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