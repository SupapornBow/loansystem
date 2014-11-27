
 <script>
	$(document).ready(function() {
  		$('.menu').click(function(event) {
				 event.preventDefault();

				 var href = $(this).attr('href');
				 $('#content').load(href);
 
	});
	});
	</script>


<?php foreach($villager as $v){?>
<form action="<?php echo base_url();?>index.php/Boss/updateMember/<?php echo $v['villagerId']?>" method="post">

	
	 
  <table width="556" height="272"  align="center">
    <tbody>
      <tr>
        <td colspan="4" align="center" bgcolor="#7DBDF1"><strong>แก้ไขข้อมูลสมาชิกกองทุน</strong></td>
     
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
        <td width="161" align="right"><input type="text" name="villagerName"  value="<?php echo $v['villagerName']?>"required></td>
        <td width="144" align="right">นามสกุล</td>
        <td width="144" align="right"><input type="text" name="villagerLastname"  value="<?php echo $v['villagerLastname']?>" required></td>
      </tr>
      
      
      <tr>
        <td align="right">วันเกิด</td>
        <td align="left"><input type="date" name="villagerBirthday"  value="<?php echo $v['villagerBirthday']?>"></td>
     <td align="right">เลขบัตรประชาชน</td>
        <td align="right"><input type="tel" name="villagerIdcard" value="<?php echo $v['villagerIdcard']?>" required></td>
      </tr>
      <tr>
        <td align="right">ที่อยู่</td>
        <td align="left"><textarea name="villagerAddress" value="<?php echo $v['villagerAddress']?>" required></textarea></td>
        <td align="right">เบอร์โทร</td>
        <td align="right"><input type="tel" name="villagerTel"  value="<?php echo $v['villagerTel']?>"required></td>
      </tr>
      <tr>
        <td align="right">อาชีพ</td>
        <td align="right"><input type="text" name="villagerCareer" value="<?php echo $v['villagerCareer']?>" required></td>
        <td align="right">วงเงิน</td>
        <td align="left"><input type="text" name="loanCredit"  value="<?php echo $v['loanCredit']?>" required></td>
        </tr>
      <tr>
        <td align="right">จำนวนหุ้น</td>
        <td align="right"><input type="number" name="villagerShare" value="<?php echo $v['villagerShare']?>"required></td>
        <td align="right">&nbsp;</td>
        <td align="right">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4" align="center" bgcolor="#7DBDF1">
        <input type="submit" name="submit" id="submit" value="บันทึกข้อมูล">
        <input type="submit" name="submit2" id="submit2" value="ยกเลิก"></td>
      </tr>
    </tbody>
  </table>
  </form>
  <?php }?>
