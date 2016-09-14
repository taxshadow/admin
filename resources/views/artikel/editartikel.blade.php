@include('css')
@include('navbar')
@include('sitebar')

  <div class="content-wrapper">      
    <section class="content-header">
        <div class="box box-primary">
              @if(Session::has('message'))
                <div class="callout callout-info">
                {{ Session::get('message') }}
                </div>
              @endif
            <div class="box-header with-border">
              <h3 class="box-title">Edit Artikel</h3>
            </div>

            <div>
            <form class="" action="/admin/public/app/artikel/{{$artikel->id}}" method="post">
            <div class="box-body">
              <label>Nama</label>
              <input class="form-control" name="judulartikel" value="{{$artikel->judulartikel}}" type="text" placeholder="Nama Artikel">
              <label>Kategori</label>
               <select class="form-control select2" style="width: 100%;" name="kategori">
                  <option selected="selected" name="kategori" value="{{$artikel->kategori}}"></option>
                  <option>Olahraga</option>
                  <option>politik</option>
                  <option>Kesehatan</option>
                  <option>Makanan</option>
                  <option>Minuman</option>
                </select>
              </div>
          
            <!-- /.box-header -->
            <div class="box-body pad">
              <label>Deskripsi</label>
                <textarea value="{{$artikel->deskripsi}}" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
            
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" value="edit" name="name" class="btn btn-primary">Edit</button>
            </div>
          </form>
          </div>
        </div>
      </section>
</div>

  @include('js')
  @include('footer')