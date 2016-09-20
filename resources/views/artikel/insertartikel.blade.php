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

              <div class="form-group {{ $errors->has('judulartikel') ? 'has-error' : ''}}">
              <input class="form-control" name="judulartikel" type="text" placeholder="Nama Artikel">
              {{($errors->has('judulartikel')) ? $errors->first('judulartikel') : ''}}
              </div>

              <label>Kategori</label>
                <div class="form-group {{ $errors->has('kategori_id') ? 'has-error' : ''}}">
                <select class="form-control select2" style="width: 100%;" name="kategori_id">
                    @foreach($kategoris as $value)
                      <option value="{{ $value->id }}">{{ $value->namakategori }}</option>
                    @endforeach
                </select>
                {{($errors->has('kategori_id')) ? $errors->first('kategori_id') : ''}}
                </div>
              </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <label>Deskripsi</label>
              <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : ''}}">
                <textarea class="textarea" placeholder="Place some text here" name="deskripsi" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                {{($errors->has('deskripsi')) ? $errors->first('deskripsi') : ''}}
              </div>
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

  @include('js')
  @include('footer')