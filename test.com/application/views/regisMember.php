<!DOCTYPE html>
<html>
<head><meta charset="utf-8" />
<link rel="stylesheet" href="/css/style.css" type="text/css">
</head>
<body>

<form method="post" action="<?php echo base_url();?>index.php/home/add">

<div>
	<fieldset>
	 <legend>ค้นหา:</legend>
		  ชื่อสมาชิก: <input type="text">
		  		<input type="submit" name="search" value="ค้นหา">
 	</fieldset>
</div>

<div align="center">
	<fieldset>
	 <legend>สมัครสมาชิก:</legend>
		<table>
		
			<tr>
				<td>รหัสการสมัคร:</td><td><input type="text" name=""></td>
				<td>รหัสสมาชิก:</td><td><input type="text" name="villager_Id"></td>
			</tr>
			
			<tr>
				<td>ชื่อสมาชิก:</td><td><input type="text" name="villager_Name"></td>
				<td>นามสกุล:</td><td><input type="text" name="villager_Lastname"></td>
			</tr>

			<tr>
				<td>เพศ:</td>
				<td><select name="select" id="select">
				  <option value="M">ชาย</option>
				  <option value="F">หญิง</option>
                </select></td>
				<td>วัน/เดือน/ปี</td><td><input type="text" name="date" /></td>
     		</tr>
			
			<tr>
				<td>อายุ:</td><td><input type="text" name="villager_Age"></td>
				<td>เบอร์โทร:</td><td><input type="text" name="villager_Tel"></td>
			</tr>
			
			<tr>
				<td>ที่อยู่:</td><td><input type="text" name="villager_Address"></td>
				<td>วันที่สมัคร</td><td><input type="text" name="date"/></td>
			</tr>
			
			<tr>
				<td>หมายเลขบัตรประชาชน:</td><td><input type="text" name="villager_Idcard"></td>
				<td>จำนวนหุ้น</td><td><input type="text" name=""/></td>
			</tr>
			 
			 <tr>
			 	<td>จำนวนเงินกู้</td><td><input type="text" name=""/></td>
			 </tr>
			<tr>
				<td colspan="4" align="center"><input type="submit" name="add" value="เพิ่มข้อมูล">
				<input type="submit" name="edit" value="แก้ไขข้อมูล">
				<input type="submit" name="cancal" value="ยกเลิก"></td>
			</tr>
		</table>
	</fieldset>
</div>
</body>
</html>


