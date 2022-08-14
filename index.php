<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Naukri.com</title>
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</link>
<script type="text/javascript" src= https://static.naukimg.com/s/0/0/j/html5.min.js></script>

<script>
	function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}
function validateForm(){
    var cname = document.myForm.company_name.value;
    var Email_Id = document.myForm.official_email.value;
    var Mobile_Number = document.myForm.mobile.value;
    var name = document.myForm.yourname.value;
    var company = document.getElementById("company");
    var consul = document.getElementById("consul");
	var pincode = document.myForm.pincode.value;


    if (cname == "") {
     printError("cnameErr", "Please enter your company name");

     }
        else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(cname) === false) {
            printError("cnameErr", "Please enter a valid name");
        } else {
            printError("cnameErr", "");
            cnameErr = false;
        }

     }
      if (Email_Id == "") {
     printError("mailErr", "Please enter your email");
     }
     else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(Email_Id) === false) {
            printError("mailErr", "Please enter a valid email address");
        } else{
            printError("mailErr", "");
            mailErr = false;
        }
    }   

      if (Mobile_Number == "") {
     printError("mblErr", "Please enter your Mobile Number");

     } else{
        var regex = /^[0-9]{10}/;
        if(regex.test(Mobile_Number) === false){
            printError("mblErr" , "please enter a valid number");

        }
        else{
            printError("mblErr","");
            mblErr = false;
        }
     }

    if (name == "") {
     printError("nameErr", "Please enter your name");

     }
        else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }

     } 
     let clicked = 0;
     company.addEventListener("click",function(){
     	var clicked = 1;
     });
     consul.addEventListener("click",function(){
     	var clicked = 1;
     });
    

      if (clicked === 0) {
		
    	printError("ctypeErr", "Please select any one");

     }
     else{
		printError("ctypeErr","");
     	ctypeErr = false;
     }
     if (pincode == "") {
     printError("pincodeErr", "Please enter your Pin Code");

     } else{
        var regex = /^[0-9]{6}/;
        if(regex.test(Pin_Code) === false){
            printError("pincodeErr" , "please enter a valid pincode");

        }
        else{
            printError("pincodeErr","");
            pincodeErr = false;
        }
     }
     
}
</script>
</head>
<body>



<nav class="nav">
	<div class="navbar">
		
		<a>NAUKRI.COM</a>
		<a>Home</a>
		<a id="prod" onmouseover="mouseover()" onmouseout="mouseout()">Products<small class="para" id="para"><p class="para1">1)Products On Offer<br><hr></p><p class="para2">2)Resume DataBase Access<br><hr></p><p class="para3"> 3)Job Posting<br><hr></p><p class="para4"> 4)Recruitement Management System</p></small>
</a>

</div>
</nav>
<div class="container">
	<div class="left">
		<p>
			<strong class="wel">Welcome</strong><br>

Get started with Naukri Recruitment Solutions
		</p>
		<img class="registerimg" src="https://static.naukimg.com/s/5/117/i/registration_Page.png">
	</div>	
	<div class="right">
		<p class="info">Create Account

or already registered ? <a href="login.php"> Login Now</a></p><br>
		<form class="form" name="myForm" action="$_SERVER['PHP_SELF']" method="POST"> 

			<small><label id="cnamelab" class="label">Enter Company Name*</label></small>
			<input  id="cname" class="in" type="text" name="company_name" placeholder="Company Name">
			<small class="small error">*<span id="cnameErr" class="small"></span></small><br><br>

			<small><label id="emaillab" class="label">Enter Email Address*</label></small>
			<input id="email" class="in" type="text" name="official_email" placeholder="Official Email">
			<small class="small error">*<span id="mailErr" class="small"></span></small><br><br>

			<small><label id="numlab" class="label">Enter Mobile Number*</label></small>
			<input id="num" class="in" type="text" name="mobile" placeholder="Mobile/LanLine">
			<small class="small error">*<span id="mblErr" class="small"></span></small><br><br>

			<small><label id="namelab"class="label">Enter Your Name*</label></small>
			<input id="name" class="in" type="text" name="yourname" placeholder="Contact Person's Name">
            <small class="small error">*<span id="nameErr" class="small"></span></small><br><br>

			<small><label >Company Type*</label></small><br><br>
			<button id="company" class="btn1" type="button" name="company_type" ><i class="fas fa-building" ></i> Company</button><button id="consul" type="button"class="btn2" name="Companytype"><i class="fas fa-chalkboard-teacher"></i> Consultant</button>
			<small class="small ctypeErr error">*<span id="ctypeErr" class="small"></span></small><br><br>

			<select id="indus" class="selind">
				<option>Select Industry</option>
				<option>Textiles / Garments / Fashion / Accessories</option>
				<option>Accounting / Finance</option>
			</select><br>


			<small><label id="pinlab" class="label">Enter Your Pin Code*</label></small>
			<input id="pincode" class="in" type="text" name="pincode" placeholder="Pin Code" required>
			<small class="small error">*<span id="pincodeErr" class="small"></span></small>
			<br><br>

			<small><label id="gstinlab" class="label">Enter Your GSTIN(Optinal)</label></small>
			<input  id = "gstin"class="in" type="text" name="gstin" placeholder="GSTIN(Optional)"><br><br>
			
			<input id="agree" type="checkbox" name=""><small><small><span>I agree to receive Promotional Communication from Naukri</span></small></small><br>
			<input id="terms" type="checkbox" name=""><small><small>I agree to <a class="tp" href="tc">Terms & Conditions</a> and <a class="tp" href="pp">Privacy Policy</a></small></small><br>
			<input class="sub" type="submit" name="create" value="Create Account" onclick="validateForm()">
		</form>
	</div>
</div>












<script>
	var prod = document.getElementById("prod");
	var para = document.getElementById("para");
	var cnamelab = document.getElementById("cnamelab");
	var cname = document.getElementById("cname").value;
	var email = document.getElementById("email").value;
	var emaillab = document.getElementById("emaillab");
	var numlab = document.getElementById("numlab");



	function mouseover(){
	para.style.display = "block";
	}
	function mouseout(){
		para.style.display = "none";
	}
	document.getElementById("cname").onfocus=function() {
			cnamelab.style.display = "block";

	
	};
	document.getElementById("cname").onblur=function() {
			cnamelab.style.display = "none";
			
	
	};
	document.getElementById("email").onfocus=function() {
			emaillab.style.display = "block";
	
	};
	document.getElementById("email").onblur=function() {
			emaillab.style.display = "none";
	
	};
	document.getElementById("num").onfocus=function() {
			numlab.style.display = "block";
	
	};
	document.getElementById("num").onblur=function() {
			numlab.style.display = "none";
	
	};
	document.getElementById("name").onfocus=function() {
			namelab.style.display = "block";
	
	};
	document.getElementById("name").onblur=function() {
			namelab.style.display = "none";
	
	};
	document.getElementById("pincode").onfocus=function() {
			pinlab.style.display = "block";
	
	};
	document.getElementById("pincode").onblur=function() {
			pinlab.style.display = "none";
	
	};
	document.getElementById("gstin").onfocus=function() {
			gstinlab.style.display = "block";
	
	};
	document.getElementById("gstin").onblur=function() {
			gstinlab.style.display = "none";
	
	};
	
	var company = document.getElementById("company");
	var consul = document.getElementById("consul");
company.addEventListener("click",myFunction);
consul.addEventListener("click",myFunction1);
function myFunction(){

	company.classList.add("btn1click");
	consul.classList.remove("btn1click");
	document.getElementById("indus").style.display = "block";

}
function myFunction1(){
	var sel = 1;
	consul.classList.add("btn1click");
	company.classList.remove("btn1click");
	document.getElementById("indus").style.display = "none";

}

</script>

</body>
</html>
