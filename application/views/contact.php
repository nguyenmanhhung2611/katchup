<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <meta name="description" content=""/>
    <title>Liên hệ với Flashcard katchup</title>
	<base href="<?php echo ITQ_BASE_URL;?>" />
	<!-- <li><a href="<?php /*echo ITQ_BASE_URL;*/?>backend/auth/forgot" title="Quen mat khau">Quen mat khau</a></li> -->
	
    <!-- meta tags for FB sharing-->
    <meta property="og:title" content="Flashcard katchup" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="resources/images/2.jpg" />
    <meta property="og:url" content="" />

    <!-- css -->
    <link href="resources/css/style.css" rel="stylesheet">

    <!-- script -->
    <script src="resources/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="resources/js/script.js" type="text/javascript"></script>
    <script src="resources/js/contact.js" type="text/javascript"></script>
    <!--<script>-->

    <!-- Boostrap -->
    <link href="resources/css/bootstrap.css" rel="stylesheet">    
    <link href="resources/css/responsive.css" rel="stylesheet">
    <script src="resources/js/bootstrap.js"></script>

</head>
<body>
<?php include_once('include/header.php') ?>
<div id="banner">
	<div class="container"></div>
</div>
<div id="content">
<div class="container">
    <div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1 class="page-header text-center"><span style="font-weight:bold">Liên hệ</span></h1>
			<form class="form-horizontal" role="form" method="post" >
							
						<h3 class="text-center"><p><span style="color:#31A4D9;font-weight:bold">Công ty TNHH TM - DV Trường Hùng Phát</span></p></h3>
						<h4 class="text-center">
							<p><b>Website:</b> <a href="www.katchup.vn">www.katchup.vn</a> </p>
	                         <p><b>Điện thoại:</b> 0939 543 548 - 0901.41.14.14</p>
	                         <p><b>Email:</b> 
	                            <a href="mailto:admin@katchup.vn">admin@katchup.vn</a> -
	                            	<a href="mailto:admin@katchup.vn">support@katchup.vn</a>
	                            </p>                           
								<p><b>Địa chỉ:</b> 237/84/8, Đường Phạm Văn Chiêu, P14, Quận Gò Vấp, TP.HCM</p>
                            </h4>       
        
		
            <?php $attributes = array("class" => "form-horizontal", "name" => "contact");
            echo form_open("contact", $attributes);?>
            <fieldset>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="name" class="control-label">Họ & tên</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="name" placeholder="Họ & tên đầy đủ của bạn" type="text" value="<?php echo set_value('name'); ?>" />
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="email" class="control-label">Email</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="email" placeholder="Email của bạn" type="text" value="<?php echo set_value('email'); ?>" />
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="subject" class="control-label">Tiêu đề</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="subject" placeholder="Tiêu đề" type="text" value="<?php echo set_value('subject'); ?>" />
                    <span class="text-danger"><?php echo form_error('subject'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="message" class="control-label">Tin nhắn</label>
                </div>
                <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="4" placeholder="Tinh nhắn của bạn"><?php echo set_value('message'); ?></textarea>
                    <span class="text-danger"><?php echo form_error('message'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <input name="submit" type="submit" class="btn btn-primary" value="Gửi" />
                </div>
            </div>
            </fieldset>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>
</div>
</div>
<?php include_once('include/footer.php') ?>
<?php include_once('include/box-letter.php') ?>
</body>
</html>