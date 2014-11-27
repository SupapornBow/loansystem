<!--<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
	  <title>Login</title>


    	  <link rel="stylesheet" href="/css/login.css" type="text/css">


</head>

<body>
 
		<div align="center">
			<div class="wrap">
					<div class="flip-container" id='flippr'>
							<div class="flipper">
							<div class="front"></div>
							<div class="back"></div>
					</div>
				</div>
		</div>

  	<h1 class="text" id="welcome">Welcome. <span>please login.</span></h1>

  <form method="post" id="theForm" action="/index.php/CheckLogin/logins">
		<input type='text' id="username" name='username' placeholder='ชื่อผู้ใช้งาน'>
		<input type='password' id='password' name='password' placeholder='รหัสผ่าน'>
	
		<div class='login'>
			  <a href="#"><i class="icon-cog"></i> I've fogotten my password</a>
			  <input type='submit'value='เข้าสู่ระบบ'>
		</div>
  </form>
</div>

</body>
</html> 
<!-- /login -->



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Login Page</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>css/menu.css" type="text/css">
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>css/styles.css">
	
	<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css" />
	<!--<link rel="stylesheet" href="/css/login.css" type="text/css">-->
</head>

<body>

	<form id="login-form" action="<?php echo base_url(); ?>index.php/CheckLogin/login" method="post">
		<fieldset>
		
			<legend>Log </legend>
			
			<label for="login">UserName</label>
			<input type="text" id="username" name="username" placeholder='ชื่อผู้ใช้งาน'/>
			<div class="clear"></div>
			
			<label for="password">Password</label>
			<input type="password" id="password" name="password" placeholder='รหัสผ่าน'/>
			<div class="clear"></div>
			<br />
			
			<input type="submit" style="margin: -20px 0 0 287px;" class="button" name="commit" value="Log in"/>	
		</fieldset>
	</form>
	
</body>

</html>