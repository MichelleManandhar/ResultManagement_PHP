<html>
<head><title>Home Page</title>
</head>
<body background="abc.jpg">
	<h1><p align="center"><font color="white" face="Algerian"> Welcome To Online Result Processing</font></h1>
	<form method="post" action="login.php">
	<table align="right">
		<tr>
			<td><input type="submit" value="Log out"></td>
		</tr>
	</table>
	
	<br>
	<table border=1 width=60% bgcolor="gray" align="center">
		<tr align="center">
			<td width=20% bgcolor="yellow"><a href="bim.html">BIM</a></td>
			<td width=20%><a href="bhm.html">BHM</a></td>
			<td width=20%><a href="bscsit.html">BSc.CSIT</a></td>
		</tr>
	</table>
	<br>
	<table border=1 width="80%" bgcolor="gray" align="center">
		<tr align="center">
			<td width=16% ><a href="biminsert.html">Insert (BIM)</a></td>
			<td width=16%><a href="bimupdate.html">Update (BIM)</a></td>
			<td width=16%><a href="bimdelete.html">Delete (BIM)</a></td>
			<td width=16% bgcolor="yellow"><a href="bimview.html">View Record (BIM)</a></td>
			<td width=16%><a href="bimsearch.html">Search (BIM)</a></td>
		</tr>
	</table>
	<br>
	<table border=1 width="100%" bgcolor="gray" align="center">
		<tr align="center">
			<td ><a href="bimviewfirst.php">1st SEM(BIM)</a> </td>
			<td ><a href="bimviewsecond.php">2nd SEM(BIM)</a> </td>
			<td bgcolor="yellow"><a href="bimviewthird.php">3rd SEM(BIM)</a> </td>
			<td ><a href="bimviewfourth.php">4th SEM(BIM)</a> </td>
			<td><a href="bimviewfifth.php">5th SEM(BIM)</a> </td>
			<td ><a href="bimviewsixth.php">6th SEM(BIM)</a> </td>
			<td ><a href="bimviewseventh.php">7th SEM(BIM)</a> </td>
			<td ><a href="bimvieweighth.php">8th SEM(BIM)</a> </td>
		</tr>
	</table>
</form>
		<?php
$con=mysqli_connect("localhost","root","","result");
if(!$con){
	die('no connection'.mysqli_connect_error());
}
$sql="SELECT roll3,name3,one3,two3,three3,four3,five3 FROM bimthird";
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
	
</body>
</html>

