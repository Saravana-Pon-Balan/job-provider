<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<style>
body{
	background-color:  whitesmoke;

}
.navbar{
	margin-top: -20px;
	position: fixed;
	left: 10px;
	right: 10px;
	height: 120px;
	background-color: white;


}
.alt{
	position: relative;
	font-size: small;
	float: right;
	margin-top: -20px;
}
.alt a{
		text-decoration: none;

}
.container {
	position: static;
  display: flex;
  flex-wrap: wrap;
  margin-left: 50px;
  margin-right: 200px;
  padding-right: 50px;
}

.left{	
	flex: 20%;
	margin-top: 300px;
	height: 250px;
	box-sizing: content-box;
	box-shadow: 12px 12px 12px lightslategray;
	border-radius:20px;
	padding: 10px;
	background-color: white;
	text-align: center;
	color: black;
	overflow: scroll;
}
 
.right{
	flex:50%;
	margin-top: 150px;
	margin-left: 50px;
	box-sizing: content-box;
	box-shadow: 12px 12px 12px lightslategray;
	border-radius:20px;
	padding: 10px;
	background-color: white;
	overflow: scroll;

}
.paraleft{
	padding-left: 30px;
	list-style: none;
}
.right h2{
	text-align: center;
}
.right label{
	font-size: 11px;
	font-weight: bolder;
	position: relative;
}

.ins{
	padding: 5px;
	padding-right: 370px;
	border-style: none;
	outline: none;
	border: 1px solid blue;
	border-radius: 5px;
}
.small{
	margin-top: -20px;
	font-size: 10px;
}
.wstatus{
	padding: 5px;
	margin-left: 10px;
	background-color: white;
	border: 1px solid black;
	border-radius: 5px;
	cursor: pointer;
}
.right .wstatus p{
	margin-top: 3px;
	color: royalblue;
	margin-bottom: 3px;
}
.right .wstatus span{
	padding: 0px;
}
input[type="file"]{
	padding: 10px;
}
.resupld{
	color: white;
	border-style: none;
	background-color: rgba(15, 150, 150, 1.0);
	border-radius: 15px;
	padding-left: 10px;
	padding-right: 10px;
	padding-top:5px ;
	padding-bottom: 5px;
	cursor: pointer;
}
span a{
	text-decoration: none;
}
.register{
	pointer-events: none;
	cursor: pointer;
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 7px;
	padding-bottom: 7px;
	background-color: blue;
	color: white;
	border-style: none;
	border-radius: 20px;
}

.error{
	color: red;
	font-size: 11px;
	margin-top: 0px;
	margin-bottom: 10px;
	margin-left: 2px ;
	position: relative;

}
#fileList{
	position: absolute;
		margin-top: -30px;
	margin-left: 140px;
	list-style: none;
}
@media only screen and (max-width: 600px) {
  body {
  	max-width: 100%;
  	max-height: 100%;
  	margin-left: 0px;
  	margin-right: 0px;
    background-color: lightblue;
  }
  .navbar{
  	width: 410px;
  	margin-right: 0px;
  	left: 0px;
  	position: relative;
  }
  .container{
	  padding-right: 0px;
  	margin-right: 0px;
  	margin-left: 0px;
 		overflow: hidden;
 		margin-bottom: 0px;
 		position: absolute;
 		height: 100%;
  }
  .left{
  	display: none;
  }
  .right{
  	width: 390px;
  	box-shadow: none;
  	margin-top: 20px;
  	margin-left: 0px;
  	margin-right:0px;
  	position: relative;
  	overflow: hidden;
  }
  .ins{
	padding: 5px;
	padding-right: 190px;
	border-style: none;
	outline: none;
	border: 1px solid blue;
	border-radius: 5px;
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
		<h2>On registering you can</h2>
		<li class="paraleft">1)Build your profile and let recruiters find you</li><br>
		<li class="paraleft">2)Get job</li><br>
		<li class="paraleft">3)Find a job and grow your career</li>
	</div>
	<div class="right">
		<h2>Find a job & grow your career</h2>
		<form action="$_SERVER['PHP_SELF']" method="post" name="myForm">
			<label>Full Name</label><span class="error" id="nameErr">*</span><br>
			<input class="ins" type="text" id="name" name="yname" placeholder="What is your name?"><br>
			

			<label>Email is </label><span class="error" id="emailErr">*</span><br>
			<input id="email" class="ins" type="text" name="email" placeholder="Tell us your Emain id "><br>
			
			<label>Password</label><span class="error" id="passErr">*</span><br>
			<input id="pass" class="ins" type="password" name="pass" placeholder="Create a password for your account">
			<span class="small">Minimum 8 characters(minimum one symbol,number,caps and small letters)</span><br>

			<label>Mobile Number</label><span class="error" id="numErr">*</span><br>
			<input id="num" class="ins" type="text" name="num" placeholder="Enter your Mobile Number" maxlength="10">
			<span class="small">Recruiters will call you on this number</span><br>

			<label>Work status</label><span class="error" id="stsErr"></span><br>
			<button type="button" class="wstatus" id="Experience" onclick="clicked()"><p>I'm Experienced</p><span class="small">I'm already worked in companies</span></button><button class="wstatus" type="button" id="Fresher" onclick="clicked2()"><p>I'm Fresher</p><span class="small">I'm student.I don't worked anywhere</span></button><br>

			<label>Resume</label><br>
			<button id="resupld" class="resupld" onclick="upload()" type="button">Upload Resume</button><input id="upld" type="file" name="resume" onchange="ValidateSingleInput(this);" hidden><span class="error" id="fileErr">*<p id="fileList"></p></span><br>
			<span class="small">Recruiters first preference to candidates who have a resume</span><br>
			<input type="checkbox" name="Whatsapp"><span class="small">Send me important updates on whatsapp</span><br>
			<span class="small">By clicking Register you agree to the <a href="#">Terms and conditions</a> & <a href="#">Privacy Policy</a></span><br>
			<input id="reg" class="register" type="submit" name="register" value="Register Now"> 
		</form>
	</div>
	
</div>
<script>
printError("stsErr","* Enter your status");

function clicked(){
	var Experience = document.getElementById("Experience");
	printError("stsErr","");
	Experience.style.backgroundColor = "rgba(15, 15, 15, 1.0)";
	Experience.style.color = "yellow";
	Fresher.style.color = "black";
	Fresher.style.backgroundColor = "white";
	document.getElementById("reg").style.pointerEvents = "visible";

}

function clicked2(){
	var Fresher = document.getElementById("Fresher");
	printError("stsErr","");
	Fresher.style.backgroundColor = "rgba(15, 15, 15, 1.0)";
	Fresher.style.color = "yellow";
	Experience.style.color = "black";
	Experience.style.backgroundColor = "white";
	}
function display(){
	console.log("hello");
	document.getElementById("reg").style.display = "block";
}
	var resupld = document.getElementById("resupld");
	var upld    = document.getElementById("upld");
	function upload(){
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
                 yname.style.borderColor = "blue";

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
        }
     }


};
  var input = document.getElementById('upld');

 input.onclick = function(){
  	this.value = null;
  };
var _validFileExtensions = [".pdf", ".docs","odt"];    
function ValidateSingleInput(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
          
if(blnValid)
{
  var input = document.getElementById('upld');
 
  var output = document.getElementById('fileList');

  output.innerHTML = '<ul>';
  for (var i = 0; i < input.files.length; ++i) {
    output.innerHTML += '<li>' + input.files.item(i).name + '</li>';
  }
  output.innerHTML += '</ul>';
}
             
else {
  printError("fileErr","Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
  oInput.value = "";
  return false;
     }
    }
  }
    return true;
}


</script>
</body>
</html>