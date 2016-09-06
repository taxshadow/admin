@include('css')
@include('navbar')
@include('sitebar')

  <div class="content-wrapper">      
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Artikel</h3>
            </div>
            <div class="box-body">
              <label>Nama</label>
              <input class="form-control" type="text" placeholder="Nama Artikel">
              <label>Kategori</label>
               <select class="form-control select2" style="width: 100%;">
                  <option selected="selected"></option>
                  <option>Olahraga</option>
                  <option>politik</option>
                  <option>Kesehatan</option>
                  <option>Makanan</option>
                  <option>Minuman</option>
                </select>
              </div>
            </div>

            
            <div class="box-header">
              <label>Description</label>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            </div>
          
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
      </section>
  </div>



  @include('footer')