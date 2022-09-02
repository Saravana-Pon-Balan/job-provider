<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<style>
body{
	background-color:  whitesmoke;
	font-family: "Times New Roman", Times, serif;
}
.navbar{
   	font-family: "Times New Roman", Times, serif;
	margin-top: -30px;
	position: fixed;
	left: 0;
	right: 0;
	height: 150px;
	background-color: white;
}
.navbar a {
   	font-family: "Times New Roman", Times, serif;
	position: relative;
	cursor: pointer;
	float: left;
	color: gray;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
}

.navbar .cont:hover{
	font-family: "Times New Roman", Times, serif;
	color: black;
 	border-bottom: 5px solid orangered;
 	border-radius: 5px;
}
.navcon{
   	font-family: "Times New Roman", Times, serif;
	margin-top: 60px;
}
.container {
	height: 740px;
	width: 100%;
	position: static;
	display: flex;
	flex-wrap: wrap;
	margin-left: 50px;
	margin-right: 100px;
	padding-right: 50px;
	overflow: scroll;
}

.container .left{	
	flex: 40%;
	padding-left: 20px;
	box-sizing:content-box;
	box-shadow: 2px 2px 2px lightslategray;
	background-color: white;
	margin-top: 200px;
	margin-right: 30px;
	border-radius: 10px;
}
.left .head{
	margin-top: 50px;
	margin-left: 10px;
}
.hint{
	padding: 7px;
	list-style: none;
}
.hint button{
	background-color: white;
	border-style: none;
	border: 1px solid blue;
	color: royalblue;
	padding-right: 20px;
	padding-left: 20px;
	padding-top: 5px;
	padding-bottom: 5px;
	cursor: pointer;
}

 
.container .right{
	flex:25%;
	padding-left: 20px;
	box-sizing:content-box;
	box-shadow: 2px 2px 2px lightslategray;
	background-color: white;
	margin-top: 200px;
	border-radius: 10px;
	padding-right: 10px;
	padding-bottom: 20px;

	
}
.right label{
	font-size: 15px;
	font-weight: bolder;
}
.small{
	font-size:13px;
	text-decoration: none;
	margin-left: 210px;
}
.show{
	padding: 10px;
	cursor: pointer;
	color: #4a90e2;
	font-size: 13px;
	background-color: white;
	margin-top: 3px;
	margin-left: -52px;
	position: absolute;
}
.right .ins{
   	font-family: "Times New Roman", Times, serif;
	color: lightslategray;
	font-size: 16px;
	line-height: 22px;
	padding: 9px 11px 6px;
	border-style: groove;
	border-radius: 4px;
	outline: none;
	width: 280px;
}
.login{

	cursor: pointer;
	text-align: center;
	padding-right: 140px;
	padding-left: 130px;
	padding-top: 10px;
	padding-bottom: 10px;
	border-radius: 20px;
	background-color: #457EFF;
	color: white;
	border-style: none;
}
.otp{
	font-size: 13px;
	margin-left: 100px;
	color: blue;
}
.google{
	margin-top:10px;
	padding-left: 90px;
	padding-right: 90px;
	padding-top: 10px;
	padding-bottom: 10px;
	text-align: center;
	background-color: white;
	border-style: none;
	border: 1px solid gray;
	border-radius: 20px;

}
.or{
	color: black;
	font-weight: bolder;
	background-color: white;
	position: absolute;
	margin-top: -15px;
	margin-left: 140px;
	font-size: 11px;
	text-align: center;
}
@media only screen and (max-width:600px){

 body {
 	font-family: "Times New Roman", Times, serif;
  	max-width: 100%;
  	max-height: 100%;
  	margin-left: 0px;
  	margin-right: 0px;
    background-color: lightblue;
  }
  .navbar{
	margin-top: -30px;
	position: static;
	left: 0;
	right: 0;
	height: 150px;
	background-color: white;  
}
.navbar .cont:hover{
	color: black;
 	border-bottom: 0px;
}
  .navbar > .for{
  	display: block;
  	margin-left: 40px;
  	padding-right: 0px;
  	font-size: 12px;
  	font-weight: bolder;
  }
  .navbar > .for ~ .for{
  	margin-left: 0px;
  }
  .navbar .for:focus{
  	color: black;
  	font-size: 17px;
  	font-weight: bolder;
   }
  .navcon{
  	display: none;
  }
  .container {
    height: 760px;
	position: static;
	margin-left: 10px;
	margin-right: 100px;
	padding-right: 0px;
	overflow: scroll;
}
  .container .left{	
	position: absolute;
	box-sizing:border-box;
	background-color: white;
	margin-top: 20px;
	margin-right: 30px;
	border-radius: 10px;
	width: 90%;
}
 .container .right{
 	width: 90%;
 	position: absolute;
	margin-left: 0px;
	padding-left: 10px;
	box-sizing:content-box;
	box-shadow: 2px 2px 2px lightslategray;
	background-color: white;
	margin-top: 350px;
	border-radius: 10px;
	
}
.right .ins{
   	font-family: "Times New Roman", Times, serif;
	color: lightslategray;
	font-size: 16px;
	line-height: 22px;
	padding: 9px 11px 6px;
	border-style: groove;
	border-radius: 4px;
	outline: none;
}


}
</style>
</head>
<body>
<div class="navbar">
	<a class="logo" href="#"><?php include "header.php"; ?></a>
	<a class="navcon cont for" href="#">JOBS</a>
	<a class="navcon cont" href="#">RECRUITERS</a>
	<a class="navcon cont" href="#">COMPANIES</a>
	<a class="navcon cont" href="#">TOOLS</a>
	<a class="navcon cont" href="#">SERVICES</a> 
	<a class="navcon cont" href="#">MORE</a>
	<a class="navcon cont" href="#">LOGIN</a>
	<a class="navcon cont for" href="#">FOR EMPLOYERS</a>
</div>
<div class="container">
	<div class="left">
		<h2 class="head">New to Job Provide?</h2>
		<li class="hint">one click apply using jobprovider profile.</li>
		<li class="hint">Get relevent Job recommendation.</li>
		<li class="hint">Showcase profile to top compaies and consultant.</li>
		<li class="hint">Know application status on applied jobs</li>
		<li class="hint"><button type="button" onclick="register()">Register for FREE</button></li>
	</div>
	<div class="right">
		<h2 class="head">Login</h2>
		<label>Email Id/Username</label><br>
		<input class="ins" type="text" name="username" placeholder="Enter EmailId/Username"><br>
		<label>Password</label><br>
		<input id="pwd" class="ins" type="Password" name="pass" maxlength="30" placeholder="Enter Password"><span onclick="show()" id="eye" class="show">Show</span><br><a href = "#" class="small">Forgot Password?</span><br>
		<input class="login" type="submit" name="login" value="Login">
		<p class="otp">Use OTP to login</p>
		<hr><p class="or">OR</p>
		<button class="google" type="button">Sign in with Google</button>
	</div>
</div>
<script>
	function register(){
		window.location.href = "register.php";
	}
	function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        document.getElementById("eye").innerHTML = "Hide";
        show();
    } else {
        pwShown = 0;
        document.getElementById("eye").innerHTML = "Show";
		hide();
    }
}, false
);
</script>
</body>
</html>