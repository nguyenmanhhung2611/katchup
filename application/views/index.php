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
    <!--<script>-->

    <!-- Start lightbox -->
    <script src="resources/js/lightbox/jquery.lightbox.js" type="text/javascript"></script>
    <script src="resources/js/lightbox/lightbox.js" type="text/javascript"></script>
    <link href="resources/css/lightbox.css" rel="stylesheet">
    <!-- End lightbox -->

    <!-- Boostrap -->
    <link href="resources/css/bootstrap.css" rel="stylesheet">    
    <link href="resources/css/responsive.css" rel="stylesheet">
    <script src="resources/js/bootstrap.js"></script>

</head>
<body>
<div id="header" >
    <div class="container" id="toppage">        
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://katchup.vn"><img src="resources/images/logo.png" alt="" /></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
			<div class="container katchup-header-title">
                Luyện mãi thành tài, miệt mài tất giỏi
				<!-- style 1 -->
				<ul class="nav navbar-nav navbar-right katchup-nav katchup-login pull-right">
					<li><a id="login" class="btn btn-login" href="#">Đăng nhập</a></li>
					<li><a id="register" href="#">Đăng ký</a></li>
				</ul>
				<!-- style 2 -->
				<!-- <div class="btn-group" style="float: right; padding-top: 10px;">
					<button type="button" class="btn btn-primary">Đăng nhập</button>
					<button type="button" class="btn btn-primary">Đăng ký</button>
				</div> -->
            </div>
			<div class="container">
				<div class="row"  style="float: right;">
					<ul class="katchup-nav katchup-menu pull-left">
						<li class="active"><a href="#">Trang chủ</a></li>
						<li><a href="#">Luyện Thi</a></li>
						<li><a href="#">Tài liệu</a></li>
						<li><a href="#">Sản phẩm</a></li>
						<li><a href="#">Hỏi đáp</a></li>
					</ul>
				</div>
            </div>
            
          </div><!--/.nav-collapse -->
      </nav>
    </div>
</div>

<div id="banner">
    <div class="container-fluid" style="padding: 0px;">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">

			  <div class="item active">
				<img src="resources/images/bootstrap-carousel/slides/banner1.jpg" alt="katchupflashcards" >
				<div class="carousel-caption">
				  <h3>Chania</h3>
				  <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
				</div>
			  </div>

			  <div class="item">
				<img src="resources/images/bootstrap-carousel/slides/banner2.jpg" alt="katchupflashcards">
				<div class="carousel-caption">
				  <h3>Chania</h3>
				  <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
				</div>
			  </div>
			
			  <div class="item">
				<img src="resources/images/bootstrap-carousel/slides/banner3.jpg" alt="katchupflashcards">
				<div class="carousel-caption">
				  <h3>Flowers</h3>
				  <p>Beatiful flowers in Kolymbari, Crete.</p>
				</div>
			  </div>		 
	  
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			  <!--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->						  
				<span u="arrowleft" class="arrowleft" style="top: 123px; left: 8px;"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			  <!--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
			  <span u="arrowright" class="arrowright" style="top: 123px; left: 8px;"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>
	  
    </div>
</div>

<div id="content">
    <div class="container-fluid">
		<div class="row text-center katchup-study">
			<div class="col-xs-12 col-sm-4">
				<img src="resources/images/thinking-ideas.png" alt="" />
            </div>
			<div class="col-xs-12 col-sm-8 text-center katchup-active">
                <h2>Nếu bạn đã mua flashcard giấy, hãy kích hoạt sản phẩm và bắt đầu học thôi!
                    <a class="btn btn-green" href="#">Kích hoạt sản phẩm</a>
                </h2>
			</div>
			<div class="col-xs-12 col-sm-4">
				<ul class="katchup-tab-study-japan">
					<li><a href="#" class="btn" style="background-color: #8CD454;"><span class="text-medium" style="margin-top: 6px;">Thẻ học Kanji</span></a></li>
					<li><a href="#" class="btn" style="background-color: #F9C356;"><span class="text-medium" style="margin: 6px 0px 0px -6px;">Thẻ học ngữ pháp</span></a></li>
					<li><a href="#" class="btn" style="background-color: #567FFF;"><span class="text-medium" style="margin-top: 6px;">Thẻ học bảng chữ cái</span></a></li>
					<li><a href="#" class="btn" style="background-color: #F30100;"><span class="text-medium" style="margin: 6px 0px 0px -6px;">Thẻ học từ vựng</span></a></li>
					<li><a href="#" class="btn" style="background-color: #FF7F2B;"><span class="text-medium" style="margin-top: -3px;">Thẻ học mẫu câu thông dụng</span></a></li>
					<li><a href="#" class="btn" style="background-color: #9F108C;"><span class="text-medium" style="margin-top: -3px;">Thẻ học từ vựng theo chủ đề</span></a></li>
				</ul>				
            </div>
            <div class="col-xs-12 col-sm-4">
                <!-- <iframe class="text-video" width="100%" height="253" src="http://www.youtube.com/embed/XGSy3_Czz8k" frameborder="0" allowfullscreen></iframe> -->
                <iframe class="text-video" width="100%" height="253" src="https://www.youtube.com/embed/EnZ8DnYBMLY" frameborder="0" allowfullscreen></iframe>
            </div>
		</div>
       
        <div class="row text-center katchup-image">
            <div class="col-sm-7">
                <h2>Thiết kế tinh tế, tiện lợi và tập trung vào hiệu quả</h2>
				<div class="row">
					<div class="col-xs-6 col-sm-6 image-item">
						<a href="resources/images/9.jpg" data-rel="lightbox" class="thumbnail"><img src="resources/images/9.jpg" alt="work 1" class="img-responsive img-rounded"></a>
					</div>           
					<div class="col-xs-6 col-sm-6 image-item">
						<a href="resources/images/5.jpg" data-rel="lightbox" class="thumbnail"><img src="resources/images/5.jpg" alt="" class="img-responsive img-rounded"/></a>
					</div>
					<div class="col-xs-6 col-sm-6 image-item">
						<a href="resources/images/7.jpg" data-rel="lightbox" class="thumbnail"><img src="resources/images/7.jpg" alt="" class="img-responsive img-rounded"/></a>
					</div>
					<div class="col-xs-6 col-sm-6 image-item">
						<a href="resources/images/6.jpg" data-rel="lightbox" class="thumbnail"><img src="resources/images/6.jpg" alt="" class="img-responsive img-rounded"/></a>
					</div>
				</div>
            </div>			            
			
			<div class="col-sm-5">
                <h2>&nbsp;</h2>
				<div class="extra-wrap dropcap v1 clearfix">
					<div class="dropcap_item clearfix">
						<div class="left">A</div>
						<div class="extra-wrap">
							<div class="title-1"><a href="#">Chia sẻ tài liệu Tiếng Nhật</a></div>
							<div class="text">Minna no nihongo, Soumatome, JLPT ...</div>
						</div>
					</div>
					<div class="dropcap_item clearfix">
						<div class="left">B</div>
						<div class="extra-wrap">
							<div class="title-1"><a href="#">Luyện thi online</a></div>
							<div class="text">Luyện thi JLPT N5, N4, N3, N2, hán tự - kanji, Ngữ pháp, Từ vựng ...</div>
						</div>
					</div>
					<div class="dropcap_item clearfix">
						<div class="left">C</div>
						<div class="extra-wrap">
							<div class="title-1"><a href="#">Hỏi đáp về Tiếng Nhật</a></div>
							<div class="text">Thắc mắc về Tiếng Nhật, du học, xuất khẩu lao động</div>
						</div>
					</div>
					<div class="dropcap_item clearfix">
						<div class="left">D</div>
						<div class="extra-wrap">
							<div class="title-1"><a href="#">Kích hoạt sản phẩm và luyện thi</a></div>
							<div class="text">nếu bạn đã có mã khuyến mãi hoặc flashcard giấy, hãy kích hoạt sản phẩm và học luôn</div>
						</div>
					</div>
				</div>
            </div>
        </div>    		
        <div class="row text-center katchup-total">
            <div class="col-sm-3 col-xs-12" style="border-right-style: dashed; border-color: #F0F0F0;">
                <span class="number">77</span>
                <span class="name">Flashcard giấy đã bán</span>
                <span class="item-text">Bộ flashcard giấy được bán. Bộ flashcard giấy được bán. Bộ flashcard giấy được bán. Bộ flashcard giấy được bán. Bộ flashcard giấy được bán</span>
            </div>
            <div class="col-sm-3 col-xs-12" style="border-right-style: dashed; border-color: #F0F0F0;">
                <span class="number">44</span>
                <span class="name">E - Flashcard đã sử dụng</span>
                <span class="item-text">Bộ e-flashcard được sử dụng. Bộ e-flashcard được sử dụng. Bộ e-flashcard được sử dụng. Bộ e-flashcard được sử dụng. Bộ e-flashcard được sử dụng</span>
            </div>
			<div class="col-sm-3 col-xs-12">
                <span class="number">44</span>
                <span class="name">Tài liệu đã được chia sẻ</span>
                <span class="item-text">Bộ e-flashcard được sử dụng. Bộ e-flashcard được sử dụng. Bộ e-flashcard được sử dụng. Bộ e-flashcard được sử dụng. Bộ e-flashcard được sử dụng</span>
            </div>
             <div class="col-sm-3 col-xs-12 ico-contact">
                <span class="text-title">Hãy chọn ngay sản phẩm mà bạn muốn</span>
                <span class="item-text2">Katchup FlashCard - Phương pháp học Kanji, từ vựng, ngữ pháp hiệu quả nhất với thiết kế độc đáo, chất lượng, chống thấm, bền chắc, tiện lợi.</span>
            </div>
        </div>
        <div class="row text-center katchup-good">
            <div class="col-sm-12">
                <h2>Sử dụng flashcard để học hiệu quả hơn</h2>
            </div>
			
			<div class="col-xs-12 text-left">
                <div class="row">
                    <div class="col-sm-4 good-text">
                        <div class="good-item item-1">
                            <h3>Đơn giản và dễ dàng</h3>
                            Flashcard là tờ giấy 2 mặt với các ghi chú và hình ảnh minh họa. Học bằng flashcard để ghi nhớ những nội dung quan trọng dễ dàng, nhanh chóng.
                        </div>
                    </div>
                    <div class="col-sm-4 good-text">
                        <div class="good-item item-2">
                            <h3>Học nhanh – Nhớ lâu</h3>
                            katchup mang lại hiệu quả vượt trội, giúp bạn thuộc hơn 300 từ vựng/tháng và ghi nhớ mãi về sau. Giải quyết vấn đề từ vựng nhức nhối.
                        </div>
                    </div>					
                    <div class="col-sm-4 good-text">
                        <div class="good-item item-3">
                            <h3>Khả năng ghi nhớ được tối ưu hóa</h3>
                            Flashcard đã được khoa học chứng minh là phương pháp tối ưu để ghi nhớ thông tin nhờ áp dụng các nguyên tắc khoa học về trí nhớ: 1 question-1 answer, spaced repetition, liên kết hình ảnh… Giúp học tốt hơn 200% so với những cách thông thường.
                        </div>
                    </div>					
                </div>
                <div class="row">
                    <div class="col-sm-4 good-text">
                        <div class="good-item item-4">
                            <h3>Nội dung chất lượng cao</h3>
                            Nội dung biên soạn từ những nguồn tài liệu uy tín: Barron, Cambridge, Prince-ton..., đảm bảo sự hoàn chỉnh, được chăm chút kỹ lưỡng đến từng chi tiết. Nội dung được kiểm duyệt hơn 7 vòng trước khi xuất bản và cập nhật liên tục nhằm mang đến chất lượng cao nhất.
                        </div>
                    </div>
					<div class="col-sm-4 good-text">
                        <div class="good-item item-5">
                            <h3>Học và kiểm tra thông minh</h3>
                            Hệ thống e-flashcard thông minh được tùy chỉnh cho từng cá nhân. Dựa vào kế hoạch học tập bạn đặt ra, hệ thống sẽ tự động theo dõi và nhắc nhở giúp bạn hoàn thành kế hoạch. Bạn còn được cung cấp các bài kiểm tra nhằm tối ưu hóa khả năng ghi nhớ.
                        </div>
                    </div>
					<div class="col-sm-4 good-text">
                        <div class="good-item item-7">
                            <h3>Dễ dàng vượt qua các kỳ thi hóc búa</h3>
                            Những kỳ thi quốc tế khó khăn vì lượng từ vựng khổng lồ mà bạn phải học thuộc. Flashcard giúp bạn sẽ nắm vững từ vựng và vượt qua các kì thi TOEIC, IELTS, TOEFL, SAT... dễ dàng hơn.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center katchup-text">
            <div class="col-sm-12">
                <h2>Khách hàng nói gì về KatchUp?</h2>
            </div>
			
            <div class="text-item">
                <div class="text">
                    Mình cực thích hệ thống online của katchup! Hệ thống duy nhất ở Việt Nam mình thấy hiệu quả và giúp mình học rất nhanh!
                </div>
                <div class="author">
                    <img src="resources/images/p1.png" alt="">
                    <span class="name">Trương Lương Thảo Uyên</span><br/>
                    SAT 1320, TOEFL 102, IELTS 7.0
                </div>
            </div>
            <div class="text-item">
                <div class="text">
                    Bộ từ của katchup rất phù hợp với mình. Hình minh họa vui giúp mình ngốn 1200 từ mới trong 3 tháng để thi TOEFL.
                </div>
                <div class="author">
                    <img src="resources/images/p6.png" alt="">
                    <span class="name">Trần Lương Minh Khôi</span><br/>
                    TOEFL iBT 108
                </div>
            </div>
            <div class="text-item">
                <div class="text">
                    Flashcard là phương pháp học mới, thú vị, hiệu quả. katchup đang sản xuất ra những bộ flashcard chất lượng cao và giàu tâm huyết.
                </div>
                <div class="author">
                    <img src="resources/images/p3.png" alt="">
                    <span class="name">Viện Giáo Dục và Trí Tuệ Việt Nam</span><br/>
                    IEDV
                </div>
            </div>
            <div class="text-item">
                <div class="text">
                    Mỗi lần nghĩ đến Flashcard katchup, anh liên tưởng đến sản phẩm của Apple, đơn giản nhưng hiệu quả.
                </div>
                <div class="author">
                    <img src="resources/images/p4.png" alt="">
                    <span class="name">Nguyễn Hữu Trí</span><br/>
                    Master Trainer học viện Breakthrough Power
                </div>
            </div>
            <div class="text-item">
                <div class="text">
                    Từ vựng là nền tảng của ngoại ngữ. Học từ vựng bằng katchup dễ dàng, hiệu quả hơn những cách học truyền thống rất nhiều.
                </div>
                <div class="author">
                    <img src="resources/images/p5.png" alt="">
                    <span class="name">Hoàng Tú Quỳnh</span><br/>
                    Chủ tịch Hội IELTS Việt Nam
                </div>
            </div>
			<div class="text-item last">
                <div class="text">
                    Flashcard là phương pháp học mới, thú vị, hiệu quả. katchup đang sản xuất ra những bộ flashcard chất lượng cao và giàu tâm huyết.
                </div>
                <div class="author">
                    <img src="resources/images/p3.png" alt="">
                    <span class="name">Viện Giáo Dục và Trí Tuệ Việt Nam</span><br/>
                    IEDV
                </div>
            </div>
        </div>
        
    </div>
</div>



<div id="footer">
    <div class="container-fluid">
        <div class="row">
			<div class="col-sm-4 ">			
				<div class="row facebook-box-like">
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>				
					<div class="fb-page" data-href="https://www.facebook.com/katchup.vn" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/katchup.vn"><a href="https://www.facebook.com/katchup.vn">Katchup FlashCard - Thẻ Học Tiếng Nhật</a></blockquote></div></div>
				</div>
			</div>
            <div class="col-sm-4 ">
                <div class="footer-top row">
                    <div class="col-xs-3 footer-sitemap">
                        <h3>Flashcard giấy</h3>
                        <ul>
                            <li><a href="#">Thẻ học Kanji</a></li>
                            <li><a href="#">Thẻ học ngữ pháp</a></li>
                            <li><a href="#">Thẻ học từ vựng</a></li>
							<li><a href="#">Thẻ học mẫu câu thông dụng</a></li>
							<li><a href="#">Thẻ học bảng chữ cái</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3 footer-sitemap">
                        <h3>E-flashcard</h3>
                        <ul>
                            <li><a href="#">E - Kanji</a></li>
                            <li><a href="#">E - ngữ pháp</a></li>
							<li><a href="#">E - từ vựng</a></li>
							<li><a href="#">E - mẫu câu thông dụng</a></li>
							<li><a href="#">E - bảng chữ cái</a></li>
                        </ul>
                    </div>
                    
                </div>
				
				<div class="footer-customer">                    
                    <div class="row">
                        <div class="col-sm-6 col-xs-6 footer-quote text-center katchup-text">
                            <div class="text-item1">
								<div class="text">
									HÃY LÀ MỘT CON TEM. <br/>GẮN CHẶT VÀO MỤC TIÊU CHO TỚI KHI ĐẾN ĐÍCH
								</div>
							</div>
                        </div>
                    </div>
                </div>
				
            </div>
            <div class="col-sm-4">
                <div class="row" style="padding-top: 20px;">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-xs-2 col-sm-3">
                                <a href="#">
                                    <img src="resources/images/360k.png" alt="" class="img-responsive"/>
                                </a>
                            </div>            
                            <div class="col-xs-10 col-sm-9">
                                <a href="#">
                                    <img src="resources/images/logo.png" alt="" class="img-responsive"/>
                                </a>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" style="margin-top: 10px;">                        
                        <div class="row">
                            <p>Bản quyền &copy; 2015 thuộc TRUONG HUNG PHAT</p>
                            <p>TRADING & SERVICES CO., LTD</p>
                            <p>Địa chỉ: 237/84/8, Đường Pham Van Chieu, P14, Quận Gò Vấp, TP.HCM</p>
                            <p>Điện thoại: 0939 543 548</p>
                            <p>Email: admin@katchup.vn</p>
                            <p>Website: www.katchup.vn</p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    Element 7 &copy; All Rights Reserved &nbsp;&nbsp; | &nbsp;&nbsp; Privacy Policy
                </div>
            </div>
        </div>
    </div>
</div>

<a class="scrollup" href="#toppage" title="Về đầu trang" style="display: inline;"></a>

<div id="box-letter">
    <div class="box-letter-container">
        <div id="box-letter-header">
            <div class="icon-email"></div>
            <div class="box-letter-title">Hộp thư góp ý</div>
            <div class="icon-close"></div>
        </div>
        <div class="clear-both"></div>
        <div id="box-letter-content" class="hide">
            <form action="" role="form">
                <div class="content">
                    <!-- <div><span>Tên</span><br/><input class="form-control" type="text" name="txtName" id="txtName"  placeholder="Họ tên"/></div>
                    <div><span>Tin nhắn</span><br/><textarea class="form-control" rows="2" cols="18" id="txtarea" placeholder="Tin nhắn"></textarea></div> -->
                    <span class="help-block">Cảm ơn bạn, xin để lại lời góp ý tại đây.</span>
                    <div class="form-group">
                      <label for="comment">Tên:</label>
                      <input class="form-control" type="text" name="txtName" id="txtName"  placeholder="Họ tên"/>
                    </div>
                    <div class="form-group">
                      <label for="comment">Tin nhắn:</label>
                      <textarea class="form-control" rows="2" cols="18" id="txtarea" placeholder="Tin nhắn"></textarea>
                    </div>
                </div>
                <input class="btn btn-info btn-xs" id="sendmail" type="submit" value="Gửi" name="btnSend" id="btnSend" />
            </form>
        </div>        
    </div>
</div>

</body>
</html>