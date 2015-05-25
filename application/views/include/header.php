<!-- http://www.malot.fr/bootstrap-datetimepicker/demo.php -->
<link href="resources/css/bootstrap-datetimepicker.css" rel="stylesheet">
<script src="resources/js/bootstrap-datetimepicker.js"></script>

<div id="header" >  
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <div class="container noselect" id="toppage">
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://katchup.vn"><img src="resources/images/logo.png" alt="katchup.vn" /></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
      <div class="container katchup-header-title">
                Luyện mãi thành tài, miệt mài tất giỏi
        <!-- style 1 -->
        <ul class="nav navbar-nav navbar-right katchup-nav katchup-login pull-right">
          <li><a id="login" class="btn btn-login" data-toggle="modal" href="#modalLogin">Đăng nhập</a></li>
          <!-- Button trigger modal -->
          <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalLogin">
            Launch demo modal
          </button> -->          
          <?php require 'modal/modal-login.php'; ?>
          <?php require 'modal/modal-forgot-password.php'; ?>
          <?php require 'modal/modal-register.php'; ?>
          
          <li><a id="register" data-toggle="modal" href="#modalRegister">Đăng ký</a></li>
        </ul>
        <!-- style 2 -->
        <!-- <div class="btn-group" style="float: right; padding-top: 10px;">
          <button type="button" class="btn btn-primary">Đăng nhập</button>
          <button type="button" class="btn btn-primary">Đăng ký</button>
        </div> -->
            </div>
      <div class="container">
        <div class="row katchup-menu-container">
          <ul class="katchup-nav katchup-menu pull-left">
            <li class="active"><a href="#">Trang chủ</a></li>
            <li><a href="#">Luyện Thi</a></li>
            <li><a href="<?php echo ITQ_BASE_URL;?>home/chia-se-tai-lieu-tieng-nhat">Tài liệu</a></li>
            <li><a href="#">Sản phẩm</a></li>
            <li><a href="<?php echo ITQ_BASE_URL;?>home/news">Tin tức</a></li>
            <li><a href="#">Hỏi đáp</a></li>
            <li><a href="<?php echo ITQ_BASE_URL;?>contact">Liên hệ</a></li>
          </ul>
        </div>
            </div>
            
          </div><!--/.nav-collapse -->
      </nav>
    </div>
</div>