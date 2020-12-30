<?php
	include('modules/config.php');
	session_start();
		if(isset($_POST['login'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$sql="select * from admin where email='$email' and password='$password' limit 1";
		$query=mysqli_query($conn,$sql);
		$nums=mysqli_num_rows($query);
		if($nums>0){
			$_SESSION['login']=$email;
			header('location:index.php');
		}else{
			header('location:login.php');
		}
	}
?>
<style>
    body
    {
background:url(/DAmonhoc/Admin/assets/images/4.png);
background-size: cover; 
    }
  </style>
  <link rel="stylesheet" type="text/css" href="/DAmonhoc/Admin/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/DAmonhoc/Admin/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/DAmonhoc/Admin/assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/DAmonhoc/Admin/assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="/DAmonhoc/Admin/assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/DAmonhoc/Admin/assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/DAmonhoc/Admin/assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="/DAmonhoc/Admin/assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/DAmonhoc/Admin/assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="/DAmonhoc/Admin/assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-t-85 p-b-20">
<form class="login100-form validate-form" style="padding-top:20px"action="" method="post" enctype="multipart/form-data">

      <span class="login100-form-title p-b-70">
            Welcome Admin
      </span>
      <span class="login100-form-avatar">
            <img src="/DAmonhoc/Admin/assets/images/images.png" alt="AVATAR">
          </span>

          <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
            <input class="input100" type="text" name="email">
            <span class="focus-input100" data-placeholder="email"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
            <input class="input100" type="password" name="password">
            <span class="focus-input100" data-placeholder="password"></span>
          </div>

          <div class="container-login100-form-btn">
            <input class="login100-form-btn" type="submit" name="login" id="login" value="LOGIN">
            </input>
          </div>
            </form>
          </div>  
        </div>
      </div>

</div>
<div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="/DAmonhoc/Admin/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="/DAmonhoc/Admin/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="/DAmonhoc/Admin/assets/vendor/bootstrap/js/popper.js"></script>
  <script src="/DAmonhoc/Admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="/DAmonhoc/Admin/assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="/DAmonhoc/Admin/assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="/DAmonhoc/Admin/assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="/DAmonhoc/Admin/assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="/DAmonhoc/Admin/assets/js/main.js"></script>
