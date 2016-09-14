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
                     @foreach($users as $user)
                    <tr>
                      <td>{{ $user->user_id}}</td>
                      <td>{{ $user->nama}}</td>
                      <td>{{ $user->email}}</td>
                      <td>
                        <a href="user/{{$user->user_id}}/edit"><button type="button" class="btn btn btn-primary btn-sm">Edit</button></a>
                        <form style="margin-left: 50px; margin-top: -30px;" action="/admin/public/app/user/{{$user->user_id}}" method="post">
                          <input type ="hidden" name="_method" value="delete">                      
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button type="submit" class="btn btn btn-danger btn-sm" value="delete">Delete</button>
                        </form>
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
          