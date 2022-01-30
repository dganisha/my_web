@extends('admin.template')

@section('content')
	<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Konten Blog
              </h3>
            </div>
            <!-- /.card-header -->
            <form method="POST" enctype="multipart/form-data">
            	@csrf
	            <div class="card-body">
	            	<div class="form-group">
	                    <label for="exampleInputEmail1">Judul</label>
	                    <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul">
	                </div>
	                <div class="form-group">
	                    <label for="exampleInputEmail1">Gambar</label>
	                    <input type="file" class="form-control" name="image">
	                </div>
	                <div class="form-group">
	                	<label>Konten</label>
			            <textarea id="summernote" name="konten">
			                Masukkan konten
			            </textarea>
		            </div>
	            </div>
	            <div class="card-footer">
	             	<button class="btn btn-primary" type="submit">Simpan</button>
	            </div>
        	</form>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
  	</section>
@endsection