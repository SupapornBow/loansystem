
 <script>
	$(document).ready(function() {
  		$('.menu').click(function(event) {
				 event.preventDefault();

				 var href = $(this).attr('href');
				 $('#content').load(href);
 
	});
	});
	</script>


<?php foreach($budgets as $v){?>
<form action="<?php echo base_url();?>index.php/Boss/updateBudgets/<?php echo $v['budgetsId']?>" method="post">

	
	 <table width="708" height="101"  align="center">
    <tbody>
      <tr>
        <td colspan="4" align="center" bgcolor="#7DBDF1"><strong>เพิ่มงบประมาณกองทุน</strong></td>
      </tr>
      <tr>
        <td width="112" align="right">วันที่งบประมาณเข้า</td>
        <td width="185" align="left"><input type="date" name="budgetsDate" value="<?php echo $v['budgetsDate']?>"required> </td>
     <td width="127" align="right">จำนวนเงินงบประมาณ</td>
        <td width="157" align="right"><input type="tel" name="budgetsNum" value="<?php echo $v['budgetsNum']?>"required></td>
      </tr>
      
      <tr>
        <td colspan="4" align="center" bgcolor="#7DBDF1"><input type="submit" name="submit" id="submit" value="บันทึกข้อมูล">
   
      </tr>
    </tbody>
</table>
 
</form>
  <?php }?>
