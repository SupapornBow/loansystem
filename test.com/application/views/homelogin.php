<!DOCTYPE html>
<html>
<head><meta charset="utf-8" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/villager.css" type="text/css">

</head>
<body>

<div id="login">
<form method="post" action="/index.php/CheckLogin/logins">
	<fieldset>
	 <legend>ยินดีต้อนรับ:</legend>
	 <table>
	 	<tr>
		 	<td> UserName: <?php echo $username; ?></td>
		</tr>
		<tr>
		 	<td> Status: <?php echo $status; ?></td>
		</tr>
		<tr>
			<td align="right"></td>
		</tr>
	 </table>

 	</fieldset>
</form>
</div>


<div id="menu">
  <table width="100%" border="1">
    <tr>
      <td><a href="<?php echo base_url(); ?>index.php/Boss/showVillager">จัดการข้อมูลสมาชิก</a></td>
      <td>จัดการข้อมูลกองทุน</td>
      <td>จัดการการรับชำระเงิน</td>
    </tr>
  </table>
</div>
<div align="center">
	
</div>
</body>
</html>


