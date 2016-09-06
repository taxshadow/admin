@include('css')
@include('navbar')
@include('sitebar')

  <div class="content-wrapper">      
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Insert Kategori</h3>
            </div>
            <div class="box-body">
              <label>Nama Kategori</label>
              <input class="form-control" type="text" placeholder="Nama Kategori">
              <label>Induk Kategori</label>
              <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Sport</option>
                  <option>Entertainment</option>
                  <option>Technologi</option>
                  <option>Health</option>
                  </select>
            </div>

            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
      </section>
  </div>



  @include('footer')