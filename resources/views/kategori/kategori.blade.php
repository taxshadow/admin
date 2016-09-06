@include('css')
@include('navbar')
@include('sitebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Kategori</h3>
              <div class="box-tools">
        		<a style="padding: 0px 19px 4px; border-bottom-width: 1px;" href="{{action('AdminController@insertkategori')}}" class="btn btn-success btn-lg"> Insert</a>
   	         </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Nama Kategori</th>
                  <th>Menu</th>
                  
                </tr>
                <tr>
                  <td>183</td>
                  <td>Sport</td>
                  <td><a href="{{action('AdminController@editkategori')}}"><button style="margin-right: 9px; padding-bottom: 0px; padding-top: 0px;" type="submit" class="btn btn-primary">Edit</button>
                  	  <button style="padding-top: 0px; padding-bottom: 0px;" type="submit" class="btn btn-danger">Delete</button>
                  </td>
                  
                </tr>
                <tr>
                  <td>219</td>
                  <td>Health</td>
                  <td><a href="{{action('AdminController@editkategori')}}"><button style="margin-right: 9px; padding-bottom: 0px; padding-top: 0px;" type="submit" class="btn btn-primary">Edit</button>
                  	  <button style="padding-top: 0px; padding-bottom: 0px;" type="submit" class="btn btn-danger">Delete</button>
                  </td>
                  
                </tr>
                <tr>
                  <td>657</td>
                  <td>Technology</td>
                  <td><a href="{{action('AdminController@editkategori')}}"><button style="margin-right: 9px; padding-bottom: 0px; padding-top: 0px;" type="submit" class="btn btn-primary">Edit</button>
                  	  <button style="padding-top: 0px; padding-bottom: 0px;" type="submit" class="btn btn-danger">Delete</button>
                  </td>
                  
                </tr>
                <tr>
                  <td>175</td>
                  <td>Entertainment</td>
                  <td><a href="{{action('AdminController@editkategori')}}"><button style="margin-right: 9px; padding-bottom: 0px; padding-top: 0px;" type="submit" class="btn btn-primary">Edit</button>
                  	  <button style="padding-top: 0px; padding-bottom: 0px;" type="submit" class="btn btn-danger">Delete</button>
                  </td>
                  
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </section>

    
    </div>
  </aside>

  @include('footer')