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
  			 <li class='active has-sub'><a href='<?php echo base_url(); ?>index.php/Boss/listMemberAll' class="menu"><span>จัดการข้อมูลสมาชิก</span></a>
      	<ul>
         	<li class='has-sub'><a href='<?php echo base_url(); ?>index.php/Boss/addView' class="menu"><span>เพิ่มสมาชิกกองทุน</span></a></li>
         	<li class='has-sub'><a href='<?php echo base_url(); ?>index.php/Boss/addViewBoss' class="menu"><span>เพิ่มคณะกรรมกองทุน</span></a></li>
         	<li class='has-sub'><a href='<?php echo base_url()?>index.php/Boss/listMember' class="menu"><span>รายชื่อสมาชิกกองทุน</span></a></li>
       </ul>
   			</li>
   
  			<li class='active has-sub'><a href='<?php echo base_url()?>index.php/Boss/listBudgets' class="menu"><span>จัดการข้อมูลกองทุน</span></a>
      <ul>
        	<li class='has-sub'><a href='<?php echo base_url()?>index.php/Boss/addViewBudgets' class="menu"><span>เพิ่มงบประมาณ</span></a></li>
      </ul>
   			</li>
   
   			<li class='active has-sub'><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>จัดการการขอกู้</span></a>
      <ul>
         	<li class='has-sub'><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>Product 1</span></a></li>
         	<li class='has-sub'><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>Product 2</span></a></li>
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

<div align="right">
<br>
    <form action="<?php echo base_url();?>index.php/Boss/searchData" method="post" autocomplete="off">
        <input type="text" name="textSearch" id="textSearch"><input type="submit" name="search" value="ค้นหา" >
    </form>
</div>
<p>
<div id="content">
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
      		<td><?php if ($v['prefixes']=="man")
			 {
		  		echo 'นาย';
		  	 }	
				else if($v['prefixes']=="woman")
			 {
		  		echo 'นาง';
		  	 }	else if($v['prefixes']=="miss")
			
			 {
		  		echo 'นางสาว';
		 	 }?></td>
            <td><?php echo $v['villagerName']?></td>
            <td><?php echo $v['villagerLastname']?></td>
            <td><?php echo $v['villagerTel']?></td>
            <td><?php echo $v['villagerShare']?></td>
        	<td><?php if ($v['villagerStatus']=="boss")
			 {
		  		echo 'คณกรรมการ';
		  	 }else if($v['villagerStatus']=="member")
			 {
		  		echo 'สมาชิก';
		  	 }?></td>
            <td><a class="menu" href="<?php echo base_url()."index.php/Boss/getPKdata/".$v['villagerId']?>">แก้ไข</a>
            <td><a class="menu" href="<?php echo base_url()."index.php/Boss/deleteMember/".$v['villagerId']?>">ลบ</a>
       </tr>
    </tbody>
    <?php }?>
  </table>
</div>
</body>
</html>