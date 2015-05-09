<!-- Modal Forgot Password -->
<div class="modal fade" id="modalForgotPassword" tabindex="-1" role="dialog" aria-labelledby="modalLabelForgotPassword" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabelForgotPassword"><span class="glyphicon glyphicon-envelope"></span> Nhập địa chỉ email của bạn để thay đổi mật khẩu</h4>
      </div>
      <div class="modal-body">
        <form class="form-signin" method="post" action='' name="forgot_password_form" id="forgot_password_form">
          <p class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input type="text" class="form-control" name="emailForgotPassword" id="emailForgotPassword" placeholder="Email" autofocus>
          </p>
          <button id="btnforgotPassword" type="submit" class="btn btn-warning">Gửi email</button>
        </form>
    <!-- <div class="question-account"><span>Bạn đã có tài khoản chưa? <span><a href="#">Đăng ký</a></div> -->                  
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>