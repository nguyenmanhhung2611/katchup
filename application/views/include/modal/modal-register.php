<link href="resources/css/jquery.realperson.css" rel="stylesheet">
<script src="resources/js/realperson/jquery.plugin.js"></script>
<script src="resources/js/realperson/jquery.realperson.js"></script>

<!-- Modal Login -->
<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="modalLabelRegister" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabelRegister"><span class="glyphicon glyphicon-edit"></span> Đăng Ký</h4>
      </div>
      <div class="row modal-body">
        <div class="col-xs-12 col-sm-12">
            <form class="form-signin" method="post" action='' name="register_form" id="register_form">
                <p class="openid-register">
                  <a href="#"><img src="resources/images/fb-login-button.png" alt="katchup.vn"></a>
                  <a href="#"><img src="resources/images/google-login-button.png" alt="katchup.vn"></a>
                </p>
                <div class="well well-sm required-infor"><strong><span class="glyphicon glyphicon-asterisk"></span> Thông tin bắt buộc</strong></div>
                <p class="input-group">
                    <input type="text" class="form-control" name="email-register" id="email-register" placeholder="Email" autofocus>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </p>
                <p class="input-group">
                    <input type="password" class="form-control" name="password-register" id="password-register" placeholder="Mật khẩu">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </p>
                <p class="input-group">
                    <input type="password" class="form-control" name="confirm-password-register" id="confirm-password-register" placeholder="Xác nhận mật khẩu">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </p>
                <p><input type="text" class="form-control" name="name-register" id="name-register" placeholder="Họ tên"></p>
                <p><input type="text" maxlength=11 class="form-control" name="phone-number-register" id="phone-number-register" placeholder="Số điện thoại"></p>

                <p class="input-group">
                    <input type="text" class="form-control" name="date-register" id="date-register" placeholder="Ngày sinh" readonly>
                    <span class="input-group-addon" for="date-register"><span class="glyphicon glyphicon-calendar"></span></span>
                </p>

                <p class="input-group captcha-register"><input type="text" id="defaultReal" name="defaultReal" class="form-control" placeholder="Mã xác nhận"></p>

                <button type="submit" class="btn btn-success" id="btnRegister">Đăng Ký</button>
            </form>            
        </div>
        
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->

    </div>
  </div>
</div>