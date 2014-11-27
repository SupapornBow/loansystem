<form action="<?php echo base_url();?>index.php/Boss/addVillagerBoss" method="post">

<table width="548" height="283"  align="center">
    <tbody>
      <tr>
        <td colspan="4" align="center" bgcolor="#7DBDF1"><strong>เพิ่มผู้ค้ำประกัน</strong></td>
      </tr>
      <tr>
        
      </tr>

		 <tr>
        <td colspan="4">คำนำหน้า : <select name="guarantorPrefixes" id="guarantorPrefixes" onchange="show_title_other(this.form);">
  <option value="man">นาย</option>
  <option value="woman">นาง</option>
</select> <input type="text" name="title_other" id="title_other" style="display:none;" size="10" maxlength="50" /></td>
      </tr>

      <tr>
        <td width="85" align="right">ชื่อ</td>
        <td width="161" align="right"><input type="text" name="guarantorName" id="guarantorName" required></td>
        <td width="144" align="right">นามสกุล</td>
        <td width="144" align="right"><input type="text" name="guarantorLastname" id="guarantorLastname" required></td>
      </tr>
      
      
      <tr>
        <td align="right">วันเกิด</td>
        <td align="left"><input type="date" name="guarantorBirthday" id="guarantorBirthday"></td>
     <td align="right">ที่อยู่</td>
        <td align="left"><textarea name="guarantorAddress" id="guarantorAddress" required></textarea></td>
      </tr>
      <tr>
        <td align="right">เบอร์โทร</td>
        <td align="left"><input type="tel" name="guarantorTel" id="guarantorTel" required></td>
       <td align="right">อาชีพ</td>
        <td align="right"><input type="text" name="guarantorCareer" id="guarantorCareer" required></td>
      </tr>
      <tr>
        <td align="right">หมายเลขบัตรประชาชน</td>
        <td align="left"><input type="text" name="guarantorIdcard" id="guarantorIdcard" required></td>
      </tr>
      <tr>
        <td colspan="4" align="center" bgcolor="#7DBDF1"><input type="submit" name="submit" id="submit" value="บันทึกข้อมูล">
        <input type="submit" name="submit2" id="submit2" value="ยกเลิก"></td>
      </tr>
    </tbody>
</table></form>
