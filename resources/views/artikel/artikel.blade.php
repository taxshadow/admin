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
              <h3 class="box-title">Artikel</h3>
              <div class="box-tools">
        		<a style="padding: 0px 19px 4px; border-bottom-width: 1px;" href="/admin/public/app/artikel/create" class="btn btn-success btn-lg"> Insert</a>
   	         </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Judul Artikel</th>
                  <th>Kategori</th>
                  <th>Menu</th>
                  
                </tr>
                @foreach($artikels as $artikel)
                <tr>
                  <td>{{$artikel->id}}</td>
                  <td>{{$artikel->judulartikel}}</td>
                  <td>{{$artikel->kategori}}</td>
                  <td><a href="/admin/public/app/artikel/{{$artikel->id}}/edit"><button style="margin-right: 9px; padding-bottom: 0px; padding-top: 0px;" type="submit" class="btn btn-primary">Edit</button></a>
                      
                      <form style="margin-left: 53px; margin-top: -23px;" class="" action="/admin/public/app/artikel/{{$artikel->id}}" method="post">
                      <input type ="hidden" name="_method" value="delete">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                  	  <button style="padding-top: 0px; padding-bottom: 0px;" type="submit" value="delete" class="btn btn-danger">Delete</button>
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
    </section>

    
    </div>

  @include('js')
  @include('footer')