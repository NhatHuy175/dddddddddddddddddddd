<?php


namespace App\Views\Client\Pages\Auth;

use App\Views\BaseView;

class Register extends BaseView{

    public static function render($data = null)
    {
        ?>
        <div class="container mt-5">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <div class="cars card-body">
                      <h4 class="text-center text-danger">Dang ky</h4>
                        <form action="#" method="post">
                          <input type="hidden" name="method" value="POST" id="">
                            <div class="form-group">
                              <label for="username">ten dang nhap</label>
                              <input type="text" name="username" id="username" class="form-control" placeholder="nhap ten dang nhap" >
                            </div>
                            <div class="form-group">
                              <label for="password">Mat khau</label>
                              <input type="password" name="password" id="password" class="form-control" placeholder="Mat khau" >
                            </div>
                            <div class="form-group">
                              <label for="re_password">Nhap lai mat khau</label>
                              <input type="password" name="re_password" id="re_password" class="form-control" placeholder="Nhap lai mat khau" >
                            </div>
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="text" name="email" id="email" class="form-control" placeholder="nhap Email" >
                            </div>
                            <div class="form-group">
                              <label for="name">Ho va ten</label>
                              <input type="name" name="name" id="name" class="form-control" placeholder="Nhap ho va ten" >
                            </div>
                            <button type="reset" class="btn btn-outline-danger">Nhap lai</button>
                            <button type="submit" class="btn btn-outline-info">Dang ky</button>
      
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}