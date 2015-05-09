<!-- Modal Login -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLabelLogin" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabelLogin"><span class="glyphicon glyphicon-lock"></span> Đăng Nhập</h4>
      </div>
      <div class="row modal-body">
        <div class="col-xs-12 col-sm-7">
            <form class="form-signin" method="post" action='' name="login_form" id="login_form">
                <p class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Email" autofocus>
                </p>
                <p class="input-group" style="width: 66%; float: left;">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Mật khẩu">                  
                </p>
                <a id="forgot-password"  data-toggle="modal" href="#modalForgotPassword">Quên mật khẩu?</a>
                <div class="checkbox checkbox-login"><button type="submit" class="btn btn-primary">Đăng nhập</button>
                  <label>
                    <input type="checkbox" value="remember-me"> Ghi nhớ đăng nhập
                  </label>
                </div>
            </form>
            <div class="question-account"><span>Bạn đã có tài khoản chưa? <span><a data-toggle="modal" href="#modalRegister">Đăng ký</a></div>
        </div>
        <div class="col-xs-12 col-sm-5">
            <div class="openid-login">
                <a href="#"><img src="resources/images/fb-login-button.png" alt="katchup.vn"></a>
                <a href="#"><img src="resources/images/google-login-button.png" alt="katchup.vn"></a>
            </div>
        </div>
        
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>