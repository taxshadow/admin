@include('css')
@include('navbar')
@include('sitebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		<div class="register-box">
		  <div class="register-box-body">
		    <p class="login-box-msg">Edit membership</p>
		    <form action="/admin/public/app/user/{{$user->id}}" method="post">
		    <label>Nama</label>
			<div class="form-group has-feedback">
			        <input type="text" name="nama" value="{{$user->nama}}" class="form-control" placeholder="Name">
			        <span class="glyphicon glyphicon-user form-control-feedback"></span>
			 </div>
			 <label>Username</label>
		     <div class="form-group has-feedback">
		        	<input type="text" name="username" value="{{$user->username}}"  class="form-control" placeholder="Username">
		        	<span class="glyphicon glyphicon-user form-control-feedback"></span>
		     </div>
		     <label>Email</label>
		     <div class="form-group has-feedback">
		        	<input type="email" name="email" value="{{$user->email}}" class="form-control" placeholder="Email">
		        	<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		     </div>
		     <label>Password</label>
		     <div class="form-group has-feedback">
		        	<input type="password" name="password" value="{{$user->password}}" class="form-control" placeholder="Password">
		        	<span class="glyphicon glyphicon-user form-control-feedback"></span>
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