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
            <div class="banner-tx-center" >
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
        <ul class="thumbnails" ng-controller="ProductCtrl">
            <div class="col-xs-6 col-sm-3">
                <div class="thumbnail product-item" id="product_1">
                    <span class="sticker_top"> top</span>
                    <div class="panel-body">
                      <a href="resources/images/product/items/hd/item-products-hd-1.jpg" data-rel="lightbox" class="thumbnail zoom">
                        <img width="320" height="200" src="resources/images/product/items/item-products-1.jpg" alt="katchup.vn" class="img-responsive img-rounded" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      </a>
                    </div>
                    <div class="caption">
                        <h3><a href="#">Kanji N5,4</a></h3>
                        <p>Thẻ học kanji N5,4 (300 chữ hán đơn - 1200 chữ hán ghép) giúp bạn học hán tự nhanh bằng hình ảnh được chăm chút, đặt vào ngữ cảnh
                         và thể hiện sát nghĩa của từ kèm theo cách nhớ ...</p>                        
                        <p class="price-old">120.000đ</p>
                        <span class="price">108.000đ</span>
                        <p align="right">                          
                          <a href="javascript:void(0);" ng-click="itemProduct('product_1')" class="btn btn-info"> Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="thumbnail product-item" id="product_2">
                    <span class="sticker_sale"> sale</span>
                    <div class="panel-body">
                      <a href="resources/images/product/items/hd/item-products-hd-2.jpg" data-rel="lightbox" class="thumbnail zoom">
                        <img width="320" height="200" src="resources/images/product/items/item-products-2.jpg" alt="katchup.vn" class="img-responsive img-rounded" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      </a>
                    </div>
                    <div class="caption">
                        <h3><a href="#">Kanji N3</a></h3>
                        <p>Thẻ học kanji N3 (360 chữ hán đơn - 1500 chữ hán ghép) giúp bạn học hán tự nhanh bằng hình ảnh được chăm chút, đặt vào ngữ cảnh
                         và thể hiện sát nghĩa của từ kèm theo cách nhớ ...</p>
                        <p class="price-old">150.000đ</p>
                        <span class="price">144.000đ</span>
                        <p align="right">                          
                          <a href="javascript:void(0);" ng-click="itemProduct('product_2')" class="btn btn-info"> Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="thumbnail product-item" id="product_3">
                    <span class="sticker_sale"> sale</span>
                    <div class="panel-body">
                      <a href="resources/images/product/items/hd/item-products-hd-3.jpg" data-rel="lightbox" class="thumbnail zoom">
                        <img width="320" height="200" src="resources/images/product/items/item-products-3.jpg" alt="katchup.vn" class="img-responsive img-rounded" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      </a>
                    </div>
                    <div class="caption">
                        <h3><a href="#">Kanji N2</a></h3>
                        <p>Thẻ học kanji N2 gồm 4 cuốn (360 chữ hán đơn - 1500 chữ hán ghép) giúp bạn học hán tự nhanh bằng hình ảnh được chăm chút, đặt vào ngữ cảnh
                         và thể hiện sát nghĩa của từ kèm theo cách nhớ ...</p>
                         <p class="price-old">150.000đ</p>
                        <span class="price">144.000đ</span>
                        <p align="right">                          
                          <a href="javascript:void(0);" ng-click="itemProduct('product_3')" class="btn btn-info"> Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="thumbnail product-item" id="product_4">
                    <div class="panel-body">
                      <a href="resources/images/product/items/hd/item-products-hd-4.jpg" data-rel="lightbox" class="thumbnail zoom">
                        <img width="320" height="200" src="resources/images/product/items/item-products-4.jpg" alt="katchup.vn" class="img-responsive img-rounded" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      </a>
                    </div>
                    <div class="caption">
                        <h3><a href="#">Bảng chữ cái</a></h3>
                        <p>Thẻ học Hiragana và Katakana gồm 2 cuốn (kèm theo 100 từ vựng bằng hình ảnh) có thứ tự cách viết và sử dụng những hình ảnh kèm theo từ vựng
                          phổ biến để bạn bắt đầu học tiếng Nhật dễ dàng và thú vị hơn ...</p>
                        <p class="price-old">82.000đ</p>
                        <span class="price">72.000đ</span>
                        <p align="right">                          
                          <a href="javascript:void(0);" ng-click="itemProduct('product_4')" class="btn btn-info"> Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="thumbnail product-item" id="product_5">
                    <div class="panel-body">
                      <a href="resources/images/product/items/hd/item-products-hd-5.jpg" data-rel="lightbox" class="thumbnail zoom">
                        <img width="320" height="200" src="resources/images/product/items/item-products-5.jpg" alt="katchup.vn" class="img-responsive img-rounded" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      </a>
                    </div>
                    <div class="caption">
                        <h3><a href="#">Ngữ pháp sơ cấp N5,4 </a></h3>
                        <p>Thẻ học Ngữ pháp sơ cấp N5,4 giúp bạn học ngữ pháp nhanh bằng những mẫu câu ví dụ, ý nghĩa và những lưu ý
                        của mẫu câu đó giúp bạn nắm chắc ngữ pháp ...</p>
                        <p class="price-old">120.000đ</p>
                        <span class="price">108.000đ</span>
                        <p align="right">                          
                          <a href="javascript:void(0);" ng-click="itemProduct('product_5')" class="btn btn-info"> Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="thumbnail product-item" id="product_6">
                    <span class="sticker_sale"> sale</span>
                    <div class="panel-body">
                      <a href="resources/images/product/items/hd/item-products-hd-6.jpg" data-rel="lightbox" class="thumbnail zoom">
                        <img width="320" height="200" src="resources/images/product/items/item-products-6.jpg" alt="katchup.vn" class="img-responsive img-rounded" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      </a>
                    </div>
                    <div class="caption">
                        <h3><a href="#">Ngữ pháp trung cấp N3,2</a></h3>
                        <p>Thẻ học Ngữ pháp trung cấp N3 - N2 giúp bạn học ngữ pháp nhanh bằng những mẫu câu ví dụ, ý nghĩa và những lưu ý
                        của mẫu câu đó giúp bạn nắm chắc ngữ pháp ...</p>
                        <p class="price-old">42.000đ</p>
                        <span class="price">36.000đ</span>
                        <p align="right">                          
                          <a href="javascript:void(0);" ng-click="itemProduct('product_6')" class="btn btn-info"> Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="thumbnail product-item" id="product_7">
                    <div class="panel-body">
                      <a href="resources/images/product/items/hd/item-products-hd-7.jpg" data-rel="lightbox" class="thumbnail zoom">
                        <img width="320" height="200" src="resources/images/product/items/item-products-7.jpg" alt="katchup.vn" class="img-responsive img-rounded" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      </a>
                    </div>
                    <div class="caption">
                        <h3><a href="#">Từ vựng Minna</a></h3>
                        <p>Thẻ học Từ vựng Minna (gồm 3000 từ vựng và mẫu câu) giúp bạn học hán tự nhanh từ vựng mỗi ngày bằng 
                          phương pháp học bằng cách hỏi - trả lời rất là dễ nhớ và khó quên</p>
                        <p class="price-old">120.000đ</p>
                        <span class="price">108.000đ</span>
                        <p align="right">
                          <a href="javascript:void(0);" ng-click="itemProduct('product_7')" class="btn btn-info"> Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="thumbnail product-item" id="product_8">
                    <span class="sticker_new"> new</span>
                    <div class="panel-body">
                      <a href="resources/images/product/items/hd/item-products-hd-8.jpg" data-rel="lightbox" class="thumbnail zoom">
                        <img width="320" height="200" src="resources/images/product/items/item-products-8.jpg" alt="katchup.vn" class="img-responsive img-rounded" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                      </a>
                    </div>
                    <div class="caption">
                        <h3><a href="#">Mẫu câu giao tiếp</a></h3>
                        <p>Thẻ học Mẫu câu giao tiếp giúp bạn học  tiếng Nhật với nhưng mẫu câu giao tiếp thường sử dụng và sẽ dễ dàng hơn trong
                          việc giao tiếp tiếng Nhật...</p>
                        <p class="price-old">00.000đ</p>
                        <span class="price">00.000đ</span>
                        <p align="right">
                          <a href="javascript:void(0);" ng-click="itemProduct('product_8')" class="btn btn-info"> Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>

        </ul> <!-- End product -->
        <div class="clearfix"></div>
        <div class="container">
          <a data-toggle="collapse" href="#collapseCheckout" aria-expanded="false" aria-controls="collapseCheckout">
            <img title="Giỏ hàng" src="resources/images/checkout.png" alt="katchup.vn" class="img-responsive checkout-left">
          </a>
          <h4 class="more-views"><a href="#">(Xem thêm nhiều sản phẩm khác ở dạng e-flashcard)</a></h4>
          <a data-toggle="collapse" href="#collapseCheckout" aria-expanded="false" aria-controls="collapseCheckout">
            <img title="Giỏ hàng" src="resources/images/checkout.png" alt="katchup.vn" class="img-responsive checkout-right">
          </a> 
        </div>

        <div class="collapse" id="collapseCheckout" ng-controller="itemProductCtrl">
          <div class="container-fluid">
            <div ng-repeat="item in products" id="{{item.id}}" class="checkout-item">
              <p class="col-xs-6 col-sm-2">
                <img width="320" height="200" src="{{item.img}}" alt="katchup.vn" class="img-responsive img-rounded" />
              </p>
              <p class="col-xs-6 col-sm-4">
                <i class="title">{{item.title}}</i></br>
                <i class="description">{{item.desc}}</i>
              </p>
              <p class="col-xs-6 col-sm-3 price">
                <b title="Giá">{{item.price}}</b>
              </p>
              <p class="col-xs-6 col-sm-2">
                <input title="Số lượng" type="text" ng-model="item.amount" class="form-control" ng-blur="changeAmountProduct(item.id)">
              </p>
              <p class="col-xs-6 col-sm-1">
                <span title="Xóa" class="glyphicon glyphicon-trash" ng-click="deleteItemProduct(item.id)"></span>
              </p>
            </div>

            <!-- Total -->
            <hr>
            <div class="checkout-total">              
              <p class="col-xs-6 col-sm-offset-6 col-sm-3">
                <b>Tổng cộng</b>
              </p>
              <p class="col-xs-6 col-sm-3">
                <b id="total">0</b>
              </p>
              <p class="row col-xs-12 col-sm-12">
                <a data-toggle="collapse" href="#collapseCheckoutItem" aria-expanded="false" aria-controls="collapseCheckoutItem">
                  <img width="180" title="Tiến hành thanh toán" src="resources/images/btn-checkout.gif" alt="katchup.vn" class="img-responsive checkout-left">
                </a>
                <div class="collapse" id="collapseCheckoutItem">
                  <div class="container-fluid">
                    <div class="ChooseCity">
                      <label class="radio-inline"><input id="tphcmCity" type="radio" name="optradioCity" checked>TP Hồ Chí Minh</label>
                      <label class="radio-inline"><input id="ttkCity" type="radio" name="optradioCity">Tỉnh thành khác</label>
                    </div>                    
                    <div class="collapse" id="collapseTphcm">
                      <div class="radio">
                        <label><input type="radio" name="optradioCityPrice" checked>Giao trong ngày với chi phí 30000</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="optradioCityPrice">Giao trong 2-3 ngày với chi phí 15000</label>
                      </div>
                      <b>Free ship với đơn hàng > 400k</b>
                    </div>
                    <div class="collapse" id="collapseTtk">
                      <div class="ttk-detail">
                        <span>Giao trong 3-5 ngày với chi phí 40000</span>
                        </br><b>Free ship với đơn hàng > 600k</b>
                      </div>
                    </div>
                  </div>
                </div>
              </p>
            </div>

            

          </div>
        </div>

        <div class="container-fluid infor">
          <div class="col-xs-6 col-sm-6">
            <p class="text">
              TẠI SAO DÙNG FLASHCARD GIẤY?</br>
              Dễ dàng học thuộc NHANH kanji, từ vựng, ngữ pháp </br>
              Học hiệu quả hơn 200% so với cách học thông thường</br>
              Hình ảnh minh họa giúp học nhanh hơn và nhớ lâu hơn</br>
              Học mọi lúc, mọi nơi</br>
              Tặng hệ thống học online miễn phí</br>
              Tự tin làm chủ Kanji, từ vựng, ngữ pháp cho kì thi JLPT, NAT TEST, BJT, TOP J
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
              <h2><b>FLASHCARD giấy giúp bạn những gì?</b></h2>
          </div>
          <div class="container-fluid">
            <div class="col-xs-6 col-sm-6 text">
              <h2 class="title"><b>1. HỌC CỰC NHANH, NHỚ CỰC LÂU</b></h2>
              <p class="description">
                 Với Flashcard KatchUp, bạn có thể học thuộc đến 200 Kanji - 100 mẫu ngữ pháp - 600 từ vựng mới mỗi tháng mà nhớ cực lâu. 
                 Cực kỳ dễ dàng, đơn giản và không mất nhiều thời gian. Khi đã thuộc thì bạn sẽ nhớ rất lâu. Không còn lo lắng việc liên
                  tục quên những nội dung đã học.
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
              <h2 class="title"><b>2. HỌC BẰNG LIÊN KẾT HÌNH ẢNH</b></h2>
              <p class="description">
                 Hình ảnh minh họa cho từng Kanji là điểm độc đáo của Flashcard KatchUp. Chưa có bất cứ bộ từ vựng nào làm được việc này.
                  Hình ảnh được chăm chút, đặt vào ngữ cảnh và thể hiện sát nghĩa của từ. Ghi nhớ bằng hình ảnh giúp tăng 200% khả năng
                   nhớ của não bộ. Bằng cách này, bạn gần như sẽ không quên những gì đã học.
              </p>
            </div>            
          </div>
          <hr class="line">
          <div class="container-fluid">
            <div class="col-xs-6 col-sm-6 text">
              <h2 class="title"><b>3. HỌC MỌI LÚC MỌI NƠI</b></h2>
              <p class="description">
                 Thiết kế nhỏ gọn giúp bạn mang theo KatchUp mọi lúc mọi nơi. Tưởng tượng bạn có thể học ở bất cứ đâu và bất kì lúc nào:
                  đi xe bus, xếp hàng, đi toilet, hay thậm chí là dừng đèn đỏ. Mỗi ngày trôi qua với KatchUp bạn đều thấy được hiệu quả.
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
              <h2 class="title"><b>4. HỌC ONLINE MIỄN PHÍ</b></h2>
              <p class="description">
                 Khi mua sản phẩm giấy tại KatchUp, bạn được cung cấp tài khoản sử dụng các chức năng hỗ trợ học tập, theo dõi tiến độ,
                  kiểm tra tăng cường hiệu quả và nhiều lợi ích khác. Tất cả được thiết kế dành riêng cho khả năng học của bạn.
                   Hoàn toàn miễn phí và có giá trị vĩnh viễn.
              </p>
            </div>            
          </div>
          <hr class="line">
          <div class="container-fluid">
            <div class="col-xs-6 col-sm-6 text">
              <h2 class="title"><b>5. GẠT BỎ NỖI LO HÁN TỰ, TỪ VỰNG</b></h2>
              <p class="description">
                 Với Flashcard KatchUp, hàng ngàn từ Kanji, mẫu ngữ pháp và từ vựng của các kỳ thi JLPT, NAT TEST, BJT, TOP J không còn 
                 là nỗi ám ảnh nữa vì bạn đã chinh phục tất cả. Học và tự tin làm chủ từ vựng để đạt thành tích cao trong các kỳ thi nhé.
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