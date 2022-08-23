<!DOCTYPE html>
<head>
	<title>Login</title>
<style>
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
background-image: url(img/logo.bmp);
background-repeat:no-repeat;
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
height: 50px;}
nav ul {
margin: 0px;
padding: 5px 0px 5px 30px;}
nav li {
display: inline;
margin-right: 40px;}
nav li a{
color: #ffffff;}
nav li a:hover, nav li a.current {
color: #000000;}
section.courses {
float: left;
width: 800px;
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

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close, .close2, .close3 {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close, .close2, .close3:hover,
.close, .close2, .close3:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
} 

.fade
{
        opacity:0.5;
}
.fade:hover
{
        opacity:1;
}
.grow:hover
{
        -webkit-transform: scale(2.3);
        -ms-transform: scale(1.3);
        transform: scale(2.6);
}
.rotate:hover
{
        -webkit-transform: rotateZ(-30deg);
        -ms-transform: rotateZ(-30deg);
        transform: rotateZ(-30deg);
}
.circle{padding:10px;
border: 1px solid orange;
}
.circle:hover
{
        border-radius:50%;
}
.threed:hover
{
        box-shadow:
                1px 1px #53a7ea,
                1px 1px #53a7ea,
                1px 1px #53a7ea;
        -webkit-transform: translateX(-3px);
        transform: translateX(-3px);
}
.border:hover
{
        box-shadow: inset 0 0 0 25px #53a7ea;
}
 .mybtns{position:fixed;
top:30px;
left:1100px;}
.aa{ background-color:#99CCCC;
border-radius:5px;
padding-top:10px;
padding-left:17px;
padding-right:17px;
padding-bottom:10px;}

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
.aa1 {background-color:#99CCCC;
border-radius:5px;
padding-top:10px;
padding-left:17px;
padding-right:17px;
padding-bottom:10px;}
</style>
<body>
<button class="aa mybtns" id="myBtn">Register</button> 


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    
	<fieldset>
	<form action="reg_ac.php" method="post" enctype="multipart/form-data" name="FormReg">
	  <label>Registration No.
	  <input name="regnum" type="text" value="">
	  </label>
	  <p>
	    <label>Surname
	    <input type="text" name="sname">
	    </label>
	  </p>
	  <p>
	    <label>Firstname
	    <input type="text" name="fname">
	    </label>
	  </p>
	  <p>
	    <label>Othername(s)
	    <input type="text" name="oname">
	    </label>
	  </p>
	  <p>
	    <label>
	    <input type="radio" name="gender" value="male">
Male</label>
	    <label>
	    <input type="radio" name="gender" value="female">
Female</label>
</p>
	  <p> <label>Date of Birth
	    <input type="date" name="dob"></label></p>
		<p> <label>Phone Number
	    <input type="text" name="phone"></label></p>
		<p> <label>Email
	    <input type="email" name="email"></label></p>
		<p> <label>Username
	    <input type="text" name="username"></label></p>
		<p> <label>Password
	    <input type="text" name="password"></label></p>
		<input class="aa" type="submit" value="Register"> <input class="aa" type="reset" value="Reset">
	</form>
	
	</fieldset>
  </div>
</div> 
<script>
// Get the modal for registration
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
} 
</script>

<div class="wrapper">
<header>
<h1>DEPARTMENT OF COMPUTER SCIENCE</h1>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="" class="current">Student Login</a></li>
<li><a href="alogin.php">Admin Login </a></li>
<li><a href="">Contact Us </a></li> 
</ul>
</nav>
</header>
<section class="courses">
<article>
<hgroup>
<h2>Students Login </h2>
</hgroup>
<form action="checklogin.php" method="post" enctype="multipart/form-data">
  <label>Username
  <input type="text" name="username">
  </label>

  <label>Password
  <input type="password" name="password">
  </label>
  <center><input name="submit" type="submit" class="aa1" value="Login"></center>
</form>


</article>
</section>

<footer>
&copy; 2018 Computer Science Department, NILEST
</footer>
</div><!-- .wrapper -->
</body>
</html>