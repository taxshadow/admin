@include('css')
@include('navbar')
@include('sitebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		<div class="register-box">
		  <div class="register-box-body">
		    <p class="login-box-msg">Insert New membership</p>

		    <form method="post" action="/admin/public/app/user">
		      <label>Nama</label>
		      <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
		        <input type="text" name="nama" class="form-control" placeholder="Nama">
		        <span class="glyphicon glyphicon-user form-control-feedback"></span>
		        {{($errors->has('nama')) ? $errors->first('nama') : ''}}
		      </div>
		      <label>Username</label>
		      <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
		        <input type="text" name="username" class="form-control" placeholder="Username">
		        <span class="glyphicon glyphicon-user form-control-feedback"></span>
		        {{($errors->has('username')) ? $errors->first('username') : ''}}
		      </div>
		      <label>Email</label>
		      <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
		        <input type="email" name="email" class="form-control" placeholder="Email">
		        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		        {{($errors->has('email')) ? $errors->first('email') : ''}}
		      </div>
		      <label>Password</label>
		      <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
		        <input type="password" name="password" class="form-control" placeholder="Password">
		        <span class="glyphicon glyphicon-user form-control-feedback"></span>
		        {{($errors->has('password')) ? $errors->first('password') : ''}}
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
    </section>    
</div>
  @include('footer')
  @include('js')