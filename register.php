<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preload" as="font" href="https://fonts.gstatic.com/s/inter/v3/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2" crossorigin="true">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
body{
	background-color:  whitesmoke;
	font-family: "Times New Roman", Times, serif;

}
.navbar{
	top: 0px;
	position: fixed;
	left: 10px;
	right: 10px;
	height: 120px;
	background-color: white;


}
.alt{
	position: relative;
	font-size: 15px;
	float: right;
	margin-top: -20px;
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
}

.left{
	position: fixed;	
	margin-top: 100px;
	height: 300px;
	box-sizing: content-box;
	box-shadow: 2px 2px 2px lightslategray;
	border-radius:20px;
	padding: 10px;
	border:1px  dotted lightslategray;
	background-color: white;
	margin-left: 10px;
	color: black;
}
.left img{
	position: static;
	margin-top: -80px;
	margin-left: 110px;
}
 
.right{
	margin-top: 150px;
	margin-left: 380px;
	box-sizing: content-box;
	box-shadow: 2px 2px 2px lightslategray;
	border-radius:20px;
	padding: 10px;
	background-color: white;
	overflow: scroll;

}
.left h3{
	margin-top: 30px;
	text-align: center;
}
.paraleft{
	color: #445578;
	padding-left: 30px;
	list-style: none;
}
.right h2{
	text-align: center;
}
.right label{
	color: #445578;
	padding-top:50px;
	margin-top: 90px;
	font-size: 15px;
	font-weight: bolder;
	position: static;
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
   	font-family: "Times New Roman", Times, serif;
	color: #445578;
	font-size: 19px;
	line-height: 22px;
	padding: 9px 16px 11px;
	border-style: groove;
	border-radius: 4px;
	outline: none;
	width: 520px;
}
.small{
	color: #445578;
	margin-top: -20px;
	font-size: 15px;
}
.wstatus{
	padding: 15px;
	margin-left: 10px;
	background-color: white;
	border: 1px solid black;
	color: gray;
	border-radius: 5px;
	cursor: pointer;
}
.right .wstatus p{
	font-size: 17px;
	margin-top: 3px;
	color: #457eff;
	margin-bottom: 3px;
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
	cursor: pointer;
	padding: 10px 15px;
	background-color: #457eff;
	color: white;
	border-style: none;
	border-radius: 20px;
}

.error{
	color: red;
	font-size: 13px;
	margin-top: 0px;
	margin-bottom: 10px;
	margin-left: 6px ;
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
	font-size: 24px;

}
.ticicon{
	display: none;
	position: absolute;
	margin-top: -80px;
	margin-left: 245px;
}
.ticicon1{
	display: none;
	position: absolute;
	margin-top: -80px;
	margin-left: 535px;
}
.ticleft{
	color: #18c1a3;
	font-size: 17px;
}
.wstsicon{
	color: #445578;
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
	<p class="alt">Already Register? <a href="login.php">Login</a> Here</p>
</div>
<div class="container">
	<div class="left">
		<img src="https://static.naukimg.com/s/7/104/assets/images/green-boy.c8b59289.svg">
		<h3>On registering you can</h3>
		<li class="paraleft"><i class="fa fa-check-circle ticleft"></i>Build your profile and let recruiters find you</li><br>
		<li class="paraleft"><i class="fa fa-check-circle ticleft"></i>Get job</li><br>
		<li class="paraleft"><i class="fa fa-check-circle ticleft"></i>Find a job and grow your career</li>
	</div>
	<div class="right">
		<h2>Find a job & grow your career</h2>
	<form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype=multipart/form-data name="myForm">
			<label>Full Name</label><span class="error" id="nameErr">*</span>
			<input class="ins" type="text" id="name" name="yname" placeholder="What is your name?">
			

			<label>Email is </label><span class="error" id="emailErr">*</span>
			<input id="email" class="ins" type="text" name="email" placeholder="Tell us your Emain id ">
			
			<label>Password</label><span class="error" id="passErr">*</span>
			<input id="pass" class="ins" type="password" name="pass" placeholder="Create a password for your account">
			<span class="small">Minimum 8 characters(minimum one symbol,number,caps and small letters)</span>

			<label>Mobile Number</label><span class="error" id="numErr">*</span>
			<input id="num" class="ins" type="text" name="num" placeholder="Enter your Mobile Number" maxlength="10">
			<span class="small">Recruiters will call you on this number</span>

			<label>Work status</label><span class="error" id="stsErr"></span>
			<div class="btn">
			<button type="button" class="wstatus" id="Experience" onclick="Clicked()"><p><i class="wstsicon fa fa-briefcase"></i>I'm Experienced</p><span class="small">I'm already worked in companies</span></button><span id="ticicon" class="ticicon"><i id="tic" class="tic fa fa-check-circle"></i></span><button class="wstatus" type="button" id="Fresher" onclick="clicked2()"><p><i class="wstsicon fa fa-portrait"></i>I'm Fresher</p><span class="small">I'm student.I don't worked anywhere</span></button><span id="ticicon1" class="ticicon1"><i id="tic" class="tic fa fa-check-circle"></i></span><br>
			</div>
			<label>Resume</label>
			<div class="btn">
			<button id="resupld" class="resupld" onclick="upload()" type="button">Upload Resume</button><input id="upld" type="file" name="resume" onchange="ValidateSingleInput(this)" hidden> <span class="error" id="fileErr">*<p id="fileList"></p></span>
			</div>

			<span class="small">Recruiters first preference to candidates who have a resume</span>
			<div class="btn">

			<input id="whatsapp" type="checkbox" name="Whatsapp"><span class="small">Send me important updates on whatsapp</span>
			<span class="small">By clicking Register you agree to the <a href="#">Terms and conditions</a> & <a href="#">Privacy Policy</a></span>
			</div>

			<div class="btn">
			<input id="reg" class="register" type="submit" onclick="validate()" name="register" value="Register Now"> 
			</div>	

		</form>
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
        break;
        case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
        	
        	$d =  "hi";
        break;
        case 'application/vnd.oasis.opendocument.text';
        	$d = "hello";
        default:
            $d = "Unknown/not permitted file type(selct .pdf file format)";
        break;
    }
}
}
?>

<script>
 		printError("fileErr","<?php echo $d; ?>");

var ticicon = document.getElementById("ticicon");
var ticicon1 = document.getElementById("ticicon1");

var clicked = false;
function validate(){
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pass").value;
	var num = document.getElementById("num").value;
	var Experience = document.getElementById("Experience").value;
	var Fresher = document.getElementById("Fresher").value;
	var upld1 = document.getElementById("upld").value;
	var whatsapp = document.getElementById("whatsapp");

	if(name == ""){
		chname = "Fill the Full Name";
	}
	else{
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
		chname = "Name must be Letters";
		} else{
		chname = "";
		}

     }
	
	if(email == ""){
		chemail = "Fill the Email";
	}
	else {
        var regex = /^\S+@\S+\.\S+$/;                
        if(regex.test(email) === false) {
			chemail = "Enter a Valid Email";
        } 
		else{
			chemail = "";
		}
	}
	if(pass == ""){
		chpass = "Fill the Password";
	}
	 else {
        var regex = /^(?=.*[0-9])(?=.*[!@#$%^&*.,])[a-zA-Z0-9!@#$%^&*.,]{6,16}$/;                
        if(regex.test(pass) === false) {
          chpass = "Please enter a valid password";

        }
		else{
			chpass = "";
		}
	}
	if(num == ""){
		chnum = "Fill the Mobile Number";
	}
	else{
        var regex = /^[6789][0-9]{9}/;
        if(regex.test(num) === false){
           chnum = "please enter a valid number";
        }
		else{
			chnum = "";
		}
	}
	if(clicked == true){
		chwork = "";		
	}
	else{
		chwork = "please click any one of Work status";
	}
	if(upld1 == ""){
	    chupld = "No file selected for resume";
	}
	else{
		chupld = "";	
	}

	if(whatsapp.checked == true){
		chwhatsapp = "";
	}
	else{
		chwhatsapp = "Click the Check Box";

	}

if (chname == "" && chemail == "" && chpass == "" && chnum == "" && chwork == "" && chupld == "" && chwhatsapp == ""){
	alert("Register success");
	 window.location.href='login.php';
}
else{
	alert("failed");
	alert(chname +"\n"+chemail+"\n"+chpass+"\n"+chnum+"\n"+chwork+"\n"+chupld+"\n"+chwhatsapp);
	 window.location.href='register.php';

}
}

printError("stsErr","* Enter your status");

function Clicked(){
	var Experience = document.getElementById("Experience");
	printError("stsErr","");
	Experience.style.borderColor = "#457eff";
	Fresher.style.borderColor = "black";
	ticicon.style.display = "block";
	ticicon1.style.display = "none";
	clicked = true;

}

function clicked2(){
	var Fresher = document.getElementById("Fresher");
	printError("stsErr","");

	Fresher.style.borderColor = "#457eff";
	Experience.style.borderColor = "black";

	Experience.style.color = "black";
	Experience.style.backgroundColor = "white";
	ticicon1.style.display = "block";
	ticicon.style.display = "none";
	clicked = true;

	}
function display(){
	console.log("hello");
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
     printError("nameErr", "Fullname is reqired");
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
document.getElementById("num").onblur=function() {	
var num = document.myForm.num.value;
	var ynum = document.getElementById("num");		
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


};
function ValidateSingleInput(oInput) {
	var filepath = oInput.value.split("\\");
	var filename =  filepath[filepath.length - 1];
	var allowedExtensions = /(\.pdf|\.odt|\.docx)$/i;
	if(!allowedExtensions.exec(filepath)){
		fileErr.style.color = "red";
		printError("fileErr",filename+" is not valid. Enter valid Format(Ex:.pdf,.odt,.docx)");
		oInput.value = "";
	}
	else{

		fileErr.style.color = "green";
		printError("fileErr",filename);
		oInput.value = filename;

	}

 }



</script>
</body>
</html>
