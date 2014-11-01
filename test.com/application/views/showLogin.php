<!--<!DOCTYPE html>
<html>
<head><meta charset="utf-8" />
<link rel="stylesheet" href="/css/style.css" type="text/css">
</head>
<body>

<form method="post" action="/index.php/CheckLogin/logins">

<div align="center">
	<fieldset>
	 <legend>เข้าสุ่ระบบ:</legend>
	 <table>
	 	<tr>
		 	<td> UserName: <input type="text" name="username"></td>
		</tr>
		<tr>
		 	<td> PassWord: <input type="password" name="password"></td>
		<tr>
			<td align="right"><input type="submit" name="search" value="เข้าสู่ระบบ"></td>
		</tr>
	 </table>
	 	 <p><?php echo $magessError; ?></p>
 	</fieldset>
</div>
</body>
</html>
-->
<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
	  <title>Login</title>

		  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
		  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600,700,300'>
    	  <link rel="stylesheet" href="/css/login.css" type="text/css">

		  <script src="js/prefixfree.min.js"></script>

</head>

<body>

  <!--    
        JS Credits to bartveneman
        Comments? Feel free!
 -->
 
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
		</div><!-- /login -->
  </form>
</div><!-- /wrap -->

		<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
		<script src="js/index.js"></script>
	
</body>
</html>