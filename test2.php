
<?php
$host = "localhost"; // Host name 
$username = "root"; // Mysql username 
$password = ""; // Mysql password 
$db_name = "project"; // Database name 
$tbl_name = "studrecord"; // Table name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// OREDER BY id DESC is order result by descending
$i = 1;
$sql = "SELECT * FROM $tbl_name";

$result = mysql_query($sql);
// Start looping table row
while($rows = mysql_fetch_assoc($result)){
?>

<form action="" method="post" name="form1">
<select name="gender">
	<option value="">--------Select Option----------</option>
	<?php // Start looping table row
while($rows = mysql_fetch_assoc($result)){
?><option value="<?php 
	echo $rows['surname'];  ?>"><?php 
	echo $rows['surname'];  ?>
	</option>
<?php
} ?>

</select>
<input type="submit" value="Serach" />
</form>
<?php //close connection
mysql_close();
?>
</html>