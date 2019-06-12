@extends('buku.layout')

@section('title')
Tambah Data buku
@endsection

@section('content')
<a href="{{ url('buku') }}" class="btn btn-success btn-sm">
	Daftar buku
</a>
<form method="post" action="{{ url('buku') }}">
	{{ csrf_field() }}
	<div class="form-group">
		<label>judul</label>
		<input type="text" name="judul" class="form-control">
	</div>
	<div class="form-group">
		<label>nama pengarang</label>
		<input type="text" name="nama_pengarang" class="form-control">
	</div>
	<div class="form-group">
		<label>penerbit</label>
		<textarea name="penerbit" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label>tahun terbit</label>
		<textarea name="tahunterbit" class="form-control"></textarea>
	</div>
	<button type="submit" class="btn btn-success btn-block">
		Tambah Data
	</button>
</form>
@endsection