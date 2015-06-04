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
    <meta property="fb:admins" content="1519007155006218" />

    <!-- favicon -->
    <link rel="shortcut icon" href="resources/images/favicon.png" type="image/x-icon" />

    <!-- css -->
    <link href="resources/css/style.css" rel="stylesheet">
    <link href="resources/css/detail-document.css" rel="stylesheet">

    <!-- script -->
    <script type="text/javascript">
      var documentID = <?php echo $documentID; ?>;

    </script>
    <script src="resources/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="resources/js/angular.js" type="text/javascript"></script>
    <script src="resources/js/script.js" type="text/javascript"></script>
    <script src="resources/js/detail-document.js" type="text/javascript"></script>
    <!--<script>-->

    <!-- Boostrap -->
    <link href="resources/css/bootstrap.css" rel="stylesheet">    
    <link href="resources/css/responsive.css" rel="stylesheet">
    <script src="resources/js/bootstrap.js"></script>

</head>

<body >
<?php include_once('include/header.php') ?>

<div id="banner">
    <div class="container-fluid" style="padding: 0px;"></div>
</div>

<div id="content" class="detail-document">
    <div class="container-fluid">
		  <div class="col-xs-12 col-sm-3">
        <h3>&nbsp;</h3>
        <div class="row">            
            <a href="#" class="advertisement"><img src="resources/images/adver/adver-4.jpg" alt="katchup.vn" class="img-responsive"></a>
        </div>
        <div class="row">
            <a href="#" class="advertisement"><img src="resources/images/adver/adver-5.jpg" alt="katchup.vn" class="img-responsive"/></a>
        </div>
        <div class="row">
            <a href="#" class="advertisement"><img src="resources/images/adver/adver-6.jpg" alt="katchup.vn" class="img-responsive"/></a>
        </div>
        <div class="row">
            <a href="#" class="advertisement"><img src="resources/images/adver/adver-7.jpg" alt="katchup.vn" class="img-responsive"/></a>
        </div>
        <div class="row">
            <h3>Tài liệu phổ biến</h3><hr>
             <div class="new-articles" >
                <?php

                // loop popular document
                foreach ($popularDocumentList as $popDoc) {
                  ?>
                    <div class="row item">
                        <div class="col-xs-12 col-sm-5 img">
                            <!-- image -->
                            <a href="chia-se-tai-lieu-tieng-nhat/tai-lieu/<?php echo $this->util->utf8_to_ascii_url($popDoc[TAI_LIEU_COL_TEN_TAI_LIEU]); ?>/<?php echo $popDoc[TAI_LIEU_COL_MA_TAI_LIEU]; ?>"><img src="<?php echo $this->util->getImagePathOrDefault($popDoc[TAI_LIEU_COL_HINH_ANH]); ?>" alt="katchup.vn" class="img-responsive"/></a>
                        </div>
                        <div class="col-xs-12 col-sm-7">
                          <!-- title -->
                          <a class="label label-primary" href="chia-se-tai-lieu-tieng-nhat/tai-lieu/<?php echo $this->util->utf8_to_ascii_url($popDoc[TAI_LIEU_COL_TEN_TAI_LIEU]); ?>/<?php echo $popDoc[TAI_LIEU_COL_MA_TAI_LIEU]; ?>" target="_blank"><?php echo $popDoc[TAI_LIEU_COL_TEN_TAI_LIEU]; ?></a>            
                          <p class="description"><?php echo $popDoc[TAI_LIEU_COL_MO_TA]; ?>
                          </p>
                          <dl>
                            <dd>
                              <!-- post time -->
                              <time class="item_published" datetime="2014-10-20 10:04"><?php echo $popDoc[TAI_LIEU_COL_NGAY_DANG]; ?></time>
                              <!-- view comment -->
                              <span class="kmt-comment">
                                <a href="chia-se-tai-lieu-tieng-nhat/tai-lieu/<?php echo $this->util->utf8_to_ascii_url($popDoc[TAI_LIEU_COL_TEN_TAI_LIEU]); ?>/<?php echo $popDoc[TAI_LIEU_COL_MA_TAI_LIEU]; ?>">0</a>
                              </span>
                            </dd>
                          </dl>
                        </div>
                        <div class="col-xs-12 col-sm-12 bottom-new-article"><hr></div>
                    </div>
                  <?php
                }
                // END loop popular document
                ?>

            </div>

        </div>
      </div>
      

      <div class="col-xs-12 col-sm-6" >

          <!-- ---------------------------------- detail article -->
          <h3><?php echo $documentSummary[TAI_LIEU_COL_TEN_TAI_LIEU]; ?></h3><hr>
          <div class="sum-document">
            <div class="row">
              <div class="detail">
                <div class="col-xs-4 col-sm-3">
                  <a target="_blank" href="<?php echo $documentSummary[TAI_LIEU_COL_HINH_ANH]; ?>" class="advertisement"><img src="<?php echo $this->util->getImagePathOrDefault($documentSummary[TAI_LIEU_COL_HINH_ANH]); ?>" alt="katchup.vn" class="img-responsive"></a>
                </div>
                <div class="col-xs-8 col-sm-9">
                  <?php echo $documentSummary[TAI_LIEU_COL_MO_TA]; ?>
                </div>
                <div class="detail-article">
                  <?php echo $documentSummary[TAI_LIEU_COL_CHI_TIET_BAI_VIET]; ?>
                </div>
                <div class="col-xs-12 col-sm-12">
                  <div class="fb-like" data-href="http://katchup.vn" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                </div>
              </div>              
            </div>
<!--
            <div class="row view-online">
              <div class="col-xs-12 col-sm-12">
                <div class="title">
                  <a data-toggle="collapse" href="#collapseViewOnline" aria-expanded="false" aria-controls="collapseViewOnline">Xem online</a>
                </div>
                <div class="collapse" id="collapseViewOnline">
                  <ol>
                    <li><a href="#">みんなの日本語</a></li>
                    <li><a href="#">みんなの日本語</a></li>
                    <li><a href="#">みんなの日本語</a></li>
                    <li><a href="#">みんなの日本語</a></li>
                    <li><a href="#">みんなの日本語</a></li>
                    <li><a href="#">みんなの日本語</a></li>
                    <li><a href="#">みんなの日本語</a></li>
                    <li><a href="#">みんなの日本語</a></li>
                    <li><a href="#">みんなの日本語</a></li>
                    <li><a href="#">みんなの日本語</a></li>
                  </ol>
                </div>
              </div>
            </div>

            <div class="row link-share">
              <div class="col-xs-12 col-sm-12">
                <div class="title">
                  <a data-toggle="collapse" href="#collapseLinkShare" aria-expanded="false" aria-controls="collapseLinkShare">Links đóng góp chia sẻ</a>
                </div>
                <div class="collapse" id="collapseLinkShare">
                  <ol>                  
                    <li>
                      <dl>
                        <dt>Bạn dấu tên</dt>
                        <dd>- Japan</dd>
                      </dl>
                    </li>
                    <li>
                      <dl>
                        <dt>Bạn tiên trương</dt>
                        <dd>- Tài liệu 2</dd>
                      </dl>
                    </li>
                    <li>
                      <dl>
                        <dt>Bạn Trường Hùng</dt>
                        <dd>- Noshare document</dd>
                      </dl>
                    </li>
                    <li>
                      <dl>
                        <dt>Bạn Hải</dt>
                        <dd>- Kanji Master</dd>
                        <dd>- Master japan</dd>
                      </dl>
                    </li>
                    <li>
                      <dl>
                        <dt>Bạn Hiếu</dt>
                        <dd>- Tải liệu 1</dd>
                      </dl>
                    </li>
                  </ol>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12">
                <span class="row">Chân thành cảm ơn các bạn đã đóng góp chia sẻ để dữ liệu trên website chúng ta ngày càng phong phú !</span>
              </div>
            </div>
-->
            <div class="col-xs-12 col-sm-12">
                <span class="row">Chân thành cảm ơn các bạn đã đóng góp chia sẻ để dữ liệu trên website chúng ta ngày càng phong phú !</span>
            </div>
            <div class="row facebook-comment">
              <div class="col-xs-12 col-sm-12">
                <!-- FB comment -->
                <div class="fb-comments" data-href="chia-se-tai-lieu-tieng-nhat/tai-lieu/<?php echo $documentSummary[TAI_LIEU_COL_TEN_TAI_LIEU]; ?>/<?php echo $documentSummary[TAI_LIEU_COL_MA_TAI_LIEU]; ?>" data-numposts="10" data-colorscheme="light"></div>
              </div>
            </div>

          </div>
          <!-- -------------------- END detail article -->
      </div>

      <div class="col-xs-12 col-sm-3">
        <h3>&nbsp;</h3>
        <div class="row">
            <a href="#" class="advertisement"><img src="resources/images/adver/adver-3.jpg" alt="katchup.vn" class="img-responsive"></a>
        </div>
        <div class="row">
            <a href="#" class="advertisement"><img src="resources/images/adver/adver-8.jpg" alt="katchup.vn" class="img-responsive"></a>
        </div>
        <div class="row">
            <a href="#" class="advertisement"><img src="resources/images/adver/adver-9.jpg" alt="katchup.vn" class="img-responsive"></a>
        </div>
        <div class="row">
          <!-- --------------------- Category List ---->
            <h3>Danh mục</h3><hr>
            <div class="popular-document category" >
              <?php
              foreach ($categoryList as $cat) {
                ?>
                <div class="item" >
                    <a class="link" href="chia-se-tai-lieu-tieng-nhat/danh-muc/<?php echo $cat[DANH_MUC_COL_TEN_DANH_MUC]; ?>/<?php echo $cat[DANH_MUC_COL_MA_DANH_MUC]; ?>"><h4><?php echo $cat[DANH_MUC_COL_TEN_DANH_MUC]; ?> | </h4></a>
                    <p class="text"><h4><?php echo $cat[DANH_MUC_COL_TEN_DANH_MUC_TIENG_NHAT]; ?></h4></p>
                </div>
                <?php
              }
              ?>
                
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