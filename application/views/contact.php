<?php
	$name ="";
	$email ="";
	$message ="";
	$errName ="";
    $errMessage ="";
    $errHuman ="";
    $result="";
    $errEmail ="";
	
	if (isset($_POST["submit"])) {
		$name = isset($_POST['name']);
		$email = isset($_POST['email']);
		$message = isset($_POST['message']);
		$human = intval($_POST['human']);
		$from = 'Email from Contact Form'; 
		$to = 'giaothuy17@gmail.com'; 
		$subject = 'Message from Contact Form ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Vui lòng nhập tên của bạn';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Địa chỉ Email không đúng';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Vui long nhập tin nhắn của bạn';
			
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <meta name="description" content=""/>
    <title>Flashcard katchup</title>
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
<body>
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
							
					<div class="form-group" >
						<label for="name" class="col-sm-2 control-label">Họ & tên</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="Họ & tên" ">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>					
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="admin@katchup.vn" ">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Tin nhắn</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Câu trả lời của bạn">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Gửi" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>
						</div>
					</div>
				</form> 
			</div>
		</div>
	</div>   
	</div>

  </body>

<?php include_once('include/footer.php') ?>

<?php include_once('include/box-letter.php') ?>

</body>
</html>