<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
body{
	background-color:  whitesmoke;

}
.navbar{
	margin-top: -30px;
	position: relative;
	left: 0;
	height: 150px;
	background-color: white;

}
.navbar a {
	position: relative;
	cursor: pointer;
	float: left;
	color: gray;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	font-size: 17px;
}

.navbar .cont:hover{
	color: black;
 	border-bottom: 5px solid orangered;
 	border-radius: 5px;
}
.navcon{
	margin-top: 60px;
}
.login{
	margin-left: 250px;
	font-weight: 600;
	color: #457EFF;;
	cursor: pointer;
	padding-top: 9px;
	padding-bottom: 9px;
	padding-left: 19px;
	padding-right: 19px;
	border-radius: 20px;
	background-color: white;
	border: 1px solid #457EFF;
}
.register{
	margin-left: 10px;
	font-weight: 600;
	color: white;
	cursor: pointer;
	padding-top: 9px;
	padding-bottom: 9px;
	padding-left: 19px;
	padding-right: 19px;
	border-radius: 20px;
	background-color: red;
	border: 1px solid red;
}
.navright{
	float: left;
	margin-left: 550px;
	margin-top: 60px;
	position: absolute;

}
.foremp{
	border-style: none;
	background-color: white;
	cursor: pointer;
	float: right;
	color: gray;
	text-align: center;
	text-decoration: none;
	font-size: 17px;
	margin-top: 10px;
	margin-left: 90px;

}
.foremp:hover{
	color: black;
 	border-bottom: 5px solid orangered;
 	border-radius: 5px;
}

.container{
	position: relative;
	margin-top: 50px;

}
.head{
	text-align: center;
	font-weight: 700;

}
.container p{
	margin-top: -20px;
	color: gray;
}
.search{
	display: flex;
	flex-wrap: wrap;
	margin-left: 200px;
	align-content: center;
	height: 50px;
	width: 850px;
	box-shadow: 2px 2px 2px;
	border: 2px solid dimgray;
	border-radius: 20px;
}
.box{
	margin-top: 6px;
	align-content: center;
	margin-left: 20px;
	float: left;
	
}
.ins{

	border-style: none;
	padding-top: 10px;
	padding-bottom: 10px;
	border-radius: 10px;
	outline: none;
	background-color: whitesmoke;
}
.DD{
	position: absolute;
	margin-top: 280px;
	margin-left: 280px;
	display: none;
	cursor: pointer;
	border: 1px solid gray;
	box-sizing: border-box;
	border-radius: 10px;
	background-color: lightgray;
	height: 212px;
	width: 200px;
	overflow: scroll;
	list-style: none;
}
.DD li{
	text-align: center;
	margin-left: -40px;
	font-size: 13px;
	padding-bottom: 10px;
}
.DD li:hover{
	background-color: floralwhite;
}
.searchbtn{
	margin-top: -6px;
	position: relative;
	font-weight: 600;
	color: white;
	padding-left: 15px;
	padding-right: 15px;
	padding-top: 12px;
	padding-bottom: 12px;
	cursor: pointer;
	border-radius: 20px;
	background-color: royalblue;
	border-style: none;
}
@media only screen and (max-width: 600px){
body{
  	max-width: 100%;
  	max-height: 100%;
  	margin-left: 0px;
  	margin-right: 0px;
    background-color: whitesmoke;
  
}
.navcon,.foremp{
	display: none;
}
.navright{
	margin-left: 50px;
	margin-top: 60px;
	position: relative;
	padding-right: 20px;


}
.login,.rigister{
	margin-left: 60px;
	position: relative;
}

.searchicon{
	display: none;
}
.search{
	margin-left: 30px;
	align-content: center;
	padding-bottom: 30px;
	height: 200px;
	width: 350px;
	box-shadow: 2px 2px 2px;
	border: 2px solid dimgray;
	border-radius: 20px;
}
.box{
	margin-left: 0px;
}
.ins{
	padding-left: 5px;
	margin-left: 20px;
	position: absolute;
	margin-top: 0px;
	border-style: solid;
	padding-top: 5px;
	padding-bottom: 5px;
	border-radius: 5px;	
}
span{
	position: absolute;
	margin-left: 210px;
	margin-top: 120px;

}
.mblin1{
	position: absolute;
	top: 150px;
}
.mblin2{
	position: absolute;
	top: 210px;
}
.mblin3{
	position: absolute;
	top: 270px;
}
.searchbtn{
	margin-left: 20px;
	margin-top: 210px;
	position: relative;
	font-weight: 600;
	color: white;
	padding-left: 15px;
	padding-right: 15px;
	padding-top: 12px;
	padding-bottom: 12px;
	cursor: pointer;
	border-radius: 20px;
	background-color: royalblue;
	border-style: none;
}
.DD{
	position: absolute;
	margin-top: 50px;
	margin-left: 240px;
	display: none;
	cursor: pointer;
	border: 1px solid black;
	box-sizing: border-box;
	border-radius: 10px;
	background-color: whitesmoke;
	height: 212px;
	width: 100px;
	overflow: scroll;
	list-style: none;
}

}
</style>
</head>

<body>

<div class="navbar">
		<a class="logo"><?php include "header.php"; ?></a>
		<a class="navcon cont" href="#">Jobs</a>
		<a class="navcon cont" href="#">Companies</a>
		<a class="navcon cont" href="#">Services</a>
		<a class="navcon cont" href="#">Resources</a>
		<div class="navright">
		<button class="btn login"onclick="login()">Login</button>
		<button class="btn register" onclick="register()">Register</button>
		<button class="btn foremp" >For Employers <i class="fa fa-angle-down"></i></button>
	</div>
</div>
<div class="container">
	
	<h1 class="head">Find your dream job now</h1>
	<p class="head">5 lakh+ jobs for you to explore</p>
	<div class="search">
		<div class="box">
			<span class="searchicon"><i class="fa fa-search" aria-hidden="true"></i></span><input class="ins mblin1" type="search" name="skill" placeholder="Enter skills">
		</div>
		<div id="exper"  class="box" >
			<input id="exper1" class="ins mblin2"  type="text" name="experience" placeholder="Enter Experience"> <span><i class="fa fa-angle-down"></i></span>
			</div>
			<ul class="DD" id="DD">
				<li class="" onclick="myFunction(this)">Fresher</li>
				<li class="" onclick="myFunction(this)">1 Year</li>
				<li class="" onclick="myFunction(this)">2 Years</li>
				<li class="" onclick="myFunction(this)">3 Years</li>
				<li class="" onclick="myFunction(this)">4 Years</li>
				<li class="" onclick="myFunction(this)">5 Years</li>
				<li class="" onclick="myFunction(this)">6 Years</li>
				<li class="" onclick="myFunction(this)">7 Years</li>
				<li class="" onclick="myFunction(this)">8 Years</li>
				<li class="" onclick="myFunction(this)">9 Years</li>
				<li class="" onclick="myFunction(this)">10 Years</li>
				<li class="" onclick="myFunction(this)">11 Years</li>
				<li class="" onclick="myFunction(this)">12 Years</li>
				<li class="" onclick="myFunction(this)">13 Years</li>
				<li class="" onclick="myFunction(this)">14 Years</li>
				<li class="" onclick="myFunction(this)">15 Years</li>
				<li class="" onclick="myFunction(this)">16 Years</li>
				<li class="" onclick="myFunction(this)">17 Years</li>
				<li class="" onclick="myFunction(this)">18 Years</li>
				<li class="" onclick="myFunction(this)">19 Years</li>
				<li class="" onclick="myFunction(this)">20 Years</li>
				<li class="" onclick="myFunction(this)">21 Years</li>
				<li class="" onclick="myFunction(this)">22 Years</li>
				<li class="" onclick="myFunction(this)">23 Years</li>
				<li class="" onclick="myFunction(this)">25 Years</li>
				<li class="" onclick="myFunction(this)">28 Years</li>
				<li class="" onclick="myFunction(this)">30 Years</li>
				
			</ul>
	
		<div class="box">
			<input class="ins mblin3" type="text" name="location" placeholder="Location">
		</div>
		<div class="box">
			<button class="searchbtn">Search</button>
		</div>
	</div>
</div>
<script>
	const dd = document.getElementById("DD");
	const exper = document.getElementById("exper");
	const exper1 = document.getElementById("exper1");
	
	exper.onclick = function(){
		exper1.focus();
		
	};
	exper1.onfocus = function(){
			dd.style.display = "block";

		};
	exper1.onblur = function(){
			setTimeout(function(){
				dd.style.display = "none";

			},500);

		};


	function myFunction(li) {
		exper1.value = li.innerHTML;
		dd.style.display = "none";
    }
	
	
	


	function register(){
		window.location.href = "register.php";
	}
	function login(){
		window.location.href = "login.php";
	}
	
	
	

</script>

</body>
</html>

