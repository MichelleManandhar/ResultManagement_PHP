<html>
<head><title>Result Page</title>
</head>
<body background="c.jpg">
	<h1><p align="center"><font color="orange" face="Algerian"> Result</font></h1><br>
	<form method="post" action="login.php">
	<table align="right">
		<tr>
			<td><input type="submit" value="Go Back"></td>
		</tr>
	</table>
	
	<table border=1 width=60% bgcolor="yellow" align="center">
		<tr align="center">
			<td width=20% bgcolor="red"><a href="bim1.html">BIM</a></td>
			<td width=20%><a href="bhm1.html">BHM</a></td>
			<td width=20%><a href="bscsit1.html">BSc.CSIT</a></td>
		</tr>
	</table>
	<br>
	<table border=1 width="100%" bgcolor="yellow" align="center">
		<tr align="center">
			<td ><a href="bimfirst1.php" >1st SEM(BIM)</a> </td>
			<td ><a href="bimsecond1.php">2nd SEM(BIM)</a> </td>
			<td ><a href="bimthird1.php">3rd SEM(BIM)</a> </td>
			<td bgcolor="red"><a href="bimfourth1.php">4th SEM(BIM)</a> </td>
			<td ><a href="bimfifth1.php">5th SEM(BIM)</a> </td>
			<td ><a href="bimsixth1.php">6th SEM(BIM)</a> </td>
			<td ><a href="bimseventh1.php">7th SEM(BIM)</a> </td>
			<td ><a href="bimeighth1.php">8th SEM(BIM)</a> </td>
		</tr>
	</table>
</form>
		<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
	die('no connection'.mysqli_connect_error());
}
$sql="SELECT roll4,name4,one4,two4,three4,four4,five4 FROM bimfourth";
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
</body>
</html>