<h2 align="center" style="color:#F00; margin-top:10px">XỬ LÝ ĐƠN HÀNG</h2>
<div class="xulydonhang" style="width:1200px; margin-left:30px; margin-top:20px"> 
<?php 
$sql= "select * from chitietphieudat order by MaPD DESC";
$query=mysqli_query($conn,$sql);
?>
<form action="index.php?Quanly=Xulyhoadon" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr style="height:40px; background:#6FF">
    <td height="30">Mã  PD</td>
    <td>Mã SP</td>
    <td>Số lượng</td>
    <td>Đơn giá</td>
    <td>Tình trạng </td>
    <td>Quản lý</td>
   </tr>
 <?php 
while($dong=mysqli_fetch_assoc($query)){
 $MaPD=$dong['MaPD'];
 $Dongia=$dong['Dongia'];
 $Soluong=$dong['Soluong'];
 $MaSP= $dong['MaSP'];
?>
<tr style="height:40px">
    <td ><?php echo $MaPD ?></td>
    <td><?php echo $MaSP ?></td>
    <td><?php echo $Soluong?></td>
    <td><?php echo $Dongia?></td>
    <td><?php 
  if($dong['Tinhtrang']==0){
	  echo  '<input type="submit" name='.$MaPD.' value="Duyệt" style="height:30px; width:60px">';
	  }
   else 
	  echo  '<p> Đã duyệt</p>';
 	 ?></td>
      <td><a href="index.php?Quanly=Xulyhoadon&id=<?php echo $dong['MaPD']?>">Xoá</a></td>
 </tr>
<?php 
$Tongtien=0;
if(isset($_POST[$MaPD])){
	$sql2="UPDATE `chitietphieudat` SET `Tinhtrang`=1 WHERE MaPD='$MaPD' "; 
	$query2=mysqli_query($conn,$sql2);
	header('location:index.php?Quanly=Xulyhoadon');
	//
	$sql2="select * from phieudat where MaPD=$MaPD";
	$query2=mysqli_query($conn,$sql2);
	$dong3=mysqli_fetch_assoc($query2);
	$MaKH=$dong3['MaKH'];
	$sql3="insert into hoadon(MaKH,MaNV) value('{$MaKH}',102)";
	$query3=mysqli_query($conn,$sql3);
	//
	$sql4="select * from  hoadon order by MaHD desc LIMIT 1";
	$query4=mysqli_query($conn,$sql4);
	$dong4=mysqli_fetch_assoc($query4);
	$MaHD=$dong4['MaHD'];
	//
	$Tongtien=$Soluong*$Dongia;
	$sql5="insert into chitiethoadon(MaHD,MaSP,Soluong,Tongtien,Tinhtrang)
	 values ($MaHD,$MaSP,$Soluong,$Tongtien,0) ";
	$query5=mysqli_query($conn,$sql5);
}
}
?>
</table>
</form>
<?php 
	//xoa phieudat
 if(isset($_GET['id'])){
	  $id=$_GET['id'];
	  $sql=" delete from chitietphieudat where MaPD='$id'";
  mysqli_query($conn,$sql);
	 }
?>
</div>




    
