<!DOCTYPE html>
<html>
<head>
<title>View Project</title>
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
background-image: url(../img/logo.bmp);
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
width: 720px;
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
width: 210px;
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
  input[type=text], input[type=email], input[type=password], textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=email]:focus, input[type=password]:focus, textarea[type=text]:focus {
  background-color: #ddd;
  outline: none;
}
.aa{ background-color:#99CCCC;
border-radius:5px;
padding-top:10px;
padding-left:17px;
padding-right:17px;
padding-bottom:10px;}
table {
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
	font-style: normal;
	color: #000000;
}
.style1 {color: #000000}
.style2 {font-size: 13px}
.style3 {font-size: 12px}
.style6 {font-size: 24px}
.style7 {color: #FFFFFF}
</style>
</head>
<body>
<div class="wrapper">
<header>
<h1>Yoko's Kitchen</h1>
<nav>
<ul>
<li><a href="../index.php" class="current">Home</a></li>
<li><a href="contact.php">Contact Us </a></li>
<li><a href="../index.php">Log Out </a></li>
</ul>
</nav>
</header>
<section class="courses">
<article>
<hgroup>
<?php
include ('connect.php');
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$id=$_GET['id'];
$sql="SELECT * FROM project WHERE id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>
<h2 style="padding-left:10px; padding-right:10px;"><?php echo $rows['topic']; ?> </h2>
<p style="padding-left:10px; padding-right:10px;" class="style3">Author: <?php echo $rows['author']; ?> |  <?php echo $rows['level']; echo" "; echo $rows['year']; ?> Project</p>

<h3 style="padding-left:10px; padding-right:10px;">Abstract </h3>
<p class="style1 style2" style="padding-left:10px; padding-right:10px;"><?php echo $rows['abs']; ?> </p>
<br><br>
<center><a href="../files/<?php echo $rows['filename']; ?>" class="style7" style="background-color:#0099CC; border-radius:5px; padding-left:40px; padding-right:40px; padding-top:30px; padding-bottom:10px;"><img src="../img/dl.png" width="40"><span class="style6">View Document</span> </a>
</center>
</article>
</section>
<?php
  //Close Connection
  mysql_close();
  ?>
<aside>
<section class="popular-recipes">
<h2>Actions:</h2>
<a href="reg_project.php">Register Project </a>
<a href="index.php">Search Project </a>
<a class="current">View All Projects </a>
<a href="view_year.php">View Year Project </a>
<a href="">Log Out</a></section>
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