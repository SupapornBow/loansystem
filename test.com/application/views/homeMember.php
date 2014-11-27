<!DOCTYPE html>
<html>
<head><meta charset="utf-8" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/menu.css" type="text/css">
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>css/styles.css">
 <style type="text/css">
 body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
 </style>
 <script>
	$(document).ready(function() {
  		$('.menu').click(function(event) {
				 event.preventDefault();

				 var href = $(this).attr('href');
				 $('#content').load(href);
 
	});
	});
	</script>

</head>
<body>
	<div id="header">
		<div id="title">ระบบการบริหารการจัดการระบบเงินกู้กองทุนหมู่บ้าน</div><div id="loginBox"></div>
	</div>
    
	<div id='cssmenu'>
		<ul>
  			 <li class='active has-sub'><a href='<?php echo base_url(); ?>index.php/Member/listMemberAll' class="menu"><span>จัดการข้อมูลสมาชิก</span></a>
      	<ul>
         	<li class='has-sub'><a href='<?php echo base_url(); ?>index.php/Member/addView' class="menu"><span>เพิ่มสมาชิกกองทุน</span></a></li>
         	<li class='has-sub'><a href='<?php echo base_url(); ?>index.php/Member/addViewBoss' class="menu"><span>เพิ่มคณะกรรมกองทุน</span></a></li>
         	<li class='has-sub'><a href='<?php echo base_url()?>index.php/Member/listMember' class="menu"><span>รายชื่อสมาชิกกองทุน</span></a></li>
       </ul>
   			</li>
   
  			<li class='active has-sub'><a href='<?php echo base_url()?>index.php/Member/listBudgets' class="menu"><span>จัดการข้อมูลกองทุน</span></a>
      <ul>
        	<li class='has-sub'><a href='<?php echo base_url()?>index.php/Member/addViewBudgets' class="menu"><span>เพิ่มงบประมาณ</span></a></li>
      </ul>
   			</li>
   
   		
  	  </ul>
</div>
 <div id="loginBox">
	 ยินดีต้อนรับ: <br>
		 	 UserName: <?php echo $login['userName']; ?><br>
             Name: <?php echo $login['name']; ?><br>
		 	 Status: <?php echo $login['villagerStatus']; ?><br>
             <a href="<?php echo base_url();?>index.php/CheckLogin/logOut">ออกจากระบบ</a>
</div>

<p>
<div id="content">
   <script>
	$(document).ready(function() {
  		$('.menu').click(function(event) {
				 event.preventDefault();

				 var href = $(this).attr('href');
				 $('#content').load(href);
 
	});
	});
	</script>
  <table width="1063" height="64" align="center" >
    <tbody>
      <tr>
        <th width="71" height="21" nowrap bgcolor="#63A3F0">รหัสการกู้</th>
        <th width="100" nowrap bgcolor="#63A3F0">จำนวนเงินที่กู้</th>
        <th width="85" nowrap bgcolor="#63A3F0">วันที่กู้ยืม</th>
        <th width="98" nowrap bgcolor="#63A3F0">ผู้ค้ำประกัน</th>
        <th width="132" nowrap bgcolor="#63A3F0">วันที่ชำระ</th>
        <th width="147" nowrap bgcolor="#63A3F0">จำนวนที่ชำระ</th>
        <th width="143" nowrap bgcolor="#63A3F0">สถานะการกู้</th>
        <th width="150" nowrap bgcolor="#63A3F0">สมาชิก</th>
        <th width="85" nowrap bgcolor="#63A3F0">แก้ไข</th>

      </tr>
     <!--  <?php foreach($listLoan as $v){?>-->
      <tr>
      	<td height="35"><?php echo $v['loanId']?></td>
        <td><?php echo $v['loanNum']?></td>
        <td><?php echo $v['dateLoan']?></td>
        <td><?php echo $v['guarantorId']?></td>
        <td><?php echo $v['paymentDate']?></td>
        <td><?php echo $v['paymentStatus']?></td>
        <td><?php echo $v['statusLoan']?></td>
        <td><?php echo $v['villagerId']?></td>
        <td><a class="menu" href="<?php echo base_url()."index.php/Member/getPKdata/".$v['villagerId']?>">แก้ไข</a>
      
      </tr>
    </tbody>
    <?php }?>
  </table>
  
</div>
</body>
</html>