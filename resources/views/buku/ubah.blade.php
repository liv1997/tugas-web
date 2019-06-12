@extends('buku.layout')

@section('title')
Ubah Data buku
@endsection

@section('content')
<a href="{{ url('buku') }}" class="btn btn-success btn-sm">
	Daftar buku
</a>
<form method="post" action="{{ url('buku/'.$mhs->id) }}">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label>judul</label>
		<input type="text" name="judul" value="{{ $mhs->judul }}"class="form-control">
	</div>
	<div class="form-group">
		<label>nama pengarang</label>
		<input type="text" name="nama_pengarang" value="{{ $mhs->nama_pengarang }}" class="form-control">
	</div>
	<div class="form-group">
		<label>penerbit</label>
		<input type="text" name="penerbit" value="{{ $mhs->penerbit }}" class="form-control">
	</div>
	<div class="form-group">
		<label>tahun terbit</label>
		<input type="text" name="tahunterbit" value="{{ $mhs->tahunterbit }}" class="form-control">
	</div>
	<button type="submit" class="btn btn-warning btn-block">
		Ubah Data
	</button>
</form>
@endsection