<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>JavaScript form validation - checking non-empty</title>
<link rel='stylesheet' href='form-style.css' type='text/css' />
<style>
  li {list-style-type: none;
font-size: 16pt;
}
.mail {
margin: auto;
padding-top: 10px;
padding-bottom: 10px;
width: 400px;
background : #D8F1F8;
border: 1px soild silver;
}
.mail h2 {
margin-left: 38px;
}
input {
font-size: 20pt;
}
input:focus, textarea:focus{
background-color: lightyellow;
}
input submit {
font-size: 12pt;
}
.rq {
color: #FF0000;
font-size: 10pt;
}

</style>
</head>
<body>
<form action='index.html' id="form-user">
  <input type="text" name="username" id="username" placeholder="username">
  <input type="email" name="email" id="email" placeholder="email">
  <input type="password" name="password" id="password" placeholder="password">
  <input type="checkbox" name="cb" id="password" placeholder="password">
  <input type="file" name="file" id="password" placeholder="password">

  <button type="submit" name="submit" id='button-send' disabled>SUBMIT</button>
</form>
<script>
var buttonSend = document.getElementById('button-send');
var a = document.getElementById('username');
var b = document.getElementById('email');

a.addEventListener('input',()=>{
buttonSend.disabled = false;
})  

/*let inputValidator = {
  "username": false,
  "email": false,
  "password": false,
  "cb":false,
  "file":false
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
})*/
</script>
</body>
</html>
