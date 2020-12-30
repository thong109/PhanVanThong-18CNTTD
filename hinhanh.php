<?php 
        require_once __DIR__."/autoload/autoload.php";
        $con = mysqli_connect("localhost","root","","web-ban-hang");
        $data =
        [
            'name' => postInput("name"),
            'email' => postInput("email"),
            'phone' =>postInput("phone"),
            'address' => postInput("address"),
            'title' => postInput("title"),
            'content' => postInput("content")
            
            
        ];
        $error = [];
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            
            if ($data['name'] == '')
            {
                $error['name'] = "Bạn chưa nhập tên !!! ";
            }

                
            if ($data['email'] == '')
            {
                $error['email'] = "Bạn chưa nhập tên email !!! ";
            }


                if ($data['phone'] == '')
            {
                $error['phone'] = "Bạn chưa nhập số điện thoại !!! ";
            }

             if ($data['title'] == '')
            {
                $error['title'] = "Bạn chưa nhập tiêu đề !!! ";
            }

             if ($data['content'] == '')
            {
                $error['content'] = "Bạn chưa nhập nội dung !!! ";
            }
            

            //kiểm tra mảng error
            if (empty($error)) 
            {
                $idinsert = $db->insert("feedback",$data);
                if ($idinsert > 0 )
                {
                  
                  echo "<script>alert('Cảm ơn bạn đã gửi liên hệ đến chúng tôi.');location.href='index.php'</script>";
                }
                else
                {
                    
                }
            }
        }


?>
<?php require_once __DIR__. "/layouts/header.php"; ?>
<div class="col-md-9 bor">
 <h3 class="title-main" ><a href="">Hệ thống phân phối</a> </h3>
    <div style="float: left;" >
        <h3>Miền Bắc: Đại lý Moto Long Biên</h3>
        <p>
            100 Ngô Gia Tự, Phường Đức Giang, Quận Long Biên, Hà Nội
            <br>SĐT: 0778953112
            <br>Email<a href="mailto:thong.phan109@gmail.com">:Motomienbac@gmail.com</a>
        </p>
        <p>
            Giờ Hoạt Động
            <br>Thứ 2 - Thứ 7 : 8:00 - 17:00
            <br>Chủ Nhật : Nghỉ
        </p>

        <h3>Miền Trung: Đại lý Moto Đà Nẵng</h3>
        <p>
            123 Đỗ Thúc Tịnh, Phường Khuê Trung, Quận Cẩm Lệ, Đà Nẵng
            <br>SĐT: 0778960401
            <br>Email<a href="mailto:thong.phan109@gmail.com">:Motomientrung@gmail.com</a>
        </p>
        <p>
            Giờ Hoạt Động
            <br>Thứ 2 - Thứ 7 : 8:00 - 17:00
            <br>Chủ Nhật : Nghỉ
        </p>

        <h3>Miền Nam: Đại lý Moto HCM</h3>
        <p>
           90 Đường Lê Thị Riêng, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh
            <br>SĐT: 0778970401
            <br>Email<a href="mailto:thong.phan109@gmail.com">:Motomiennam@gmail.com</a>
        </p>
        <p>
            Giờ Hoạt Động
            <br>Thứ 2 - Thứ 7 : 8:00 - 17:00
            <br>Chủ Nhật : Nghỉ
        </p>

    </div>
    <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.717253580031!2d108.20712741408236!3d16.02822768890628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142198c348d0327%3A0x599ee8b73422f0dd!2zazEyMywgMTQgxJDhu5cgVGjDumMgVOG7i25oLCBLaHXDqiBUcnVuZywgQ-G6qW0gTOG7hywgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1607544816083!5m2!1svi!2s" width="480" height="425" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>

    
    <section class="box-main1">
        <h3 class="title-main" ><a href=""> Liên hệ  </a> </h3>
        <div id="main-content">
            <h3>Mọi thắc mắc quý khách hàng vui lòng liên hệ số điện thoại 0369216924 hoặc gọi cho chúng tôi vào Hotline 19001969.</h3>
        <div>
       	<div class="description">
                <span> Xin vui lòng điền các yêu cầu vào mẫu dưới đây và gửi cho chúng tôi. Chúng tôi
                sẽ trả lời bạn ngay sau khi nhận được. Xin chân thành cảm ơn!</span>
            </div>
            <form action="" method="POST">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="contact-feedback">
                        <form ng-submit="sendContact()" class="ng-pristine ng-invalid ng-invalid-required ng-valid-email">

                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-user"></i></span>
                                <input name="name" type="text" placeholder="Họ tên" ng-model="Name" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" required="" value="<?php echo $data['name'] ?>">
                                <?php if (isset($error['name'])): ?>
                        <p class="text-danger"><?php echo $error['name'] ?></p>
                    <?php endif ?>
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                <input name="address" type="text" placeholder="Địa chỉ" ng-model="Address" class="form-control ng-pristine ng-untouched ng-valid" value="<?php echo $data['address'] ?>">
                                <?php if (isset($error['address'])): ?>
                        <p class="text-danger"><?php echo $error['address'] ?></p>
                    <?php endif ?>  
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="email" name="email" placeholder="Email" ng-model="Email" class="form-control ng-pristine ng-untouched ng-valid-email ng-invalid ng-invalid-required" required=""  value="<?php echo $data['email'] ?>">
                                <?php if (isset($error['email'])): ?>
                        <p class="text-danger"><?php echo $error['email'] ?></p>
                    <?php endif ?>  
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input type="number" name="phone" min="0" placeholder="Điện thoại" ng-model="Phone" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" required="" value="<?php echo $data['phone'] ?>">
                                <?php if (isset($error['phone'])): ?>
                        <p class="text-danger"><?php echo $error['phone'] ?></p>
                    <?php endif ?>
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" name="title" placeholder="Tiêu đề" ng-model="Title" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" required="" value="<?php echo $data['title'] ?>">
                                <?php if (isset($error['title'])): ?>
                        <p class="text-danger"><?php echo $error['title'] ?></p>
                    <?php endif ?>
                            </div>

                            <div class="form-group">
                                <textarea type="text" name="content" placeholder="Nội dung" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" rows="3" ng-model="Content" required="" value="<?php echo $data['content'] ?>"></textarea>
                                <?php if (isset($error['content'])): ?>
                        <p class="text-danger"><?php echo $error['content'] ?></p>
                    <?php endif ?>
                            </div>
                            <button style="margin-bottom: 10px;" class="btn btn-success" type="submit">Gửi</button>
                        </form>
                    </div>
                </div>
               
            </div>
       			
       
       </div>
     
        </div>
    </section>
</div>
</form>
<?php require_once __DIR__. "/layouts/footer.php"; ?>