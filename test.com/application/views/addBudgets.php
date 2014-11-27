

<form action="<?php echo base_url();?>index.php/Boss/addBudgets" method="post">

<table width="300" height="100"  align="center">
    <tbody>
      <tr>
        <td colspan="4" align="center" bgcolor="#7DBDF1"><strong>เพิ่มงบประมาณกองทุน</strong></td>
      </tr>
      <tr>
        <td width="85" align="right">วันที่งบประมาณเข้า</td>
        <td width="161" align="left"><input type="date" name="budgetsDate" ></td>
     <td width="144" align="right">จำนวนเงินงบประมาณ</td>
        <td width="144" align="right"><input type="tel" name="budgetsNum"  required></td>
      </tr>
      
      <tr>
        <td colspan="4" align="center" bgcolor="#7DBDF1"><input type="submit" name="submit" id="submit" value="บันทึกข้อมูล">
   
      </tr>
    </tbody>
</table></form>
