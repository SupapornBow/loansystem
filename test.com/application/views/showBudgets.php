 <script>
	$(document).ready(function() {
  		$('.menu').click(function(event) {
				 event.preventDefault();

				 var href = $(this).attr('href');
				 $('#content').load(href);
 
	});
	});
	</script>
  <table width="520" height="79" align="center" >
    <tbody>
      <tr>
        <th width="177" nowrap bgcolor="#63A3F0">รหัส</th>
        <th width="225" nowrap bgcolor="#63A3F0">วันที่งบประมาณเข้า</th>
        <th width="182" nowrap bgcolor="#63A3F0">จำนวนเงินงบประมาณ</th>
        <th width="182" nowrap bgcolor="#63A3F0">ประเภทเงินกู้</th>
        <th nowrap bgcolor="#63A3F0">แก้ไข</th>
       
		
      </tr>
       <?php foreach($list as $v){?>
      <tr>
      	<td><?php echo $v['budgetsId']?></td>
        <td><?php echo $v['budgetsDate']?></td>
        <td><?php echo $v['budgetsNum']?></td>
        <td><?php 
		if($v['loanType']=='man'){
				echo 'กลุ่มพ่อบ้าน';
				}else if ($v['loanType']=='woman'){
					echo 'กลุ่มแม่บ้าน';
				}
		?></td>
       <td><a class="menu" href="<?php echo base_url()."index.php/Boss/getPKdataType/".$v['budgetsId']?>">แก้ไข</a>
      </tr>
    </tbody>
    <?php }?>
  </table>
