 <script>
	$(document).ready(function() {
  		$('.menu').click(function(event) {
				 event.preventDefault();

				 var href = $(this).attr('href');
				 $('#content').load(href);
 
	});
	});
	</script>
<form action="<?php echo base_url();?>index.php/Boss/addVillagerBoss" method="post">

<table width="548" height="283"  align="center">
    <tbody>
      <tr>
        <td colspan="4" align="center" bgcolor="#7DBDF1"><strong>เพิ่มคณะกรรมการกองทุน</strong></td>
      </tr>
      <tr>
        
      </tr>

		 <tr>
        <td colspan="4">คำนำหน้า : <select name="prefixes" id="prefixes" onchange="show_title_other(this.form);">
  <option value="man">นาย</option>
  <option value="woman">นาง</option>
  <option value="miss">นางสาว</option>
</select> <input type="text" name="title_other" id="title_other" style="display:none;" size="10" maxlength="50" /></td>
      </tr>

      <tr>
        <td width="85" align="right">ชื่อ</td>
        <td width="161" align="right"><input type="text" name="villagerName" id="textfield2" required></td>
        <td width="144" align="right">นามสกุล</td>
        <td width="144" align="right"><input type="text" name="villagerLastname" id="textfield3" required></td>
      </tr>
      
      
      <tr>
        <td align="right">วันเกิด</td>
        <td align="left"><input type="date" name="villagerBirthday" id="date2"></td>
     <td align="right">เลขบัตรประชาชน</td>
        <td align="right"><input type="tel" name="villagerIdcard" id="tel" required></td>
      </tr>
      <tr>
        <td align="right">ที่อยู่</td>
        <td align="left"><textarea name="villagerAddress" id="textarea" required></textarea></td>
        <td align="right">เบอร์โทร</td>
        <td align="right"><input type="tel" name="villagerTel" id="tel" required></td>
      </tr>
      <tr>
        <td align="right">อาชีพ</td>
        <td align="right"><input type="text" name="villagerCareer" id="textfield6" required></td>
        <td align="right">วงเงิน</td>
        <td align="left"><input type="text" name="loanCredit"  required></td>
      </tr>
      <tr>
        <td align="right">จำนวนหุ้น</td>
        <td align="right"><input type="number" name="villagerShare" required></td>
        <td align="right">&nbsp;</td>
        <td align="right">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4" align="center" bgcolor="#7DBDF1"><input type="submit" name="submit" id="submit" value="บันทึกข้อมูล">
        <input type="submit" name="submit2" id="submit2" value="ยกเลิก"></td>
      </tr>
    </tbody>
</table></form>
