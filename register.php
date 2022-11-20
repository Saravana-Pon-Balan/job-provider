<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link href="./build/css/intlTelInput.css" rel="stylesheet">

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<style>
body{
	background-color: #fafbfe;
	font-family: Inter;
	font-weight: 400;
	font-size: 14px;
	line-height: 18px;
	width: 100%;
}
.navbar{
	display: flex;
	top: 0px;
	height: 95px;
	background-color: white;
	border-bottom: 1px solid #eaf1f5;;


}
.logo{
	margin-top: -3px;
	margin-left: 20px;
	padding: 0;

}
.alt{
	float: right;
	margin-left: 900px;
	right: 0px;
	margin-top: 20px;
}
a{
	text-decoration: none;
	color: royalblue;

}
.container {
	position: static;
  	margin-left: 50px;
  	margin-right: 200px;
  	padding-right: 50px;
  	display: flex;
  	margin: 0 auto;
}

.left{
	width: 320px;
	float: left;
	position: fixed;	
	margin: 155px 0 0;
	height: 300px;
	box-sizing: border-box;
	border-radius:20px;
	padding: 10px;
	border:1px  dashed #d3e1ea;
	background-color: white;
	margin-left: 10px;
	color: black;
}
.left p{
	width: 180px;
	margin-left: 20px;
	font-size: 13px;
	color: #445578;
	word-wrap: break-word;
}
.left img{
	position: static;
	margin-top: -80px;
	margin-left: 110px;
}
 
.right{
	width: calc(100% - 320px);
	float: right;
	margin-top: 0px;
	margin-left: 380px;
	box-sizing: content-box;
	border-radius:20px;
	padding: 0 10% 5%;
	background-color: #fff;
	overflow: scroll;

}
.rcontent{
	margin-top: 90px;
	margin-left: 0px;
	word-wrap: break-word;

}
.rythead{
	font-family: Roboto Slab;
	font-size: 32px;
	font-weight: 700;
	line-height: 28px;
	word-wrap: break-word;
}
.left h2{
	margin-top: 30px;
	text-align: center;
}
.paraleft{
	margin: 16px 0;
	width: 280px;
	padding-left: 22px;
	color: #445578;
	padding-left: 30px;
	font-size: 13px;
	line-height: 18px;
	list-style: none;
	word-wrap: break-word;
}
.right h2{
	text-align: center;
}
.right label{
	transition: inherit;
	font-family: inherit;
	color: #445578;
	font-weight: bolder;
	font-size: 13px;
	line-height: 18px;
	word-wrap: break-word;
	padding-bottom: 4px;
}
label::before{
    content: "\a\a";
    white-space: pre;
}
input::before{
    content: "\a\a";
    white-space: pre;
}
.btn::before{
    content: "\a";
    white-space: pre;
}


.ins{
	background-color: #fff;
	color: #445578;
	font-size: 17px;
	font-family: inherit;
	font-weight: 400;
	line-height: 22px;
	padding: 9px 16px 11px;
	border-style: groove;
	border-radius: 4px;
	outline: none;
	width: 520px;
}
input[type = "tel"]{
	width: 560px;
}
.small{
	color: #445578;
	font-size: 15px;

}
.small1{
	color: #445578;
	font-size: 15px;
}
.small::before{
    content: "\a";
    white-space: pre;
}
.wstatus{
	width: 270px;
	padding: 10px;
	margin-left: 10px;
	background-color: white;
	border: 1px solid #d3e1ea;
	color: gray;
	border-radius: 20px 5px 20px 5px;
	cursor: pointer;
}
.right .wstatus p{
	font-size: 17px;
	font-weight: bolder;
	margin-top: 0px;
	color: #457eff;
	margin-bottom: 3px;
}
.wstatus span{
	color: #445578;
	margin-top: 20px;
	font-size: 15px;
}
.check{
	margin-top: -20px;
	margin-left: 415px;
	color: #445578;
	font-size: 13px;
}
input[type="file"]{
	padding: 10px;
}
.resupld{
	color: white;
	border-style: none;
	background-color: #ff7555;
	border-radius: 15px;
	padding-left: 15px;
	padding-right: 15px;
	padding-top:7px ;
	padding-bottom: 7px;
	cursor: pointer;
	font-weight: 600;
}
.small a{
	text-decoration: none;
}
.register{
	font-size: 17px;
	padding: 10px 15px;
	background-color: #457eff;
	cursor: pointer;
	color: white;
	border-style: none;
	border-radius: 20px;

}
.register:disabled{
	background-color: #d3e1ea;
}

.error{
	color: #ee5c5c;
	font-size: 13px;
	margin-top: 0px;
	margin-bottom: 10px;
	margin-left: 8px ;
	position: static;

}
#fileList{
	position: absolute;
	margin-top: -30px;
	margin-left: 140px;
	list-style: none;
}
.tic{
	color: royalblue;
	font-size: 20px;

}
.ticicon{
	display: none;
	position: absolute;
	margin-top: -87px;
	margin-left: 266px;
	background: white;
}
.ticicon1{
	display: none;
	position: absolute;
	margin-top: -87px;
	margin-left: 551px;
	background: white;
}
.ticleft{
	display: inline-block;
	position: absolute;
	color: #18c1a3;
	font-size: 17px;
}
.wstsicon{
	color: royalblue;
	padding-right: 10px;
}
.footer{
	text-align: center;
	position: absolute;
	margin-top: 40px;
	margin-bottom: 40px;
	padding-bottom: 50px;
}
.footer p{
	font-size: 15px;
	color: #8292b4;
}
#ccity{
	display: none;
}
#cstate{
	display: none;
}
#ccountry{
	display: none;
}
#ccity p{
	font-size: 13px;
	line-height: 20px;
	color: #8292b4;
}
.suggestions span{
	background: #fff;
	border: 1px solid #d3e1ea;
	font-weight: 700;
	font-size: 13px;
	line-height: 18px;
	color: #445578;
	width: auto;
	height: auto;
	padding: 4px 12px;
	border-radius: 14px;
	margin: 6px 6px 0 0 ;
	cursor: pointer;
}
#placevalue{
	display: none;
	position: absolute;
	background: #fff1ed;
	border: 1px solid #ffbfad;
	color: #1b2437;
	font-weight: 500;
	font-size: 13px;
	line-height: 18px;
	color: #445578;
	width: auto;
	height: auto;
	padding: 4px 12px;
	border-radius: 14px;
	margin: 6px 6px 0 10px;
}
.placevalue{
	display: flex;
}
#areaName{
	  max-width: 200px;
	  overflow: hidden;
	  white-space: nowrap;
}
#crossbtn{
	display: none;
	opacity: 1;
	position: relative;
	height: auto;
	width: auto;
	color: #445578;
	margin-left: 8px;
	padding: 5px;
	font-size: 9px;
	background: transparent;
	color: #000;
	border: none;
	cursor: pointer;
}
.doctype{
	color: #8292b4;
	margin-top: 0;
	font-size: 11px;
	line-height: 14px;
	width: fit-content;
	padding-right: 12px;
	padding-left: 5px;
}
.resume{
	display: flex;
	justify-content: flex-start;
	border-radius: 28px;
	border: 1px solid #eaf1f5;
	width: fit-content;
	
}
.whatscheck{
	display: flex;
	margin-top: 15px;
}
.progress{
	display: none;
    position: relative;
    height: 10px;
    width: 50%;
    border: 1px solid ghostwhite;
    border-radius: 15px;
}
.progress .color{
    position: absolute;
    background-color: lightseagreen;
    width: 0px;
    height: 8px;
    border-radius: 15px;
    animation: progres 4s infinite linear;  
    animation-iteration-count: 1;  
}
.files {
	display: none;
	justify-content: flex-start;
	width: fit-content;
}
.files i{
	float: left;
	color: #8292b4;
	font-size: 18px;
	padding-right: 8px;
}
.if{
	margin-right: 20px;
	max-width: 360px;
}
.files h3{
	border: 1px solid #eaf1f5;
	border-radius: 28px;
	padding: 10px 16px 4px 10px;
	line-height: 22px;
	font-weight: 600;
	font-size: 17px;
}
.files h3 .filename{
	max-width: calc(100% - 85px);
	min-width: 250px;
	font-size: 15px;
	line-height: 14px;
	font-weight: 400;
	float: left;
	text-overflow: ellipsis;
	overflow: hidden;
	white-space: nowrap;
}
.replc{
	font-size: 13px;
	line-height: 14px;
	vertical-align: top;
	margin-left: 8px;
	cursor: pointer;
	color: #457eff;
}
.files i:last-child{
	font-size: 18px;
	padding-top: 28px;
	cursor: pointer;

}
.files .if .info{
	display: inline-block;
	font-size: 11px;
	margin-top: 4px;
	color: #8292b4;
}
.info .size{
	border-right: 1px solid #8292b4;
	margin-right: 4px;
	padding-right: 4px;
}

@keyframes progres{
    0%{
      width: 0%;
    }
    25%{
        width: 50%;
    }
    50%{
        width: 75%;
    }
    75%{
        width: 85%;
    }
    100%{
        width: 100%;
    }
}


@media only screen and (max-width: 600px) {
  body {
  	overflow: scroll;
  	height: 870px;
  	max-width: 100%;
  	max-height: 100%;
  	margin-left: 0px;
  	margin-right: 0px;
  }
  .navbar{
  	width: 100%;
  	margin-top: -20px;
  	margin-right: 0px;
  	left: 0px;
  	position: relative;

  }
  .container{
  	height: 740px;
  	width: 100%;
	padding-right: 0px;
  	margin-right: 0px;
  	margin-left: 0px;
 	overflow: scroll;
 	margin-bottom: 0px;
 	position: static;
  }
  .left{
  	display: none;
  }
  .right{
  	border-radius: 5px;
  	width: 340px;
  	box-shadow: none;
  	margin-top: 20px;
  	margin-left: 0px;
  	margin-right:0px;
  	position: relative;
  	overflow: hidden;
  }
  .ins{
	color: lightslategray;
	font-size: 17px;
	line-height: 22px;
	padding: 3px 16px 6px;
	border-style: groove;
	border-radius: 4px;
	outline: none;
	width: 300px;
}
.wstatus{
	padding: 5px;
	width: 150px;
	margin-left: 10px;
	background-color: white;
	border: 1px solid black;
	color: gray;
	border-radius: 5px;
	cursor: pointer;
}
.wstatus span{
	font-size: 12px;
}
.ticicon{
	display: none;
	position: absolute;
	margin-top: -80px;
	margin-left: 145px;
}
.ticicon1{
	display: none;
	position: absolute;
	margin-top: -80px;
	margin-left: 305px;
}
.wstsicon{
	display: none;
}
.footer{
	position: relative;
}
}
</style>
</head>
<body>
<div class="navbar">
		<a class="logo"><?php include "header.php"; ?></a>
	<div class="alt"><p>Already Register? <a href="login.php">Login</a> Here</p></div>
</div>
<div class="container">
	<div class="left">
		<img src="https://static.naukimg.com/s/7/104/assets/images/green-boy.c8b59289.svg">
		<h2>On registering you can</h2>
		<li class="paraleft"><i class="fa fa-check-circle ticleft"></i><p>Build your profile and let recruiters find you</p></li>
		<li class="paraleft"><i class="fa fa-check-circle ticleft"></i><p>Get job postings delivered right to your email</p></li>
		<li class="paraleft"><i class="fa fa-check-circle ticleft"></i><p>Find a job and grow your career</p></li>
	</div>
	<div class="right">
		<div class="rcontent">
		<h1 class="rythead">Find a job & grow your career</h1>
	<form  method="POST" id="myForm"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype=multipart/form-data name="myForm">
			<label>Full Name</label><span class="error" id="nameErr">*</span>
			<input class="ins eins fins" type="text" id="name" name="yname" placeholder="What is your name?">
			

			<label>Email is </label><span class="error" id="emailErr">*</span>
			<input id="email" class="ins eins fins" type="text" name="email" placeholder="Tell us your Email id ">
			<span class="small">We'll send you relevant jobs in your mail</span>

			<label>Password</label><span class="error" id="passErr">*</span>
			<input id="pass" class="ins eins fins" type="password" name="pass" placeholder="Create a password for your account">
			<span class="small">Minimum 8 characters(minimum one symbol,number,caps and small letters)</span>

			<label>Mobile Number</label><span class="error" id="numErr">*</span>
        	<input type="tel" class="ins eins fins" id="phone" name="num" placeholder="Phone Number">
			<span class="small">Recruiters will call you on this number</span>

			<label>Work status</label><span class="error" id="stsErr"></span>
			<div class="btn">
			<button type="button" class="wstatus" id="Experience" name="Experience" onclick="Clicked()"><p><i class="wstsicon fa fa-briefcase"></i>I'm Experienced</p><span>I have work experience (excluding internships)</span></button><span id="ticicon" class="ticicon"><i id="tic" class="tic fa fa-check-circle"></i></span>
			<button class="wstatus" type="button" id="Fresher" name="Fresher" onclick="clicked2()"><p><i class="wstsicon fa fa-shopping-bag"></i>I'm Fresher</p><span>I am a student/ Haven't worked after graduation</span></button><span id="ticicon1" class="ticicon1"><i id="tic" class="tic fa fa-check-circle"></i></span><br>
			<input type="text" name="status" value="Experience" hidden>
			<input type="text" name="status" value="Fresher" hidden>

			</div>
			
			<div id="ccity">
			<label>Current City</label><span class="error" id="cityErr">*</span><div class="check"><input type="checkbox" name="outind" id="outind"><span>Outside of India</span></div> 
			
			<span id="placevalue">
				<span class="placevalue">
					<span id="areaName"></span>
					<button id="crossbtn" type="button" onclick="crossclick()"> 
						<i class="fa fa-close"></i>
					</button>
				</span>
			</span>

			<input id="city" class="ins fins" type="text" name="city" placeholder="Enter Your Current City" maxlength="10">
			<div id="suggest">
			<p>Suggestions:</p>
			<div class="suggestions" >
				<span onclick="cdis(this)">Madurai</span>
				<span onclick="cdis(this)">Bangaloru</span>
				<span onclick="cdis(this)">Hyderabad</span>
				<span onclick="cdis(this)">Mumbai</span>
				<span onclick="cdis(this)">Chennai</span>
				<span onclick="cdis(this)">Tirunelveli</span>
			</div>
			</div>
			</div>

			<div id="cstate">
			<label>Current State</label><span class="error" id="numErr">*</span>
			<input id="state" class="ins fins" type="text" name="state" placeholder="Enter your Current State" maxlength="10">
			</div>

			<div id="ccountry">
			<label>Country Name</label><span class="error" id="numErr">*</span>
			<input id="country" class="ins fins" type="text" name="country" placeholder="Enter your Country" maxlength="10">
			</div>	

			<label>Resume</label>
			<div class="resume" id="resumediv">
			<button id="resupld" class="resupld" onclick="upload()" type="button">Upload Resume</button>
			<input id="upld" type="file" name="resume" onchange="ValidateSingleInput(this)" hidden><div class="doctype"><p>DOC, DOCx, PDF, RTF | Max: 2 MB</p></div>
			</div>
			<div class="progress" id="progress"><div class="color"></div></div>

			<div class="files" id="fresult"><div class="if"><h3><i class="fa fa-paperclip"></i><span class="filename" id="filename"></span><span class="replc" onclick="upload()">Replace</span></h3><div class="info"><span class="size" id="fsize"></span><span id="fmodify"></span></div></div><i class="fa fa-trash-o" onclick="deleteResume()"></i></div>

			<span class="error" id="fileErr"><p id="fileList"></p></span>
			<span class="small" id="reshint">Recruiters first preference to candidates who have a resume</span>

			<div class="btn whatscheck">

			<input id="whatsapp" type="checkbox" name="Whatsapp"><span class="small1">Send me important updates on whatsapp</span>
			</div>
			<span class="small">By clicking Register you agree to the <a href="#">Terms and conditions</a> & <a href="#">Privacy Policy</a></span>
			
			<div class="btn">
			<button id="reg" class="register" type="submit" onclick="validate()" name="register" disabled>Register Now</button> 
			</div>	

		</form>
		</div>
		<div class="footer">
			<a href="#"> About Us </a>|
			<a href="#"> Contact Us </a>|
			<a href="#"> FAQs </a>|
			<a href="#"> Terms and Conditions </a>|
			<a href="#"> Report a Problem </a>|
			<a href="#"> Privacy Policy </a>
			<p>All rights reserved © 2022 Info Edge India Ltd.</p>
		</div>
	</div>
	
	
</div>
<?php 
if(isset($_POST['register'])){
	if($_FILES["resume"]["error"] == 4) {
		$d = "Select any file ";
	}
	else{
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $_FILES['resume']['tmp_name']);
    $ok = false;
    switch ($mime) {
    
        case 'application/pdf':
        	$d = "";
        	$ok = true;
        	break;
        case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
			$d =  "";
        	$ok = true;
			break;
        case 'application/msword';
        	$d = "";
        	$ok = true;
			break;
        case 'application/rtf':
        	$d = "";
        	$ok = true;
        	break;
        default:
            $d = "Unknown/not permitted file type(selct DOC, DOCx, PDF, RTF  file format)";
        break;
    }
    if($_FILES['resume']['size']/1024 >= 2048 && $ok==true) {
        $d = "File too large. File must be less than 2 megabytes.";
      
    }
    else if($ok==true){
    	$d = "File will be uploaded";
    	echo "<script>validatefile();</script>";
    }
}

$name = $_POST['yname'];
$email = $_POST['email'];
$num = $_POST['num'];
$pass = $_POST['pass'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$resume = $_POST['resume'];
$status = $_POST['status'];
$whatsapp = $_POST['Whatsapp'];


if($name!=null&&$email!=null&&$num!=null&&$pass!=null){
	if(isset($_POST['Experience'])){
	echo "<script>alert('hello')</script>";
	}
else{
	echo '<script>alert("hi");</script>';
	}
}
}
?>


<script src="./build/js/intlTelInput.js"></script>
        

<script>
	
inputs = document.querySelectorAll('.eins');
var buttonSend = document.getElementById('reg');
let inputValidator = {
  "yname": false,
  "email": false,
  "pass": false,
  "num":false
}

inputs.forEach((input) => {
  input.addEventListener('input', () => {
    let name = event.target.getAttribute('name');
    if (event.target.value.length > 0) {
      inputValidator[name] = true;
    } else {
      inputValidator[name] = false;
    };

    let allTrue = Object.keys(inputValidator).every((item) => {
      return inputValidator[item] === true
    });

    if (allTrue) {
      buttonSend.disabled = false;
    } else {
      buttonSend.disabled = true;
    }
  })
})


 		printError("fileErr","<?php echo $d; ?>");
function validatefile(){
	resumediv = document.getElementById("resumediv");
	resumediv.style.display = 'none';
	progress = document.getElementById("progress");
	progress.style.display = "block";
}



var input = document.querySelector("#phone");
window.intlTelInput(input,{});
var city = document.getElementById("city");
var ccity = document.getElementById("ccity");
var cstate = document.getElementById("cstate");
var ccountry = document.getElementById("ccountry");


city.onblur = function(){
	city.style.borderColor = "red";
if(city.value == "none"){
	cstate.style.display = "block";
}
}
document.getElementById("outind").addEventListener("click", function(e) {
  if (this.checked) {
	ccountry.style.display = "block";
	suggest.style.display = "none";
  } else {
	ccountry.style.display = "none";
    suggest.style.display = "block";

  }
});
function crossclick(){
	cityname.readOnly = false;
    cityname.placeholder = "Enter Your City Name";
    placevalue.style.display = "none";
    suggest.style.display = "block";

}
function cdis(place){

	areaName =document.getElementById("areaName");
	placevalue =document.getElementById("placevalue");
	crossbtn =document.getElementById("crossbtn");
	cityname = document.getElementById("city");
	suggest = document.getElementById("suggest");
	placevalue.style.display="block";
	crossbtn.style.display = "block";
	areaName.innerHTML=place.innerHTML;
	suggest.style.display="none";
	
	cityname.readOnly = true;
    cityname.placeholder = "";

}
var ticicon = document.getElementById("ticicon");
var ticicon1 = document.getElementById("ticicon1");
var clicked=false;
function Clicked(){
	var Experience = document.getElementById("Experience");
	printError("stsErr","");
	Experience.style.borderColor = "#457eff";
	Fresher.style.borderColor = "#d3e1ea";
	ticicon.style.display = "block";
	ticicon1.style.display = "none";
	ccity.style.display = "none";
	cstate.style.display = "none";
	ccountry.style.display = "none";

}

function clicked2(){
	
	var buttonSend = document.getElementById('reg');

	buttonSend.disabled = true;
	var Fresher = document.getElementById("Fresher");
	printError("stsErr","");

	Fresher.style.borderColor = "#457eff";
	Experience.style.borderColor = "#d3e1ea";

	Experience.style.color = "black";
	Experience.style.backgroundColor = "white";
	ticicon1.style.display = "block";
	ticicon.style.display = "none";

	ccity.style.display = "block";

	inputs = document.querySelectorAll('.fins');


let inputValidator = {
  "yname": false,
  "email": false,
  "pass": false,
  "num":false,
  "city":false,
  "state":false,
  "country":false,
}

inputs.forEach((input) => {
  input.addEventListener('input', () => {
    let name = event.target.getAttribute('name');
    if (event.target.value.length > 0) {
      inputValidator[name] = true;
    } else {
      inputValidator[name] = false;
    };

    let allTrue = Object.keys(inputValidator).every((item) => {
      return inputValidator[item] === true
    });

    if (allTrue) {
      buttonSend.disabled = false;
    } else {
      buttonSend.disabled = true;
    }
  })
})
	}
function validate(){
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pass").value;
	var num = document.getElementById("num").value;
	var Experience = document.getElementById("Experience").value;
	var Fresher = document.getElementById("Fresher").value;
	var upld1 = document.getElementById("upld").value;
	var whatsapp = document.getElementById("whatsapp");	
}

printError("stsErr","* Enter your status");


function display(){
	document.getElementById("reg").style.display = "block";
}
	var resupld = document.getElementById("resupld");
	function upload(){

		var upld = document.getElementById("upld");
		upld.click();
	}
function printError(elemId, hintMsg) {
	document.getElementById(elemId).innerHTML = hintMsg;
}


document.getElementById("name").onblur=function() {			
	
	var name = document.myForm.yname.value;
	var yname = document.getElementById("name");

	 if (name == "") {
     printError("nameErr", "Full Name is reqired");
     yname.style.borderColor = "red";

   }
     
    else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
                 yname.style.borderColor = "red";

        } else {
            printError("nameErr", "");
            nameErr = false;
                 yname.style.borderColor = "royalblue";

        }

     }


};
document.getElementById("email").onblur=function() {			
	

	var email = document.myForm.email.value;
	var ymail = document.getElementById("email");

	 if (email == "") {
     printError("emailErr", "Email ID is reqired");
     ymail.style.borderColor = "red";

   }
     
    else {
        var regex = /^\S+@\S+\.\S+$/;                
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email");
                 ymail.style.borderColor = "red";

        } else {
            printError("emailErr", "");
            emailErr = false;
                 ymail.style.borderColor = "blue";

        }

     }	


};
document.getElementById("pass").onblur=function() {			
	

	var pass = document.myForm.pass.value;
	var ypass = document.getElementById("pass");

	 if (pass == "") {
     printError("passErr", "Password is reqired");
     ypass.style.borderColor = "red";

   }
     
    else {
        var regex = /^(?=.*[0-9])(?=.*[!@#$%^&*.,])[a-zA-Z0-9!@#$%^&*.,]{6,16}$/;                
        if(regex.test(pass) === false) {
            printError("passErr", "Please enter a valid password");
                 ypass.style.borderColor = "red";

        } else {
            printError("passErr", "");
            passErr = false;
                 ypass.style.borderColor = "blue";

        }

     }
};

document.getElementById("phone").onblur=function() {	
var num = document.myForm.num.value;
	var ynum = document.getElementById("phone");
 if (num == "") {
     printError("numErr", "Please enter your Mobile Number");
     ynum.style.borderColor = "red";


     } else{
        var regex = /^[6789][0-9]{9}/;
        if(regex.test(num) === false){
            printError("numErr" , "please enter a valid number");
	          ynum.style.borderColor = "red";


        }
        else{
            printError("numErr","");
            numErr = false;
            ynum.style.borderColor = "royalblue";

        }
     }
/*    var reg =  document.getElementById("reg");
var pass1 = document.getElementById("pass").value;
 var name1 = document.getElementById("name").value;
 var email1 = document.getElementById("email").value;
 var phone1 = document.getElementById("phone").value;

if (name1 && email1 && pass1 && phone1 && clicked){
	reg.disabled = false;
}
else{
	alert("Please fill out reqired fields")
}*/



};
function ValidateSingleInput(oInput) {
	var filepath = oInput.value.split("\\");
	var filename =  filepath[filepath.length - 1];
	var allowedExtensions = /(\.pdf|\.doc|\.docx|\.rtf)$/i;
	fsize = oInput.files[0].size;
	kbsize ='size: '+ Math.floor(fsize/1000) + 'KB';
 	file = oInput.files[0];
    lastModified =  new Date(file.lastModified);
	
	if(!allowedExtensions.exec(filepath)){
		fileErr.style.color = "red";
		printError("fileErr",filename+" is not valid. Enter valid Format(Ex: pdf,doc,docx,rtf format)");
		oInput.value = "";
		
	}
	else if(fsize>2000000){
		printError("fileErr", "file size must be a lessthan 2mp");
		oInput.value = "";
	}
	else{
		document.getElementById("fsize").innerHTML = kbsize;
		document.getElementById("fmodify").innerHTML = lastModified;
		document.getElementById("filename").innerHTML = filename;
		document.getElementById("fresult").style.display = "none";
		document.getElementById("reshint").style.display = "none";
		document.getElementById("resumediv").style.display = "none";
		document.getElementById("progress").style.display  = "block";
		fileErr.style.color = "#445578";
		fileErr.style.fontSize = "12px";

		printError("fileErr", "Please wait while we are reading your Resume");
		setTimeout("calldis()",4000)


 }
}
function calldis(){
	document.getElementById("fresult").style.display = "flex";
	document.getElementById("resumediv").style.display = "none";
	document.getElementById("progress").style.display  = "none";
	printError("fileErr", "");


}
function deleteResume(){
	document.getElementById("fresult").style.display = "none";
	document.getElementById("resumediv").style.display = "flex";
	document.getElementById("progress").style.display  = "none";
	oInput.value = "";


}



</script>
</body>
</html>
