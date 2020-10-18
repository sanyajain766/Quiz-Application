<?php
session_start();
$errorMsg = ""; if(isset($_SESSION['use']))
{
header("Location:quiz1.php");
} if(isset($_POST['login']))
{
$user = $_POST['user']; $pass = $_POST['pass']; $regno = $_POST['regno']; $name= $_POST['name'];
if($user == "sanya" && $pass == "1234" && $regno= '19bce1021' && $name="Sanya") {
$_SESSION['use']=$user;
echo '<script type="text/javascript"> window.open("quiz1.php","_self");</script>';
}
else
{
$errorMsg= "Invalid Username or Password";
}
}
?>
<!DOCTYPE html> <html lang="en"> <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Login</title>
</head> <style> *{
 box-sizing: border-box; }
*:focus {
outline: none; }
body {
font-family: Arial; background-color: #3498DB; padding: 50px;
}
.login {
margin: 20px auto;
width: 300px;
}
.login-screen { background-color: #FFF; padding: 20px; border-radius: 5px
}
.app-title { text-align: center; color: #777;
}
  .login-form { text-align: center;
}
.control-group { margin-bottom: 10px; }
input {
text-align: center; background-color: #ECF0F1;

border: 2px solid transparent; border-radius: 3px;
font-size: 16px;
font-weight: 200;
padding: 10px 0; width: 250px; transition: border .5s; }
input:focus {
border: 2px solid #3498DB; box-shadow: none;
 }
.btn {
border: 2px solid transparent; background: #3498DB;
color: #ffffff;
font-size: 16px;
line-height: 25px;
padding: 10px 0; text-decoration: none; text-shadow: none; border-radius: 3px; box-shadow: none; transition: 0.25s;
display: block;
width: 250px;
margin: 0 auto;
}
.btn:hover {
background-color: #2980B9; }
.login-link { font-size: 14px;
 color: red; display: block;
margin-top: 12px;
margin-bottom: 12px; }
</style> <body> <body>
<div class="login">
<div class="login-screen">
<div class="app-title">
 
<h1>Login</h1> </div>
<div class="login-form">
<form action="" method="post">
<div class="control-group">
<input type="text" class="login-field" placeholder="Registration No" name="regno"> </div>
<div class="control-group">
<input type="text" class="login-field" placeholder="Name" name="name"> </div>
<div class="control-group">
<input type="text" class="login-field" placeholder="Username" name="user"> </div>
<div class="control-group">
<input type="password" class="login-field" placeholder="Password" name="pass"> </div>
<div class="login-link"><?= $errorMsg ?></div>
<input class="btn btn-primary btn-large btn-block" type="submit" value="Login" name="login" /> </form>
</div> </div>
</div> </body> </body>
</html>