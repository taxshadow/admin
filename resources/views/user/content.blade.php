        <section class="content">
          <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User</h3>

              <div class="box-tools">
                <a href="{{ action('UserController@create')}}"><button id="add" type="button" class="btn btn btn-success btn-sm">Insert</button></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Menu</th>
                </tr>
                 @foreach($user as $users)
                <tr>
                  <td>{{ $users->user_id}}</td>
                  <td>{{ $users->nama}}</td>
                  <td>{{ $users->email}}</td>
                  <td>
                    <a href="app/user/edit"><button type="button" class="btn btn btn-primary btn-sm">Edit</button></a>
                    <button type="button" class="btn btn btn-danger btn-sm">Delete</button>
                  </td>
                </tr>
                @endforeach

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
        </section>  

        <script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>
        
        </script>
          