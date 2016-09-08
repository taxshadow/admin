<div class="register-box">
  <div class="register-box-body">
    <p class="login-box-msg">Insert New membership</p>

    <form method="post" action="/admin/public/app/user">
      <div class="form-group">
        <select class="form-control select2" data-placeholder="Select a State" name="grup_id">
          <option>Grup ID</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
        </select>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="nama" class="form-control" placeholder="Nama">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <a href=""><button type="submit" name="name" class="btn btn-block btn-primary">Submit</button></a>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->