<?php


namespace App\Views\Client\Pages\Auth;

use App\Views\BaseView;

class Login extends BaseView
{

  public static function render($data = null)
  {
?>
    <div class="container mt-5">
      <div class="row">
        <div class="offset-md-3 col-md-6">
          <div class="cars card-body">
            <h4 class="text-center text-danger">Dang nhap</h4>
            <form action="#" method="post">
              <div class="form-group">
                <label for="username">ten dang nhap</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="nhap ten dang nhap">
              </div>
              <div class="form-group">
                <label for="password">Mat khau</label>
                <input type="text" name="password" id="password" class="form-control" placeholder="Mat khau">
              </div>
              <button type="reset" class="btn btn-outline-danger">Nhap lai</button>
              <button type="submit" class="btn btn-outline-info">Dang nhap</button>
              <br>
              <a href="/forgot-password" class="text-danger">Quen mat khau</a>
            </form>
          </div>
        </div>
      </div>
    </div>
<?php
  }
}
