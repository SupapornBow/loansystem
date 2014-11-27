
<form action="<?php echo base_url();?>index.php/Member/addViewLoan" method="post">

<table width="300" height="100"  align="center">
    <tbody>
      <tr>
        <td colspan="4" align="center" bgcolor="#7DBDF1"><strong>การกู้ยืม</strong></td>
      </tr>
      <tr>
        <td width="85" align="right">จำนวนเงินที่กู้</td>
        <td width="161" align="left"><input type="text" name="loanNum" ></td>
     	<td width="144" align="right">วันที่กู้ยืม</td>
        <td width="144" align="right"><input type="date" name="dateLoan"  required></td>
      </tr>
       <tr>
        <td width="85" align="right">ผู้ค้ำประกัน</td>
        <td width="161" align="left"><input type="text" name="guarantorId" ></td>
     	<td width="144" align="right">วันที่ชำระ</td>
        <td width="144" align="right"><input type="date" name="paymentDate"  required></td>
      </tr> <tr>
        <td width="85" align="right">สถานะการชำระ</td>
        <td width="161" align="left"><input type="text" name="paymentStatus" ></td>
     	<td width="144" align="right">สมาชิก</td>
        <td width="144" align="right"><input type="text" name="villagerId"  required></td>
      </tr>
      <tr>
        <td colspan="4" align="center" bgcolor="#7DBDF1"><input type="submit" name="submit" id="submit" value="บันทึกข้อมูล">
   
      </tr>
    </tbody>
</table>
</form>

			
