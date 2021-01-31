<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Test Request Api</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<?php 
		echo css_asset('style.css');
		echo js_asset('requestApi.js');
	?>
	
</head>
<body>

<div class ="container">
	<div class="row">
        <div class="col-md-6 login-form-1">
            <h3>Login</h3>
            <div class="form-group">
                <input id="login_userName" type="text" class="form-control" placeholder="Your UserName*" required/>
            </div>
            <div class="form-group">
                <input id="login_password" type="password" class="form-control" placeholder="Your Password *" required/>
            </div>
            <div class="form-group">
                <input type="submit" class="btnSubmit" value="Login" onclick="Login();"/>
            </div>
        </div>
        <div class="col-md-6 login-form-2">
            <h3>Register</h3>
            <div class="form-group">
                <input id="register_userName" type="text" class="form-control" placeholder="Your UserName *" required/>
            </div>
            <div class="form-group">
                <input id="register_password" type="password" class="form-control" placeholder="Your Password *" required/>
            </div>
            <div class="form-group">
                <input type="submit" class="btnSubmit" value="Register" onclick="Register();" />
            </div>
        </div>
    </div>
    <div class="row" id="checkuserLogin" style="display: none;">
    	<div class="col-md-6 login-form-2">
            <h3>UploadImage</h3>
            <div class="form-group">
                <input id="imageForm" type="file" class="form-control" onchange="UploadImage()" />
            </div>
        </div>
        <div class="col-md-6 login-form-1">
            <h4 id="userNameProfile"></h4>
	            <center>
	            	<img id="imageProfile" style="width: 150px;">
	            </center>
        </div>
    </div>
</div>


</body>
</html>