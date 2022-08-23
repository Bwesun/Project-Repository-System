<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<style type="text/css">
header, section, footer, aside, nav, article, figure, figcaption {
display: block;}
body {
color: #666666;
background-color: #f9f8f6;
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
.style2 {color: #000000;  font-family: "Times New Roman", Times, serif; }
.style3 {
	color: #FF33FF;
	font-weight: bold;
}
.style4 {color: #FF33FF; font-family: "Times New Roman", Times, serif; }
.style5 {font-family: "Times New Roman", Times, serif}
#td{border-bottom:4px solid #33CCCC;
}
#tab_td_spec{ border-right:1px solid #33CCCC;
border-bottom: 1px solid #FFFFFF;
border-radius: 5px;
}
.style7 {font-weight: bold}
.style8 {color: #FF33FF; font-family: "Times New Roman", Times, serif; font-weight: bold; }
.style9 {color: #000000; font-weight: bold; }
</style>
</head>
<body>
<?php
include ('connect.php');
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

	$i=1;
$id=$_POST['year'];
$sql="SELECT * FROM project WHERE year='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_assoc($result);

?>
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

<hgroup>
<h2>YEAR SORTED PROJECTS</h2>
</hgroup><table cellpadding="3">
  <tr>
    <td id="td" class="style3" width="86"><div align="center" class="style4 style7">
      <h4>Author's Reg. No</h4>
    </div></td>
    <td id="td" class="style3" width="126" ><div align="center" class="style8">
      <h4>Author's Name</h4>
    </div></td>
    <td id="td" class="style3" width="34"><div align="center" class="style8">
      <h4>Level</h4>
    </div></td>
    <td id="td" class="style3" width="307"><h4 class="style3"><span class="style5">Project Topic</span></h4></td>
	 <td id="td" class="style3" width="63"><div align="center" class="style8">
	   <h4 align="left">Year</h4>
	 </div></td>
  </tr>
  <?php
	while($rows=mysql_fetch_array($result)){

?>
  <tr>
    <td id="tab_td_spec" class="style2"><h5 class="style9"><?php echo $rows['regnum']; ?></h5></td>
    <td id="tab_td_spec" bordercolor="#FFFF00" class="style2"><h5 class="style9"><?php echo $rows['author']; ; ?></h5></td>
    <td id="tab_td_spec" class="style2"><h5 class="style9"><?php echo $rows['level']; ?></h5></td>
    <td id="tab_td_spec" class="style2"><h5 class="style9"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a></h5></td>
    <td id="tab_td_spec" class="style2"><h5 class="style9"><?php echo $rows['year']; ?></h5></td>
  </tr>
  <?php 
  }
  mysql_close();
  ?>
</table>
</article>
</section>
<aside>
<section class="popular-recipes">
<h2>Actions:</h2>
<a href="reg_project.php">Register Project </a>
<a href="index.php">Search Project </a>
<a href="view_all.php">View All Projects </a>
<a href="view_year.php" class="current">View Year Project </a>
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