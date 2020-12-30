<?php 
require_once __DIR__."/../../autoload/autoload.php";
 $sql="select * from users inner join hoadon where users.id= hoadon.users_id";
 $query=mysqli_query($conn,$sql);
 while($dong=mysqli_fetch_array($query)){
	
	 $name=$dong['users_id'];
	 $Ngaylap=$dong['Ngaylap'];
	 $address=$dong['address'];
 }
?>
 <?php  require_once __DIR__. "/../../layouts/header.php"; ?>
<div class="hoadon" style=" width:630px; margin-top:30px;margin-left:200px;border:1px solid #666;  background:#FFF">
<table width="630" style="margin-left:10px">
  <tr>
    <td colspan="3">Cửa hàng điện tử HieuShop</td>
  </tr>
  <tr>
    <td colspan="3">Địa chỉ:48 Cao Thắng-Hải Châu-Đà Nẵng</td>
  </tr>
  <tr>
    <td colspan="3">Tel: 0935452110</td>
  </tr>
  <tr style="height:30px">
    <td colspan="3"><strong><p align="center"><font size="+2">HOÁ ĐƠN BÁN HÀNG</font></p></p></strong></td>
  </tr>
  <tr style="height:30px">
    <td width="267">Ngày lập: <?php echo $Ngaylap?></td>
  </tr>
  <tr style="height:30px">
    <td colspan="2">Khách hàng:<strong><?php echo $name ?></strong></td>
    <td>Địa chỉ: <?php echo $address ?></td>
  </tr>
  <tr>
  <?php 
  $sql_="select * from product inner join transaction where product.id=transaction.product_id";
  $query_=mysqli_query($conn,$sql_);
  while($dong_=mysqli_fetch_array($query_)){
	  $name=$dong_['name'];
	  $number=$dong_['number'];
	  $price=$dong_['price'];
	
  }
  ?>
    <td colspan="3"><table width="610" border="1" align="center">
  		<tr style="height:30px">
    		<td>Tên SP</td>
    		<td>Số lương</td>
            <td>Đơn giá</td>	
  		</tr>
  		<tr style="height:30px">
    		<td><?php echo $name ?></td>
   		 	<td align="center"><?php echo $number ?></td>
            <td><?php echo $price ?></td>
        </tr>
          		<tr style="height:30px">
  		  
		</table>
	</td>
  </tr>
  <tr>
    <td colspan="3"><em><p align="center">Cảm ơn quý khách.Hẹn gặp lại!</p></em></td>
  </tr>
</table>
</div>
