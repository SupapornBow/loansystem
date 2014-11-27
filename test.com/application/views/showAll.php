﻿ <script>
	$(document).ready(function() {
  		$('.menu').click(function(event) {
				 event.preventDefault();

				 var href = $(this).attr('href');
				 $('#content').load(href);
 
	});
	});
	</script>
    
  <table width="1072" height="96" align="center" >
    <tbody>
      <tr>
        <th nowrap bgcolor="#63A3F0">รหัส</th>
      <th nowrap bgcolor="#63A3F0">คำนำหน้า</th>
        <th nowrap bgcolor="#63A3F0">ชื่อ</th>
        <th nowrap bgcolor="#63A3F0">นามสกุล</th>
        <th nowrap bgcolor="#63A3F0">เบอร์โทร</th>
        <th nowrap bgcolor="#63A3F0">จำนวนหุ้น</th> 
        <th nowrap bgcolor="#63A3F0">สถานะ</th>
		<th nowrap bgcolor="#63A3F0">แก้ไข</th>
		<th nowrap bgcolor="#63A3F0">ลบ</th>
		
		
      </tr>
       <?php foreach($list as $v){?>
      <tr>
        <td><?php echo $v['villagerId']?></td>
      <td><?php if ($v['prefixes']=="man"){
		  	echo 'นาย';
		  }else if($v['prefixes']=="woman"){
		  	echo 'นาง';
		  }else if($v['prefixes']=="miss"){
		  	echo 'นางสาว';
		  }?></td>
        <td><?php echo $v['villagerName']?></td>
        <td><?php echo $v['villagerLastname']?></td>
        <td><?php echo $v['villagerTel']?></td>
        <td><?php echo $v['villagerShare']?></td>
        <td><?php if ($v['villagerStatus']=="boss"){
		  	echo 'คณกรรมการ';
		  }else if($v['villagerStatus']=="member"){
		  	echo 'สมาชิก';
		  }?>
        </td>
		
		<td><a class="menu" href="<?php echo base_url()."index.php/Boss/getPKdata/".$v['villagerId']?>">แก้ไข</a>
		<td><a class="menu" href="<?php echo base_url()."index.php/Boss/deleteMember/".$v['villagerId']?>">ลบ</a>
      </tr>
    </tbody>
    <?php }?>
  </table>
