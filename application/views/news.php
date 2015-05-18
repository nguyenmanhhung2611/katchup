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
    <link href="resources/css/news.css" rel="stylesheet">

    <!-- script -->
    <script src="resources/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="resources/js/angular.js" type="text/javascript"></script>
    <script src="resources/js/script.js" type="text/javascript"></script>
    <script src="resources/js/news.js" type="text/javascript"></script>
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
              <a href="#">
                <img src="resources/images/bootstrap-carousel/news/news-1.jpg" alt="katchup.vn" >
                 <div class="carousel-caption">
                  <h4>tiêu đề tài liệu 1</h4>
                </div>
              </a>
            </div><!-- End Item -->
     
             <div class="item">
              <a href="#">
                <img src="resources/images/bootstrap-carousel/news/news-2.jpg" alt="katchup.vn" >
                 <div class="carousel-caption">
                  <h4>tiêu đề tài liệu 2</h4>
                </div>
              </a>
            </div><!-- End Item -->
            
            <div class="item">
              <a href="#">
                <img src="resources/images/bootstrap-carousel/news/news-3.jpg" alt="katchup.vn" >
                 <div class="carousel-caption">
                  <h4>tiêu đề tài liệu 3</h4>
                </div>
              </a>
            </div><!-- End Item -->
            
            <div class="item">
              <a href="#">
                <img src="resources/images/bootstrap-carousel/news/news-1.jpg" alt="katchup.vn" >
                 <div class="carousel-caption">
                  <h4>tiêu đề tài liệu 4</h4>
                </div>
              </a>
            </div><!-- End Item -->

            <div class="item">
              <a href="#">
                <img src="resources/images/bootstrap-carousel/news/news-2.jpg" alt="katchup.vn" >
                 <div class="carousel-caption">
                  <h4>tiêu đề tài liệu 5</h4>
                </div>
              </a>
            </div><!-- End Item -->
                    
          </div><!-- End Carousel Inner -->


        <ul class="list-group col-sm-4">
          <li class="list-group-item" title="Tiêu đề tin tức 1 Tiêu đề tin tức 1 1 1 1">
            <a href="#">
              <img class="img-responsive" alt="katchup.vn" src="resources/images/news-new-articles/news-1.png">
              <h4>Tiêu đề tin tức 1 Tiêu đề tin tức 1 1 1 1</h4>
            </a>
          </li>
          <li class="list-group-item" title="Tiêu đề tin tức 2">
            <a href="#">
              <img class="img-responsive" alt="katchup.vn" src="resources/images/news-new-articles/news-2.png">
              <h4>Tiêu đề tin tức 2</h4>
            </a>
          </li>
          <li class="list-group-item" title="Tiêu đề tin tức 3">
            <a href="#">
              <img class="img-responsive" alt="katchup.vn" src="resources/images/news-new-articles/news-3.png">
              <h4>Tiêu đề tin tức 3</h4>
            </a>
          </li>
          <li class="list-group-item" title="Tiêu đề tin tức 4">
            <a href="#">
              <img class="img-responsive" alt="katchup.vn" src="resources/images/news-new-articles/news-1.png">
              <h4>Tiêu đề tin tức 4</h4>
            </a>
          </li>
          <li class="list-group-item" title="Tiêu đề tin tức 5">
            <a href="#">
              <img class="img-responsive" alt="katchup.vn" src="resources/images/news-new-articles/news-2.png">
              <h4>Tiêu đề tin tức 5</h4>
            </a>
          </li>
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
            <h3>Tin tức đọc nhiều</h3><hr>
            <div id="popular-document" class="popular-document">
                <div class="item">
                    <a class="link" href="<?php echo ITQ_BASE_URL;?>home/detailDocument/1"><h4>Giáo trình Minna no nihongo</h4></a>
                    <p class="text"><span class="glyphicon glyphicon-time"></span> 03:53PM | 18/05/2015</p>
                </div>
                <div class="item">
                    <a class="link" href="<?php echo ITQ_BASE_URL;?>home/detailDocument/2"><h4>Giáo trình Minna no nihongo</h4></a>
                    <p class="text"><span class="glyphicon glyphicon-time"></span> 03:53PM | 18/05/2015</p>
                </div>
                <div class="item">
                    <a class="link" href="<?php echo ITQ_BASE_URL;?>home/detailDocument/3"><h4>Giáo trình Minna no nihongo</h4></a>
                    <p class="text"><span class="glyphicon glyphicon-time"></span> 03:53PM | 18/05/2015</p>
                </div>
               <div class="item">
                    <a class="link" href="<?php echo ITQ_BASE_URL;?>home/detailDocument/1"><h4>Giáo trình Minna no nihongo</h4></a>
                    <p class="text"><span class="glyphicon glyphicon-time"></span> 03:53PM | 18/05/2015</p>
                </div>
                <div class="item">
                    <a class="link" href="<?php echo ITQ_BASE_URL;?>home/detailDocument/1"><h4>Giáo trình Minna no nihongo</h4></a>
                    <p class="text"><span class="glyphicon glyphicon-time"></span> 03:53PM | 18/05/2015</p>
                </div>
                <div class="item">
                    <a class="link" href="<?php echo ITQ_BASE_URL;?>home/detailDocument/1"><h4>Giáo trình Minna no nihongo</h4></a>
                    <p class="text"><span class="glyphicon glyphicon-time"></span> 03:53PM | 18/05/2015</p>
                </div>
                <div class="item">
                    <a class="link" href="<?php echo ITQ_BASE_URL;?>home/detailDocument/2"><h4>Giáo trình Minna no nihongo</h4></a>
                    <p class="text"><span class="glyphicon glyphicon-time"></span> 03:53PM | 18/05/2015</p>
                </div>
          </div>
        </div>
      </div>
        
      <div class="col-xs-12 col-sm-7">
        <h3>Tin tức mới nhất</h3><hr>
        <div class="new-articles">
            <div class="row item">
                <div class="col-xs-12 col-sm-12">
                  <a class="title" href="<?php echo ITQ_BASE_URL;?>home/detailDocument/1"><h3>Giáo trình Minna no nihongo</h3></a>                  
                </div>
                <div class="col-xs-12 col-sm-3 img">
                    <a href="#"><img src="resources/images/news-new-articles/new-articles-1.jpg" alt="katchup.vn" class="img-responsive"/></a>                       
                </div>
                <div class="col-xs-12 col-sm-9">                                    
                  <p class="description">Giáo trình Minna no Nihongo là bộ sách giáo trình uy tín và thông dụng nhất trong các trường dạy tiếng Nhật ở Việt Nam cũng như trên thế giới.
                    
                  </p>
                  <dl>
                    <dd><time class="item_published" datetime="2014-10-20 10:04">20 Oct 2014 </time>
                        <span class="kmt-comment">
                          <a href="#">0</a>
                        </span>
                    </dd>
                  </dl>
                </div>
                <div class="col-xs-12 col-sm-12 bottom-new-article"><hr></div>
            </div>
            <div class="row item">
                <div class="col-xs-12 col-sm-12">
                  <a class="title" href="<?php echo ITQ_BASE_URL;?>home/detailDocument/3"><h3>Giáo trình Minna no nihongo</h3></a>                  
                </div>
                <div class="col-xs-12 col-sm-3 img">
                    <a href="#"><img src="resources/images/news-new-articles/new-articles-2.jpg" alt="katchup.vn" class="img-responsive"/></a>                       
                </div>
                <div class="col-xs-12 col-sm-9">                                    
                  <p class="description">Giáo trình Minna no Nihongo là bộ sách giáo trình uy tín và thông dụng nhất trong các trường dạy tiếng Nhật ở Việt Nam cũng như trên thế giới.
                    Giáo trình Minna no Nihongo là bộ sách giáo trình uy tín và thông dụng nhất trong các trường dạy tiếng Nhật ở Việt Nam cũng như trên thế giới.
                    Giáo trình Minna no Nihongo là bộ sách giáo trình uy tín và thông dụng nhất trong các trường dạy tiếng Nhật ở Việt Nam cũng như trên thế giới.
                  </p>
                  <dl>
                    <dd><time class="item_published" datetime="2014-10-20 10:04">20 Oct 2014 </time>
                        <span class="kmt-comment">
                          <a href="#">0</a>
                        </span>
                    </dd>
                  </dl>
                </div>
                <div class="col-xs-12 col-sm-12 bottom-new-article"><hr></div>
            </div>
            <div class="row item">
                <div class="col-xs-12 col-sm-12">
                  <a class="title" href="<?php echo ITQ_BASE_URL;?>home/detailDocument/2"><h3>Giáo trình Minna no nihongo</h3></a>                  
                </div>
                <div class="col-xs-12 col-sm-3 img">
                    <a href="#"><img src="resources/images/news-new-articles/new-articles-3.jpg" alt="katchup.vn" class="img-responsive"/></a>                       
                </div>
                <div class="col-xs-12 col-sm-9">                                    
                  <p class="description">Giáo trình Minna no Nihongo là bộ sách giáo trình uy tín và thông dụng nhất trong các trường dạy tiếng Nhật ở Việt Nam cũng như trên thế giới.
                    Giáo trình Minna no Nihongo là bộ sách giáo trình uy tín và thông dụng nhất trong các trường dạy tiếng Nhật ở Việt Nam cũng như trên thế giới.
                    Giáo trình Minna no Nihongo là bộ sách giáo trình uy tín và thông dụng nhất trong các trường dạy tiếng Nhật ở Việt Nam cũng như trên thế giới.
                  </p>
                  <dl>
                    <dd><time class="item_published" datetime="2014-10-20 10:04">20 Oct 2014 </time>
                        <span class="kmt-comment">
                          <a href="#">0</a>
                        </span>
                    </dd>
                  </dl>
                </div>
                <div class="col-xs-12 col-sm-12 bottom-new-article"><hr></div>
            </div>
            <div class="row item">
                <div class="col-xs-12 col-sm-12">
                  <a class="title" href="<?php echo ITQ_BASE_URL;?>home/detailDocument/1"><h3>Giáo trình Minna no nihongo</h3></a>                  
                </div>
                <div class="col-xs-12 col-sm-3 img">
                    <a href="#"><img src="resources/images/news-new-articles/new-articles-2.jpg" alt="katchup.vn" class="img-responsive"/></a>                       
                </div>
                <div class="col-xs-12 col-sm-9">                                    
                  <p class="description">Giáo trình Minna no Nihongo là bộ sách giáo trình uy tín và thông dụng nhất trong các trường dạy tiếng Nhật ở Việt Nam cũng như trên thế giới.
                    Giáo trình Minna no Nihongo là bộ sách giáo trình uy tín và thông dụng nhất trong các trường dạy tiếng Nhật ở Việt Nam cũng như trên thế giới.
                    Giáo trình Minna no Nihongo là bộ sách giáo trình uy tín và thông dụng nhất trong các trường dạy tiếng Nhật ở Việt Nam cũng như trên thế giới.
                  </p>
                  <dl>
                    <dd><time class="item_published" datetime="2014-10-20 10:04">20 Oct 2014 </time>
                        <span class="kmt-comment">
                          <a href="#">0</a>
                        </span>
                    </dd>
                  </dl>
                </div>
                <div class="col-xs-12 col-sm-12 bottom-new-article"><hr></div>
            </div>


        </div>
        <a href="#" class="see-all">See all</a>
    </div>

    <div class="col-xs-12 col-sm-3">
      <h3>&nbsp;</h3>
      <div class="row">
          <a href="#" class="advertisement"><img src="resources/images/adver/adver-3.jpg" alt="katchup.vn" class="img-responsive"></a>
      </div>
      <div class="row">
          <h3>Tổng hợp</h3><hr>
          <div class="news-total">
              <div class="row item">
                  <div class="col-xs-12 col-sm-3">
                    <a href="#">
                      <img class="img-responsive" alt="katchup.vn" src="resources/images/news-new-articles/news-1.png">
                    </a>
                  </div>
                  <div class="col-xs-12 col-sm-9">
                    <a class="link" href=""><h4>MINNA NO NIHONGO</h4></a>
                  </div>
                  <div class="col-xs-12 col-sm-12 bottom-news-total"><hr></div>
              </div>
              <div class="row item">
                  <div class="col-xs-12 col-sm-3">
                    <a href="#">
                      <img class="img-responsive" alt="katchup.vn" src="resources/images/news-new-articles/news-2.png">
                    </a>
                  </div>
                  <div class="col-xs-12 col-sm-9">
                    <a class="link" href=""><h4>MINNA NO NIHONGO</h4></a>
                  </div>
                  <div class="col-xs-12 col-sm-12 bottom-news-total"><hr></div>
              </div>
              <div class="row item">
                  <div class="col-xs-12 col-sm-3">
                    <a href="#">
                      <img class="img-responsive" alt="katchup.vn" src="resources/images/news-new-articles/news-3.png">
                    </a>
                  </div>
                  <div class="col-xs-12 col-sm-9">
                    <a class="link" href=""><h4>MINNA NO NIHONGO</h4></a>
                  </div>
                  <div class="col-xs-12 col-sm-12 bottom-news-total"><hr></div>
              </div>
              <div class="row item">
                  <div class="col-xs-12 col-sm-3">
                    <a href="#">
                      <img class="img-responsive" alt="katchup.vn" src="resources/images/news-new-articles/news-1.png">
                    </a>
                  </div>
                  <div class="col-xs-12 col-sm-9">
                    <a class="link" href=""><h4>MINNA NO NIHONGO</h4></a>
                  </div>
                  <div class="col-xs-12 col-sm-12 bottom-news-total"><hr></div>
              </div>
              <div class="row item">
                  <div class="col-xs-12 col-sm-3">
                    <a href="#">
                      <img class="img-responsive" alt="katchup.vn" src="resources/images/news-new-articles/news-2.png">
                    </a>
                  </div>
                  <div class="col-xs-12 col-sm-9">
                    <a class="link" href=""><h4>MINNA NO NIHONGO</h4></a>
                  </div>
                  <div class="col-xs-12 col-sm-12 bottom-news-total"><hr></div>
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