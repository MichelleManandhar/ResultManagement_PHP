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
			<td width=16% bgcolor="yellow"><a href="biminsert.html">Insert (BIM)</a></td>
			<td width=16%><a href="bimupdate.html">Update (BIM)</a></td>
			<td width=16%><a href="bimdelete.html">Delete (BIM)</a></td>
			<td width=16%><a href="bimview.html">View Record (BIM)</a></td>
			<td width=16%><a href="bimsearch.html">Search (BIM)</a></td>
		</tr>
	</table>
	<br>
	<table border=1 width="100%" bgcolor="gray" align="center">
		<tr align="center">
			<td  bgcolor="yellow"><a href="bimfirst.php" >1st SEM(BIM)</a> </td>
			<td ><a href="bimsecond.php">2nd SEM(BIM)</a> </td>
			<td ><a href="bimthird.php">3rd SEM(BIM)</a> </td>
			<td ><a href="bimfourth.php">4th SEM(BIM)</a> </td>
			<td><a href="bimfifth.php">5th SEM(BIM)</a> </td>
			<td ><a href="bimsixth.php">6th SEM(BIM)</a> </td>
			<td ><a href="bimseventh.php">7th SEM(BIM)</a> </td>
			<td ><a href="bimeighth.php">8th SEM(BIM)</a> </td>
		</tr>
	</table>
	<br>
</form>
	<form method="post" action="bimfirstinsert.php">
		<b>Roll:<input type="text" name="roll"><br>
		Name:<input type="text" name="name"><br>
		Marks:<br></b>
		Computer Information System:<input type="text" name="cis"><br>
		Basic Math:<input type="text" name="bm"><br>
		Digital Logic:<input type="text" name="dl"><br>
		English composition:<input type="text" name="eng"><br>
		Principle of Management:<input type="text" name="pom"><br>
		<input type="submit" value="save">
		<input type="reset" value="clear">
	</form>
</body>
</html>
	