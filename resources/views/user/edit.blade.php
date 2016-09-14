@include('css')
@include('navbar')
@include('sitebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		<div class="register-box">
		  <div class="register-logo">
		    <a href="../../index2.html"><b>Admin</b>LTE</a>
		  </div>

		  <div class="register-box-body">
		    <p class="login-box-msg">Edit membership</p>

		    <form action="/admin/public/app/user/{{$user->user_id}}" method="post">
		      <div class="form-group has-feedback">
		        <input type="text" class="form-control" name="nama" value="{{$user->nama}}" placeholder="nama">
		        <span class="glyphicon glyphicon-user form-control-feedback"></span>
		      </div>
		      <div class="form-group has-feedback">
		        <input type="text" class="form-control" name="username" value="{{$user->username}}" placeholder="username">
		        <span class="glyphicon glyphicon-user form-control-feedback"></span>
		      </div>
		      <div class="form-group has-feedback">
		        <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="email">
		        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		      </div>
		      <div class="form-group has-feedback">
		        <input type="password" class="form-control" name="password" value="{{$user->password}}" placeholder="password">
		        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
		      </div>
		      <div class="row">
		        <div class="col-xs-4">
		          <input type="hidden" name="_method" value="put">
		          <input type="hidden" name="_token" value="{{ csrf_token() }}">
		          <button type="submit" value="edit" class="btn btn-block btn-primary">Submit</button>
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