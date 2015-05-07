<?PHP

  foreach ($list_document as $field => $value) {
    echo '
		<div class="row item">
			<div class="col-xs-12 col-sm-3 img">
				<a href="#"><img src="resources/images/new-articles/new-articles-1.jpg" alt="katchup.vn" class="img-responsive"/></a>                       
			</div>
			<div class="col-xs-12 col-sm-9">
				<a class="label label-primary" href="#" target="_blank">Tài liệu</a>
				<a class="title" href="<?php echo ITQ_BASE_URL;?>home/detailDocument/1"><h3>'.$value[TAI_LIEU_COL_TEN_TAI_LIEU].'</h3></a>
				<p class="title-japan">みんなの日本語</p>
				<p class="description">'.$value[TAI_LIEU_COL_MO_TA].'</p>
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
    ';

    

  }
?>