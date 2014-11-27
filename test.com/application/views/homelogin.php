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
   
   <li class='active has-sub'><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>จัดการข้อมูลสมาชิก</span></a>
      <ul>
         <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/ControMember/addView' class="menu"><span>เพิ่มสมาชิกกองทุน</span></a>
         </li>
         <li class='has-sub'><a href='<?php echo base_url()?>index.php/ControMember/show' class="menu"><span>รายชื่อสมาชิกกองทุน</span></a>
         </li>
         <li class='has-sub'><a href='<?php echo base_url()?>index.php/ControMember/villagerReport' class="menu"><span>ออกรายงานสรุป</span></a>
         </li>
      </ul>
   </li>
   
   <li class='active has-sub'><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>จัดการข้อมูลกองทุน</span></a>
      <ul>
         <li class='has-sub'><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>Product 1</span></a>
            
         </li>
         <li class='has-sub'><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>Product 2</span></a>
            
         </li>
      </ul>
   </li>
   
   <li class='active has-sub'><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>จัดการข้อมูลการรับชำระการกู้ยืม</span></a>
      <ul>
         <li class='has-sub'><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>Product 1</span></a>
            
         </li>
         <li class='has-sub'><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>Product 2</span></a>
            
         </li>
      </ul>
   </li>
  
</div>
<div id="loginBox">

	 ยินดีต้อนรับ: <br>
		 	 UserName: <?php echo $login['userName']; ?><br>
             Name: <?php echo $login['name']; ?><br>
		 	 Status: <?php echo $login['villagerStatus']; ?><br>

</div>

<div id="content"></div>
</body>
</html>



