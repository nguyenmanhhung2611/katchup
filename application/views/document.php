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
    <link href="resources/css/document.css" rel="stylesheet">

    <!-- script -->
    <script type="text/javascript">
      var categoryID = <?php echo json_encode($categoryID); ?>;
      var pageNum = <?php echo json_encode($pageNum); ?>;
      var recPerPage = <?php echo json_encode(DOCUMENT_PAGE_DEFAULT_NUMBER_ITEM_PER_PAGE); ?>;

    </script>
    <script src="resources/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="resources/js/angular.js" type="text/javascript"></script>
    <script src="resources/js/script.js" type="text/javascript"></script>
    <script src="resources/js/document.js" type="text/javascript"></script>
    <!--<script>-->

    <!-- Boostrap -->
    <link href="resources/css/bootstrap.css" rel="stylesheet">    
    <link href="resources/css/responsive.css" rel="stylesheet">
    <script src="resources/js/bootstrap.js"></script>
    

</head>
<body ng-app="myDocument">
<?php include_once('include/header.php') ?>

<div id="banner">
    <div class="container-fluid" style="padding: 0px;">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">    
          <!-- Wrapper for slides -->
          <div class="carousel-inner">

            <div class="item active">
              <img src="resources/images/bootstrap-carousel/document/document-1.png" alt="katchup.vn" >
               <div class="carousel-caption">
                <h4><a href="#">Tiêu đề tài liệu 1</a></h4>
                <p>Giới thiệu tóm tắt tài liệu 1 <a class="label label-primary" href="#" target="_blank">Chi tiết</a></p>
              </div>
            </div><!-- End Item -->
     
             <div class="item">
              <img src="resources/images/bootstrap-carousel/document/document-2.png" alt="katchup.vn" >
               <div class="carousel-caption">
                <h4><a href="#">Tiêu đề tài liệu 2</a></h4>
                <p>Giới thiệu tóm tắt tài liệu 2 <a class="label label-primary" href="#" target="_blank">Chi tiết</a></p>
              </div>
            </div><!-- End Item -->
            
            <div class="item">
              <img src="resources/images/bootstrap-carousel/document/document-3.png" alt="katchup.vn" >
               <div class="carousel-caption">
                <h4><a href="#">Tiêu đề tài liệu 3</a></h4>
                <p>Giới thiệu tóm tắt tài liệu 3 <a class="label label-primary" href="#" target="_blank">Chi tiết</a></p>
              </div>
            </div><!-- End Item -->
            
            <div class="item">
              <img src="resources/images/bootstrap-carousel/document/document-4.png" alt="katchup.vn" >
               <div class="carousel-caption">
                <h4><a href="#">Tiêu đề tài liệu 4</a></h4>
                <p>Giới thiệu tóm tắt tài liệu 4 <a class="label label-primary" href="#" target="_blank">Chi tiết</a></p>
              </div>
            </div><!-- End Item -->

            <div class="item">
              <img src="resources/images/bootstrap-carousel/document/document-5.png" alt="katchup.vn" >
               <div class="carousel-caption">
                <h4><a href="#">Tiêu đề tài liệu 5</a></h4>
                <p>Giới thiệu tóm tắt tài liệu 5 <a class="label label-primary" href="#" target="_blank">Chi tiết</a></p>
              </div>
            </div><!-- End Item -->
                    
          </div><!-- End Carousel Inner -->


        <ul class="list-group col-sm-4">
          <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active"><h4>Tiêu đề tài liệu 1</h4></li>
          <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>Tiêu đề tài liệu 2</h4></li>
          <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4>Tiêu đề tài liệu 3</h4></li>
          <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4>Tiêu đề tài liệu 4</h4></li>
          <li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><h4>Tiêu đề tài liệu 5</h4></li>
        </ul>

          <!-- Controls -->
          <div class="carousel-controls">
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <!-- <span u="arrowleft" class="arrowleft" style="top: 123px; left: 8px;"></span> -->
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <!-- <span u="arrowright" class="arrowright" style="top: 123px; left: 8px;"></span> -->
                <span class="sr-only">Next</span>
              </a>
          </div>

        </div><!-- End Carousel -->
	  
    </div>
</div>

<div id="content" class="document">
    <div class="container-fluid">
		  <div class="col-xs-12 col-sm-2">
        <h3>&nbsp;</h3>            
        <div class="row">
            <a href="#" class="advertisement"><img src="resources/images/adver/adver-1.jpg" alt="katchup.vn" class="img-responsive"></a>
        </div>
        <div class="row">
            <a href="#" class="advertisement"><img src="resources/images/adver/adver-2.jpg" alt="katchup.vn" class="img-responsive"/></a>
        </div>
        <div class="row">
            <h3>Tài liệu phổ biến</h3><hr>
            <div id="popular-document" class="popular-document" ng-controller="ctrl-popular-document" >
                <div class="item" ng-repeat="e in arr">
                    <a class="link" href="home/tai-lieu-tieng-nhat/{{e.<?php echo TAI_LIEU_COL_MA_TAI_LIEU; ?>}}"><h4>{{e.<?php echo TAI_LIEU_COL_TEN_TAI_LIEU; ?>}}</h4></a>
                    <p class="text">{{e.<?php echo TAI_LIEU_COL_TEN_TAI_LIEU_TIENG_NHAT; ?>}}</p>
                </div>
            </div>
        </div>
      </div>
        
      <div class="col-xs-12 col-sm-7" >
        <h3><?php echo $categoryName; ?></h3><hr>
        <div class="new-articles" >
          <?php
          /// loop show document list
            foreach ($documentList as $doc) {
              ?>
              <div class="row item" >
                <div class="col-xs-12 col-sm-3 img">
                    <a href="home/<?php echo DEFAULT_PREFIX_DOCUMENT_URL; ?>/<?php echo $doc[TAI_LIEU_COL_MA_TAI_LIEU]; ?>"><img src="<?php echo $doc[TAI_LIEU_COL_HINH_ANH]; ?>" alt="katchup.vn" class="img-responsive"/></a>                       
                </div>
                <div class="col-xs-12 col-sm-9">
                  <a class="label label-primary" href="home/<?php echo DEFAULT_PREFIX_CATEGORY_URL; ?>/<?php echo $doc[DANH_MUC_COL_MA_DANH_MUC]; ?>" target="_blank"><?php echo $doc[DANH_MUC_COL_TEN_DANH_MUC]; ?></a>
                  <a class="title" href="home/<?php echo DEFAULT_PREFIX_DOCUMENT_URL; ?>/<?php echo $doc[TAI_LIEU_COL_MA_TAI_LIEU]; ?>"><h3><?php echo $doc[TAI_LIEU_COL_TEN_TAI_LIEU]; ?></h3></a>
                  <p class="title-japan"><?php echo $doc[TAI_LIEU_COL_TEN_TAI_LIEU_TIENG_NHAT]; ?></p>
                  <p class="description"><?php echo $doc[TAI_LIEU_COL_MO_TA]; ?>
                  </p>
                  
                  <dl>
                    <dd><time class="item_published" datetime="2014-10-20 10:04"><?php echo $doc[TAI_LIEU_COL_NGAY_DANG]; ?></time>
                        <span class="kmt-comment">
                          <a href="home/<?php echo DEFAULT_PREFIX_DOCUMENT_URL; ?>/<?php echo $doc[TAI_LIEU_COL_MA_TAI_LIEU]; ?>">0</a>
                        </span>
                    </dd>
                  </dl>
                </div>
                <div class="col-xs-12 col-sm-12 bottom-new-article"><hr></div>
            </div>
              <?php
            }
            /// end loop show document list
          ?>

          <h3 align="center">
          <?php
            /// loop show pagination
            foreach ($pageList as $p => $href) {
              ?>
              <a class="pagination-num-page" href="<?php echo $href; ?>"><?php echo $p; ?></a>
              <?php
            }
            /// end loop show pagination
          ?>
          </h3>

        </div>
        <a href="#" class="see-all">See all</a>
    </div>

    <div class="col-xs-12 col-sm-3">
      <h3>&nbsp;</h3>
      <div class="row">
          <a href="#" class="advertisement"><img src="resources/images/adver/adver-3.jpg" alt="katchup.vn" class="img-responsive"></a>
      </div>
      <div class="row">
          <h3>Danh mục</h3><hr>
          <div class="popular-document category" ng-controller="ctrl-category">
              <div class="item" ng-repeat="e in arr">
                  <a class="link" href="home/chia-se-tai-lieu-tieng-nhat/{{e.<?php echo DANH_MUC_COL_MA_DANH_MUC; ?>}}" ><h4>{{e.<?php echo DANH_MUC_COL_TEN_DANH_MUC; ?>}} | </h4></a>
                  <p class="text"><h4>{{e.<?php echo DANH_MUC_COL_TEN_DANH_MUC_TIENG_NHAT; ?>}}</h4></p>
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