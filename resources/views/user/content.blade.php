        <section class="content">
          <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <a href=""><button id="add" type="button" class="btn btn btn-success btn-sm">Add</button></a>
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
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td>
                    <a href="{{ action('AdminController@editUser')}}"><button type="button" class="btn btn btn-primary btn-sm">Edit</button></a>
                    <button type="button" class="btn btn btn-danger btn-sm">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td>
                    <a href="{{ action('AdminController@editUser')}}"><button type="button" class="btn btn btn-primary btn-sm">Edit</button></a>
                    <button type="button" class="btn btn btn-danger btn-sm">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td>
                    <a href="{{ action('AdminController@editUser')}}"><button type="button" class="btn btn btn-primary btn-sm">Edit</button></a>
                    <button type="button" class="btn btn btn-danger btn-sm">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td>
                    <a href="{{ action('AdminController@editUser')}}"><button type="button" class="btn btn btn-primary btn-sm">Edit</button></a>
                    <button type="button" class="btn btn btn-danger btn-sm">Delete</button>
                  </td>
                </tr>
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
          