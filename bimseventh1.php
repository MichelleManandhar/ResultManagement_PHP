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
			<td ><a href="bimfourth1.php">4th SEM(BIM)</a> </td>
			<td ><a href="bimfifth1.php">5th SEM(BIM)</a> </td>
			<td ><a href="bimsixth1.php">6th SEM(BIM)</a> </td>
			<td bgcolor="red"><a href="bimseventh1.php">7th SEM(BIM)</a> </td>
			<td ><a href="bimeighth1.php">8th SEM(BIM)</a> </td>
		</tr>
	</table>
</form>
		<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
	die('no connection'.mysqli_connect_error());
}
$sql="SELECT roll7,name7,one7,two7,three7,four7,five7,six7 FROM bimseventh";
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
</body>
</html>