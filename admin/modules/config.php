<?php
 $tenmaychu='localhost';
 $tentaikhoan='root';
 $pass='';
 $csdl='web-ban-hang';
 $conn=mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl);
 mysqli_select_db($conn,$csdl);
?>
