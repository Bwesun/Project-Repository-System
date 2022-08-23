<?php
include ('connect.php');
$tbl_name="project";
// Get values from form 
$surname=$_POST['author'];
$reg=$_POST['regnum'];
$firstname=$_POST['topic'];
$oname=$_POST['level'] ;
$email=$_POST['year'];
$phone=$_POST['abstract'];

$filename=$_FILES['pic']['name'];
	move_uploaded_file($_FILES['pic']['tmp_name'], "../files/".$_FILES['pic']['name']);

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(author, regnum, topic, level, year, abs, filename)VALUES('$surname','$reg', '$firstname','$oname', '$email', '$phone', '$filename')";
$result=mysql_query($sql);

//echo $sql;
?>


<!DOCTYPE html>
<html>
<head>
<title>Register Project</title>
<style type="text/css">
header, section, footer, aside, nav, article, figure, figcaption {
display: block;}
body {
color: #666666;
background-color: #f9f8f6;
background-image: url("images/dark-wood.jpg");
background-position: center;
font-family: Georgia, times, serif;
line-height: 1.4em;
margin: 0px;}
.wrapper {
width: 940px;
margin: 20px auto 20px auto;
border: 2px solid #000000;
background-color: #ffffff;}
header {
height: 160px;
background-image: url(img/office.jpg);
}
h1 {
text-indent: -9999px;
width: 940px;
height: 130px;
margin: 0px;}
nav, footer {
clear: both;
color: #ffffff;
background-color: #aeaca8;
height: 30px;}
nav ul {
margin: 0px;
padding: 5px 0px 5px 30px;}
nav li {
display: inline;
margin-right: 40px;}
nav li a {
color: #ffffff;}
nav li a:hover, nav li a.current {
color: #000000;}
section.courses {
float: left;
width: 680px;
border-right: 1px solid #eeeeee;}
article {
clear: both;
overflow: auto;
width: 100%;}
hgroup {
margin-top:40px;}
figure {
float: left;
width: 290px;
height: 220px;
padding: 5px;
margin: 20px;
border: 1px solid #eeeeee;}
figcaption {
font-size: 90%;
text-align: left;}
aside {
width: 230px;
float: left;
padding: 0px 0px 0px 20px;}
aside section a {
display: block;
padding: 10px;
border-bottom: 1px solid #eeeeee;}
aside section a:hover {
color: #985d6a;
background-color: #efefef;}
a {
color: #de6581;
text-decoration: none;}
h1, h2, h3 {
font-weight: normal;}
h2 {
margin: 10px 0px 5px 0px;
padding: 0px;}
h3 {
margin: 0px 0px 10px 0px;
color: #de6581;}
aside h2 {
padding: 30px 0px 10px 0px;
color: #de6581;}
footer {
font-size: 80%;
padding: 7px 0px 0px 20px;}
.current { background-color:#CCCCCC;
color: #000000;}
* {box-sizing: border-box}
/* Full-width input fields */
  input[type=text], input[type=email], input[type=password], textarea, select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=email]:focus, input[type=password]:focus, textarea[type=text]:focus, select {
  background-color: #ddd;
  outline: none;
}
.aa{ background-color:#99CCCC;
border-radius:5px;
padding-top:10px;
padding-left:17px;
padding-right:17px;
padding-bottom:10px;}
.style1 {color: #00FF00}
</style>
</head>
<body>
<div class="wrapper">
<header>
<h1>Yoko's Kitchen</h1>
<nav>
<ul>
<li><a href="../index.php">Home</a></li>
<li><a href="contact.php">Contact Us </a></li>
<li><a href="../index.php">Log Out </a></li>
</ul>
</nav>
</header>
<section class="courses">
<article>
<?php
// if successfully insert data into database, displays message "Successful". 
if($result){
echo "You have successfully registered the project";
}
else {
echo "ERROR: Project was not registered.";
}
 
// close connection 
mysql_close();
?>
<hgroup>
  <h2>Register Project</h2>
</hgroup>
<fieldset>
<form action="" method="post">
<p><label>Project Author
<input name="author" type="text" required placeholder="Enter Project Author">
</label></p>
<p><label>Registration Number
<input name="regnum" type="text" required placeholder="Enter Registration Number">
</label></p>
<p><label>Project Topic
<input name="topic" type="text" placeholder="Enter Project Topic">
</label></p>
<p><label>
<select name="level" required>
	<option value="">---Select Level---</option>
	<option value="ND">ND</option>
	<option value="HND">HND</option>
</select>
</label></p>
<p><label>Project Year
<input name="year" type="text" placeholder="Enter Project Year">
</label></p>
<p><label>Project Abstract
<textarea name="abstract" type="text" placeholder="Enter Project Abstract"></textarea>
</label></p>
<p><label>Select File
<input name="pic" type="file" required >
</label></p>
<center><input type="submit" value="Register" class="aa">  <input type="reset" value="Reset" class="aa"></center>
</form>
</fieldset>
</article>
</section>
<aside>
<section class="popular-recipes">
<h2>Actions:</h2>
<a href="reg_project.php"  class="current">Register Project </a>
<a href="index.php">Search Project </a>
<a href="view_all.php">View All Projects </a>
<a href="view_year.php">View Year Project </a>
<a href="../index.php">Log Out</a></section>
<section class="contact-details">
<h2>Contact</h2>
<p>Computer Science Department,<br />
Directorate of Science and Technology,<br /> 
NILEST, Samaru, Zaria
<br />
Nigeria.
</p>
</section>
</aside>
<footer>
&copy; 2018 Computer Science Department, NILEST
</footer>
</div><!-- .wrapper -->
</body>
</html>