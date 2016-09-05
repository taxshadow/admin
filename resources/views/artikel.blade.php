@include('css')
@include('head')
@include('sitebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Artikel</h3>
              <div class="box-tools">
        		<a style="padding: 0px 19px 4px; border-bottom-width: 1px;" href="#" class="btn btn-primary btn-lg"> Insert</a>
   	         </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Menu</th>
                  
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><button style="margin-right: 9px; padding-bottom: 0px; padding-top: 0px;" type="submit" class="btn btn-primary">Edit</button>
                  	  <button style="padding-top: 0px; padding-bottom: 0px;" type="submit" class="btn btn-danger">Delete</button>
                  </td>
                  
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><button style="margin-right: 9px; padding-bottom: 0px; padding-top: 0px;" type="submit" class="btn btn-primary">Edit</button>
                  	  <button style="padding-top: 0px; padding-bottom: 0px;" type="submit" class="btn btn-danger">Delete</button>
                  </td>
                  
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><button style="margin-right: 9px; padding-bottom: 0px; padding-top: 0px;" type="submit" class="btn btn-primary">Edit</button>
                  	  <button style="padding-top: 0px; padding-bottom: 0px;" type="submit" class="btn btn-danger">Delete</button>
                  </td>
                  
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><button style="margin-right: 9px; padding-bottom: 0px; padding-top: 0px;" type="submit" class="btn btn-primary">Edit</button>
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