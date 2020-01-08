@extends('admin.layouts.master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-body">

				<form role="form" enctype="multipart/form-data" method="post" action="{{ url('admin/kampung/add') }}">
					{{ csrf_field() }}
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Judul</label>
							<input type="name" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Judul">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Isi</label>
							<textarea name="isi" class="form-control summernote" rows="10"></textarea>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail2">Alamat</label>
							<input type="address" name="alamat" class="form-control" id="exampleInputEmail2" placeholder="Alamat">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail3">Fasilitas Umum</label>
							<input type="name" name="fasilitas_umum" class="form-control" id="exampleInputEmail3" placeholder="Fasilitas Umum">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail4">Fasilitas Wisata</label>
							<input type="name" name="fasilitas_wisata" class="form-control" id="exampleInputEmail4" placeholder="Alamat">
						</div>
						<div class="form-group">
							<label for="exampleInputFile">File input</label>
							<input type="file" name="image" id="exampleInputFile">
						</div>
						<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Kategori</label>
							<select class="form-control select2" name="kategori_id">
								<option>Pilih Kategori</option>
								@foreach($kategori as $kt)
								<option value="{{ $kt->id }}">{{ $kt->nama }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection