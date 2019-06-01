<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
      background-color: #00BFFF;
  font-family: Arial, Helvetica, sans-serif;}


input[type=text], input[type=password], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
h2{
  text-align: center;
  font-size: 350%;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: 55px;
    padding: 10px 5px ;
    background-color: #f44336;
}





.container {
    position: absolute;
  top: 20%;
  left: 35%;
  transform: (-50%,-50%);
  width: 400px;
  padding:40px; 
  background-color: rgba(0,0,0,.8);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
  color: blue;

}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<h2>Registration Form</h2>

<form action="<?php echo base_url();?>welcome/savingdata" method="post" onsubmit="return myFunction()">
  

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id ="name">

    <label for="email"><b>Email</b></label>
    <input type="Email" placeholder="Enter Email" name="email">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id ="psw">

    <label for="cpsw"><b>Confirm Password</b></label>
    <input type="password" placeholder="Enter Password" name="cpsw" id ="cpsw">
        
    <button type="submit">Register</button>
    
  </div>

 
</form>
<script>

function myFunction() {
  //alert("jyhj");
    var x = document.getElementById("name").value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
      
    }
    var y = document.getElementById("psw").value;
    var z = document.getElementById("cpsw").value;  
     if (y != z){
        alert("Password must be same");
        return false;
     }
}
</script>
</body>
</html>



