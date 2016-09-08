@include('css')
@include('navbar')
@include('sitebar')

  <div class="content-wrapper">      
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Insert Artikel</h3>
            </div>

            <div>
            <form class="" action="/admin/public/app/artikel" method="post">
            <div class="box-body">
              <label>Nama</label>
              <input class="form-control" name="judulartikel" type="text" placeholder="Nama Artikel">
              <label>Kategori</label>
               <select class="form-control select2" style="width: 100%;" name="kategori">
                  <option selected="selected" name="kategori"></option>
                  <option>Olahraga</option>
                  <option>politik</option>
                  <option>Kesehatan</option>
                  <option>Makanan</option>
                  <option>Minuman</option>
                </select>
              </div>
               <div class="box-header">
                <label>Deskripsi</label>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
            
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" value="post" name="name" class="btn btn-primary">Submit</button>
            </div>
          </form>
          </div>
        </div>
      </section>
</div>

  @include('footer')