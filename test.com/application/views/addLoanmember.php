<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>เพิ่มสมาชิกกองทุน</title>
<style type="text/css">
body,td,th {
	font-size: 16px;
	text-align: center;
}
</style>
</head>

<body>
<div align="center">
<form action="<?php echo base_url();?>index.php/ControMember/add" method="post">
  <table width="500" height="152" border="1">
    <tbody>
      <tr>
        <td colspan="2">
       			<blockquote>
                  <p><strong>เพิ่มสมาชิกกองทุนหมู่บ้าน</strong></p>
                </blockquote>
        </blockquote></td>
      </tr>
      <tr>
        <td colspan="2">แสดงข้อมูลสมาชิกหมู่บ้าน : <br>
        	 <?php foreach($villager as $villager){?>
       		 ชื่อ :<?php echo $villager['villagerName'];?> นามสกุล :<?php echo $villager['villagerLastname'];?>
        </td>
      </tr>
      	<?php }?>
      <tr>
        <td width="199">จำนวนหุ้น :</td>
        <td width="343"><input type="number" name="loanShare"  required/></td>
      </tr>
      
      <tr>
        <td>จำนวนเงิน :</td>
        <td><input type="number" name="loanNum"required/></td>
      </tr>
      
      <tr>
        <td>วงเงินกู้ยืม :</td>
        <td><input type="number" name="loanCredit"required/></td>
      </tr>
      
      <tr>
        <td colspan="2"><label><input type="submit" name="Submit" value="เพิ่มสมาชิกกองทุน" /></label></td>
      </tr>
    </tbody>
  </table>
</form>
</div>
</body>
</html>