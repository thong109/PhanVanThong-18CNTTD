<?php 
require_once __DIR__."/autoload/autoload.php";

$category = $db->fetchAll("category");
	if(!isset($_SESSION['login'])){
		header('location:login.php');
	}


?>
<?php  require_once __DIR__. "/layouts/header.php"; ?>
             <main>
             	  <div class="row">
        <div class="container-fluid">
            
        <h1 class="text-center">Chào mừng bạn đến với MOTORAD</h1>
  
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Bảng Điều Khiển</a></li>
            <li class="breadcrumb-item">Chào Mừng</li>
        </ol>
</div>
<img src="/web_ban_hang/public/uploads/product/banner.png" alt="" height="auto" width="80%">
</div> </main>
                       
 <?php  require_once __DIR__. "/layouts/footer.php"; ?>
                     
             