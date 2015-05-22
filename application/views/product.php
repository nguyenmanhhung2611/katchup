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

    <!-- favicon -->
    <link rel="shortcut icon" href="resources/images/favicon.png" type="image/x-icon" />

    <!-- css -->
    <link href="resources/css/style.css" rel="stylesheet">
    <link href="resources/css/product.css" rel="stylesheet">

    <!-- script -->
    <script src="resources/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="resources/js/angular.js" type="text/javascript"></script>
    <script src="resources/js/script.js" type="text/javascript"></script>
    <script src="resources/js/product.js" type="text/javascript"></script>
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

<body ng-app="myProduct">
<?php include_once('include/header.php') ?>

<div id="banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <a href="#">
            <div class="banner-tx-left">
              <div class="block">
                  <span class="title">Giao hàng miễn phí</span></br>
                  <span class="description">Với đơn hàng trên 500.000đ</span>
              </div>
            </div>
          </a>
          <div class="panel-body">
            <a href="resources/images/product/hd/product-1-hd.jpg" data-rel="lightbox" class="thumbnail zoom">
              <img width="420" height="210" src="resources/images/product/product-1.jpg" alt="katchup.vn" class="img-responsive img-rounded">
              <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
            </a>
          </div>
         </div>
         <div class="col-xs-12 col-sm-4">
          <a href="#">
            <div class="banner-tx-center">
              <div class="block">
                  <span class="title">Tặng 100% phí khóa học</span></br>
                  <span class="description">Online và luyện thi tiếng Nhật</span>
              </div>
            </div>
          </a>
         </div>
         <div id="banner-tx-right" class="col-xs-12 col-sm-4">
            <div class="panel-body">
              <a href="resources/images/product/hd/product-2-hd.jpg" data-rel="lightbox" class="thumbnail zoom">
                <img width="420" height="210" src="resources/images/product/product-2.jpg" alt="katchup.vn" class="img-responsive img-rounded">
                <span class="overlay except1"><i class="glyphicon glyphicon-fullscreen"></i></span>
              </a>
            </div>
          </a>
          <a href="#">
            <div class="banner-tx-right">
              <div class="block">
                  <span class="title">Khuyến mãi khủng</span></br>
                  <span class="description">Giảm 20% cho tất cả flashcard</span>
              </div>
            </div>
           </a> 
         </div>
	   
     </div>

    </div>
</div>

<div id="content">
  <div class="container-fluid">    
    <div class="row product">
        <!-- Product -->
        <ul class="thumbnails">
            <div class="col-xs-6 col-sm-3">
                <div class="thumbnail product-item">
                    <span class="sticker_top"> top</span>
                    <div class="panel-body">
                      <a href="resources/images/product/items/hd/item-products-hd-1.jpg" data-rel="lightbox" class="thumbnail zoom">
                        <img width="320" height="200" src="resources/images/product/items/item-products-1.jpg" alt="katchup.vn" class="img-responsive img-rounded" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      </a>
                    </div>
                    <div class="caption">
                        <h3><a href="#">Thẻ học Kanji</a></h3>
                        <p>Thẻ học kanji từ N5-N1 giúp bạn học hán tự nhanh bằng hình ảnh kèm theo cách nhớ ...</p>
                        <span class="price">$49.99</span>
                        <p align="right">                          
                          <a href="#" class="btn btn-info"> Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="thumbnail product-item">
                    <span class="sticker_sale"> sale</span>
                    <div class="panel-body">
                      <a href="resources/images/product/items/hd/item-products-hd-3.jpg" data-rel="lightbox" class="thumbnail zoom">
                        <img width="320" height="200" src="resources/images/product/items/item-products-3.jpg" alt="katchup.vn" class="img-responsive img-rounded" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      </a>
                    </div>
                    <div class="caption">
                        <h3><a href="#">Thẻ học Kanji</a></h3>
                        <p>Thẻ học kanji từ N5-N1 giúp bạn học hán tự nhanh bằng hình ảnh kèm theo cách nhớ ...</p>
                        <span class="price">$49.99</span>
                        <p align="right">                          
                          <a href="#" class="btn btn-info"> Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="thumbnail product-item">
                    <span class="sticker_sale"> sale</span>
                    <div class="panel-body">
                      <a href="resources/images/product/items/hd/item-products-hd-2.jpg" data-rel="lightbox" class="thumbnail zoom">
                        <img width="320" height="200" src="resources/images/product/items/item-products-2.jpg" alt="katchup.vn" class="img-responsive img-rounded" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      </a>
                    </div>
                    <div class="caption">
                        <h3><a href="#">Thẻ học Kanji</a></h3>
                        <p>Thẻ học kanji từ N5-N1 giúp bạn học hán tự nhanh bằng hình ảnh kèm theo cách nhớ ...</p>
                        <span class="price">$49.99</span>
                        <p align="right">                          
                          <a href="#" class="btn btn-info"> Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="thumbnail product-item">
                    <div class="panel-body">
                      <a href="resources/images/product/items/hd/item-products-hd-1.jpg" data-rel="lightbox" class="thumbnail zoom">
                        <img width="320" height="200" src="resources/images/product/items/item-products-1.jpg" alt="katchup.vn" class="img-responsive img-rounded" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      </a>
                    </div>
                    <div class="caption">
                        <h3><a href="#">Thẻ học Kanji</a></h3>
                        <p>Thẻ học kanji từ N5-N1 giúp bạn học hán tự nhanh bằng hình ảnh kèm theo cách nhớ ...</p>
                        <span class="price">$49.99</span>
                        <p align="right">                          
                          <a href="#" class="btn btn-info"> Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="thumbnail product-item">
                    <div class="panel-body">
                      <a href="resources/images/product/items/hd/item-products-hd-1.jpg" data-rel="lightbox" class="thumbnail zoom">
                        <img width="320" height="200" src="resources/images/product/items/item-products-1.jpg" alt="katchup.vn" class="img-responsive img-rounded" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      </a>
                    </div>
                    <div class="caption">
                        <h3><a href="#">Thẻ học Kanji</a></h3>
                        <p>Thẻ học kanji từ N5-N1 giúp bạn học hán tự nhanh bằng hình ảnh kèm theo cách nhớ ...</p>
                        <span class="price">$49.99</span>
                        <p align="right">                          
                          <a href="#" class="btn btn-info"> Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="thumbnail product-item">
                    <span class="sticker_sale"> sale</span>
                    <div class="panel-body">
                      <a href="resources/images/product/items/hd/item-products-hd-3.jpg" data-rel="lightbox" class="thumbnail zoom">
                        <img width="320" height="200" src="resources/images/product/items/item-products-3.jpg" alt="katchup.vn" class="img-responsive img-rounded" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      </a>
                    </div>
                    <div class="caption">
                        <h3><a href="#">Thẻ học Kanji</a></h3>
                        <p>Thẻ học kanji từ N5-N1 giúp bạn học hán tự nhanh bằng hình ảnh kèm theo cách nhớ ...</p>
                        <span class="price">$49.99</span>
                        <p align="right">                          
                          <a href="#" class="btn btn-info"> Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="thumbnail product-item">
                    <div class="panel-body">
                      <a href="resources/images/product/items/hd/item-products-hd-2.jpg" data-rel="lightbox" class="thumbnail zoom">
                        <img width="320" height="200" src="resources/images/product/items/item-products-2.jpg" alt="katchup.vn" class="img-responsive img-rounded" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      </a>
                    </div>
                    <div class="caption">
                        <h3><a href="#">Thẻ học Kanji</a></h3>
                        <p>Thẻ học kanji từ N5-N1 giúp bạn học hán tự nhanh bằng hình ảnh kèm theo cách nhớ ...</p>
                        <span class="price">$49.99</span>
                        <p align="right">                          
                          <a href="#" class="btn btn-info"> Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="thumbnail product-item">
                    <span class="sticker_new"> new</span>
                    <div class="panel-body">
                      <a href="resources/images/product/items/hd/item-products-hd-3.jpg" data-rel="lightbox" class="thumbnail zoom">
                        <img width="320" height="200" src="resources/images/product/items/item-products-3.jpg" alt="katchup.vn" class="img-responsive img-rounded" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      </a>
                    </div>
                    <div class="caption">
                        <h3><a href="#">Thẻ học Kanji</a></h3>
                        <p>Thẻ học kanji từ N5-N1 giúp bạn học hán tự nhanh bằng hình ảnh kèm theo cách nhớ ...</p>
                        <span class="price">$49.99</span>
                        <p align="right">                          
                          <a href="#" class="btn btn-info"> Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>

        </ul> <!-- End product -->
        <a class="container more-views" href="#"><h4>(Xem thêm nhiều sản phẩm khác ở dạng e-flashcard)</h4></a>

        <div class="container-fluid infor">
          <div class="col-xs-6 col-sm-6">
            <p class="text">
              TẠI SAO DÙNG FLASHCARD GIẤY?</br>
              Dễ dàng học thuộc kanji, tu vung 600 từ vựng/tháng</br>
              Học hiệu quả hơn 200% so với cách học thông thường</br>
              Hình ảnh minh họa giúp học nhanh hơn và nhớ lâu hơn</br>
              Học mọi lúc, mọi nơi</br>
              Tặng hệ thống học online miễn phí</br>
              Tự tin làm chủ từ vựng cho kì thi NAT TEST, JLPT
            </p>
          </div>
          <div class="col-xs-6 col-sm-6">
            <div class="panel-body">
              <a href="resources/images/product/hd/product-3-hd.jpg" data-rel="lightbox" class="thumbnail zoom">
                <img width="630" height="285" src="resources/images/product/product-3.jpg" alt="katchup.vn" class="img-responsive img-rounded">
                <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
              </a> 
            </div>
          </div>
        </div>

        <div class="container-fluid benefit">
          <div class="col-sm-12 introduce">
              <h2>FLASHCARD giấy giúp bạn những gì?</h2>
          </div>
          <div class="container-fluid">
            <div class="col-xs-6 col-sm-6 text">
              <h2 class="title">1. HỌC CỰC NHANH, NHỚ CỰC LÂU</h2>
              <p class="description">
                 Thêm vChat vào website của bạn chỉ chưa đầy 5 phút và sau
                 đó vChat sẽ giúp bạn kết nối với khách hàng truy cập website
                 cực kỳ đơn giản. Bạn sẽ nhìn thấy ai đang online, họ đến từ
                 đâu và đang xem sản phẩm gì.

                 Nhận thông báo từ hệ thống nếu có khách hàng muốn giúp đỡ, bạn có thể hỗ trợ họ, nâng cao chất lượng dịch vụ chăm sóc khách hàng của bạn.
              </p>
            </div>
            <div class="col-xs-6 col-sm-6">
              <div class="panel-body">
                <a href="resources/images/product/hd/product-4-hd.jpg" data-rel="lightbox" class="thumbnail zoom">
                  <img width="615" height="315" src="resources/images/product/product-4.jpg" alt="katchup.vn" class="img-responsive img-rounded">
                  <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                </a>
              </div>
            </div>
          </div>
          <hr class="line">
          <div class="container-fluid">
            <div class="col-xs-6 col-sm-6">
              <div class="panel-body">
                <a href="resources/images/product/hd/product-5-hd.jpg" data-rel="lightbox" class="thumbnail zoom">
                  <img width="615" height="315" src="resources/images/product/product-5.jpg" alt="katchup.vn" class="img-responsive img-rounded">
                  <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                </a>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 text">
              <h2 class="title">2. HỌC BẰNG LIÊN KẾT HÌNH ẢNH</h2>
              <p class="description">
                 Thêm vChat vào website của bạn chỉ chưa đầy 5 phút và sau
                 đó vChat sẽ giúp bạn kết nối với khách hàng truy cập website
                 cực kỳ đơn giản. Bạn sẽ nhìn thấy ai đang online, họ đến từ
                 đâu và đang xem sản phẩm gì.

                 Nhận thông báo từ hệ thống nếu có khách hàng muốn giúp đỡ, bạn có thể hỗ trợ họ, nâng cao chất lượng dịch vụ chăm sóc khách hàng của bạn.
              </p>
            </div>            
          </div>
          <hr class="line">
          <div class="container-fluid">
            <div class="col-xs-6 col-sm-6 text">
              <h2 class="title">3. HỌC MỌI LÚC MỌI NƠI</h2>
              <p class="description">
                 Thêm vChat vào website của bạn chỉ chưa đầy 5 phút và sau
                 đó vChat sẽ giúp bạn kết nối với khách hàng truy cập website
                 cực kỳ đơn giản. Bạn sẽ nhìn thấy ai đang online, họ đến từ
                 đâu và đang xem sản phẩm gì.

                 Nhận thông báo từ hệ thống nếu có khách hàng muốn giúp đỡ, bạn có thể hỗ trợ họ, nâng cao chất lượng dịch vụ chăm sóc khách hàng của bạn.
              </p>
            </div>
            <div class="col-xs-6 col-sm-6">
              <div class="panel-body">
                <a href="resources/images/product/hd/product-6-hd.jpg" data-rel="lightbox" class="thumbnail zoom">
                  <img width="615" height="315" src="resources/images/product/product-6.jpg" alt="katchup.vn" class="img-responsive img-rounded">
                  <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                </a>
              </div>
            </div>
          </div>
          <hr class="line">
          <div class="container-fluid">
            <div class="col-xs-6 col-sm-6">
              <div class="panel-body">
                <a href="resources/images/product/hd/product-7-hd.jpg" data-rel="lightbox" class="thumbnail zoom">
                  <img width="615" height="315" src="resources/images/product/product-7.jpg" alt="katchup.vn" class="img-responsive img-rounded">
                  <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                </a>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 text">
              <h2 class="title">4. HỌC ONLINE MIỄN PHÍ</h2>
              <p class="description">
                 Thêm vChat vào website của bạn chỉ chưa đầy 5 phút và sau
                 đó vChat sẽ giúp bạn kết nối với khách hàng truy cập website
                 cực kỳ đơn giản. Bạn sẽ nhìn thấy ai đang online, họ đến từ
                 đâu và đang xem sản phẩm gì.

                 Nhận thông báo từ hệ thống nếu có khách hàng muốn giúp đỡ, bạn có thể hỗ trợ họ, nâng cao chất lượng dịch vụ chăm sóc khách hàng của bạn.
              </p>
            </div>            
          </div>
          <hr class="line">
          <div class="container-fluid">
            <div class="col-xs-6 col-sm-6 text">
              <h2 class="title">5. GẠT BỎ NỖI LO HÁN TỰ, TỪ VỰNG</h2>
              <p class="description">
                 Thêm vChat vào website của bạn chỉ chưa đầy 5 phút và sau
                 đó vChat sẽ giúp bạn kết nối với khách hàng truy cập website
                 cực kỳ đơn giản. Bạn sẽ nhìn thấy ai đang online, họ đến từ
                 đâu và đang xem sản phẩm gì.

                 Nhận thông báo từ hệ thống nếu có khách hàng muốn giúp đỡ, bạn có thể hỗ trợ họ, nâng cao chất lượng dịch vụ chăm sóc khách hàng của bạn.
              </p>
            </div>
            <div class="col-xs-6 col-sm-6">
              <div class="panel-body">
                <a href="resources/images/product/hd/product-8-hd.jpg" data-rel="lightbox" class="thumbnail zoom">
                  <img width="615" height="315" src="resources/images/product/product-8.jpg" alt="katchup.vn" class="img-responsive img-rounded">
                  <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                </a>
              </div>
            </div>
          </div>

        </div>

    </div>    

  </div>
</div>

<?php include_once('include/footer.php') ?>

<?php /*include_once('include/box-letter.php')*/ ?>

<?php include_once('include/live-vchat.php') ?>

</body>
</html>