<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
      background-image: url("includes/nature.jpg");
      background-size: cover;
      background-repeat: no-repeat;
  font-family: Arial, Helvetica, sans-serif;}
/*form {border: 3px solid #f1f1f1;}*/

input[type=text], input[type=password] {
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
  color: red;

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

<h2>Login Form</h2>

<form action="<?php echo base_url();?>welcome/login" method="post">
  

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
      <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
    <a href="<?php echo base_url();?>welcome/reg">New User ?</a>
  </div>

 
</form>

</body>
</html>

