@include('css')
@include('navbar')
@include('sitebar')

  <div class="content-wrapper">      
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Kategori</h3>
            </div>

            <div>
            <form class="" action="/admin/public/app/kategori/{{$kategori->id}}" method="post">
            <div class="box-body">
              <label>Nama Kategori</label>
              <input class="form-control" name="namakategori" value="{{$kategori->namakategori}}" type="text" placeholder="Nama Kategori">
              <label>Induk Kategori</label>
                  <select class="form-control select2" style="width: 100%;" name="indukkategori">
                  <option selected="selected" value="{{$kategori->namakategori}}" name="indukkategori"></option>
                  <option >Entertainment</option>
                  <option >Technologi</option>
                  <option >Health</option>
                  <option >Sport</option>
                  </select>   
            </div>
            <input type="hidden" name="_method" value="put">
            <!-- /.box-body -->
            <div class="box-footer">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button type="submit" value="edit" name="name" class="btn btn-primary">Submit</button>
            </div>
          </form>
          </div>

          </div>
      </section>
  </div>


  @include('js')
  @include('footer')