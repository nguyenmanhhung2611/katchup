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
    <script src="resources/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="resources/js/script.js" type="text/javascript"></script>
    <script src="resources/js/document.js" type="text/javascript"></script>
    <!--<script>-->

    <!-- Boostrap -->
    <link href="resources/css/bootstrap.css" rel="stylesheet">    
    <link href="resources/css/responsive.css" rel="stylesheet">
    <script src="resources/js/bootstrap.js"></script>
    

</head>
<body >
<?php include_once('include/header.php') ?>

<div id="banner">
    <div class="container-fluid" style="padding: 0px;">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">    
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <?php
            foreach ($articlesInSlide as $key => $article) {
              ?>
              <div class="item<?php if ($key == 0) echo " active"; ?>">
                <img height="900" width="400" src="<?php echo $this->util->getImagePathOrDefault($article[TAI_LIEU_COL_HINH_ANH]); ?>" alt="katchup.vn" >
                 <div class="carousel-caption">
                  <h4><a href="chia-se-tai-lieu-tieng-nhat/tai-lieu/<?php echo $this->util->utf8_to_ascii_url($article[TAI_LIEU_COL_TEN_TAI_LIEU]); ?>/<?php echo $article[TAI_LIEU_COL_MA_TAI_LIEU]; ?>"><?php echo $article[TAI_LIEU_COL_TEN_TAI_LIEU]; ?></a></h4>
                  <p><?php echo $article[TAI_LIEU_COL_MO_TA]; ?><a class="label label-primary" href="chia-se-tai-lieu-tieng-nhat/tai-lieu/<?php echo $this->util->utf8_to_ascii_url($article[TAI_LIEU_COL_TEN_TAI_LIEU]); ?>/<?php echo $article[TAI_LIEU_COL_MA_TAI_LIEU]; ?>" target="_blank">Chi tiết</a></p>
                </div>
              </div><!-- End Item -->
              <?php
            }
            ?>
                    
          </div><!-- End Carousel Inner -->


        <ul class="list-group col-sm-4">
          <?php
          foreach ($articlesInSlide as $key => $article) {
            ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>" class="list-group-item<?php if ($key == 0) echo " active"; ?>"><h4><?php echo $article[TAI_LIEU_COL_TEN_TAI_LIEU]; ?></h4></li>
            <?php
          }
          ?>

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
            <div id="popular-document" class="popular-document" >
              <?php
              foreach ($popularDocumentList as $popDoc) {
                ?>
                <div class="item" >
                    <a class="link" href="chia-se-tai-lieu-tieng-nhat/tai-lieu/<?php echo $this->util->utf8_to_ascii_url($popDoc[TAI_LIEU_COL_TEN_TAI_LIEU]); ?>/<?php echo $popDoc[TAI_LIEU_COL_MA_TAI_LIEU]; ?>"><h4><?php echo $popDoc[TAI_LIEU_COL_TEN_TAI_LIEU]; ?></h4></a>
                    <p class="text"><?php echo $popDoc[TAI_LIEU_COL_TEN_TAI_LIEU_TIENG_NHAT]; ?></p>
                </div>
                <?php
              }
              ?>
            </div>
        </div>
      </div>
        
      <div class="col-xs-12 col-sm-7" >
        <h3><?php echo $categoryName; ?></h3><hr>
        <div class="new-articles" >
          <?php
          /// -------------------------------------- loop show document list
            foreach ($documentList as $doc) {
              ?>
              <div class="row item" >
                <div class="col-xs-12 col-sm-3 img">
                    <a href="chia-se-tai-lieu-tieng-nhat/tai-lieu/<?php echo $this->util->utf8_to_ascii_url($doc[TAI_LIEU_COL_TEN_TAI_LIEU]); ?>/<?php echo $doc[TAI_LIEU_COL_MA_TAI_LIEU]; ?>"><img src="<?php echo $this->util->getImagePathOrDefault($doc[TAI_LIEU_COL_HINH_ANH]); ?>" alt="katchup.vn" class="img-responsive"/></a>
                </div>
                <div class="col-xs-12 col-sm-9">
                  <a class="label label-primary" href="chia-se-tai-lieu-tieng-nhat/danh-muc/<?php echo $this->util->utf8_to_ascii_url($doc[DANH_MUC_COL_TEN_DANH_MUC]); ?>/<?php echo $doc[DANH_MUC_COL_MA_DANH_MUC]; ?>" ><?php echo $doc[DANH_MUC_COL_TEN_DANH_MUC]; ?></a>
                  <a class="title" href="chia-se-tai-lieu-tieng-nhat/tai-lieu/<?php echo $this->util->utf8_to_ascii_url($doc[TAI_LIEU_COL_TEN_TAI_LIEU]); ?>/<?php echo $doc[TAI_LIEU_COL_MA_TAI_LIEU]; ?>"><h3><?php echo $doc[TAI_LIEU_COL_TEN_TAI_LIEU]; ?></h3></a>
                  <p class="title-japan"><?php echo $doc[TAI_LIEU_COL_TEN_TAI_LIEU_TIENG_NHAT]; ?></p>
                  <p class="description"><?php echo $doc[TAI_LIEU_COL_MO_TA]; ?>
                  </p>
                  
                  <dl>
                    <dd><date class="item_published" datetime="2014-10-20"><?php echo $doc[TAI_LIEU_COL_NGAY_DANG]; ?></date>
                        <span class="kmt-comment">
                          <a href="chia-se-tai-lieu-tieng-nhat/tai-lieu/<?php echo $this->util->utf8_to_ascii_url($doc[TAI_LIEU_COL_TEN_TAI_LIEU]); ?>/<?php echo $doc[TAI_LIEU_COL_MA_TAI_LIEU]; ?>">0</a>
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

          <h4 align="center">
          <?php
            /// ----------------------------------- loop show pagination
            foreach ($pageList as $p => $href) {
              if ($p == $currentPage) { echo $p; } else {
              ?>
                <a class="pagination-num-page" href="<?php echo $href; ?>"><?php echo $p; ?></a>
              <?php
              }
            }
            /// end loop show pagination
          ?>
          </h4>

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
          <?php
          /// ----------------------------------- loop category list
          foreach ($categoryList as $cat) {
            ?>
          <div class="popular-document category" >
              <div class="item" >
                  <a class="link" href="chia-se-tai-lieu-tieng-nhat/danh-muc/<?php echo $this->util->utf8_to_ascii_url($cat[DANH_MUC_COL_TEN_DANH_MUC]); ?>/<?php echo $cat[DANH_MUC_COL_MA_DANH_MUC]; ?>" ><h4><?php echo $cat[DANH_MUC_COL_TEN_DANH_MUC]; ?> | </h4></a>
                  <p class="text"><h4><?php echo $cat[DANH_MUC_COL_TEN_DANH_MUC_TIENG_NHAT]; ?></h4></p>
              </div>
          </div>
            <?php
          }
          /// end loop category list
          ?>
      </div>
    </div>

  </div>
</div>

<?php include_once('include/footer.php') ?>

<?php /*include_once('include/box-letter.php')*/ ?>

<?php include_once('include/live-vchat.php') ?>

<?php
  
?>
</body>


</html>