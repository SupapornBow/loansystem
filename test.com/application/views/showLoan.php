 <script>
	$(document).ready(function() {
  		$('.menu').click(function(event) {
				 event.preventDefault();

				 var href = $(this).attr('href');
				 $('#content').load(href);
 
	});
	});
	</script>
  <table height="79" align="center" >
    <tbody>
      <tr>
        <th nowrap bgcolor="#63A3F0">รหัสการกู้</th>
        <th nowrap bgcolor="#63A3F0">ชื่อผู้ขอกู้</th>
        <th nowrap bgcolor="#63A3F0">จำนวนเงินที่กู้</th>
        <th nowrap bgcolor="#63A3F0">วันที่กู้</th>
        <th nowrap bgcolor="#63A3F0">ชื่อผู้ค้ำ</th>
        <th nowrap bgcolor="#63A3F0">สถานะการกู้</th>
        <th nowrap bgcolor="#63A3F0">วันที่ชำระ</th>
        <th nowrap bgcolor="#63A3F0">สถานะการชำระ</th>
        <th nowrap bgcolor="#63A3F0">แก้ไข</th>

      </tr>
       <?php foreach($listLoan as $v){?>
      <tr>
      	<td align="center" valign="middle"><?php echo $v['loanId']?></td>
        <td align="center" valign="middle"><?php echo $v['villagerName']?></td>
        <td align="center" valign="middle"><?php echo $v['loanNum']?></td>
        <td align="center" valign="middle"><?php echo $v['dateLoan']?></td>
        <td align="center" valign="middle"><?php echo $v['guarantorName']?></td>
        <td align="center" valign="middle"><?php 
		if($v['statusLoan']==0){
				echo 'รอการอนุมัติ';
				}else if ($v['statusLoan']==1){
					echo 'อนุมัติ';
				}else if ($v['statusLoan']==2){
					echo 'ไม่อนุมัติ';
				}
		?></td>
        <td align="center" valign="middle"><?php echo $v['paymentDate']?></td>
        <td align="center" valign="middle"><?php 
		if($v['paymentStatus']==0){
				echo '-';
				}else if ($v['paymentStatus']==1){
					echo 'จ่ายแล้ว';
				}
		?></td>
        
        <td align="center" valign="middle">
        
       <?php if($v['statusLoan']==0){?>
				<a class="menu" href="<?php echo base_url()."index.php/Boss/getPKdata/".$v['villagerId']?>">อนุมัติ</a>
                <a class="menu" href="<?php echo base_url()."index.php/Boss/getPKdata/".$v['villagerId']?>">ไม่อนุมัติ</a>
				<?php }else {
					echo '-';
				}
        
        ?>
        
      
     </td> </tr>
    </tbody>
    <?php }?>
  </table>
