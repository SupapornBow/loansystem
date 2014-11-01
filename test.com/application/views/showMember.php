<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div>
  <table width="1072" height="96" border="1">
    <tbody>
      <tr>
        <td>รหัส</td>
        <td>ชื่อ</td>
        <td>นามสกุล</td>
        <td>จำนวนหุ้น</td>
        <td>จำนวนเงิน</td>
      </tr>
       <?php foreach($loanmember as $m){?>
      <tr>
        <td><?php echo $v['villagerId']?></td>
        <td><?php echo $v['villagerName']?></td>
        <td><?php echo $v['villagerLastname']?></td>
        <td><?php echo $v['loanShare']?></td>
        <td><?php echo $v['loanNum']?></td>
      </tr>
    </tbody>
    <?php }?>
  </table>
</div>
</body>
</html>