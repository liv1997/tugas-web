@extends('buku.layout')

@section('title')
buku
@endsection

@section('content')
<a href="{{ url('buku/create') }}" class="btn btn-success btn-sm">
    Tambah buku
</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>judul</th>
            <th>nama_pengarang</th>
            <th>penerbit</th>
             <th>tahunterbit</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $i => $value)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $value->judul }}</td>
            <td>{{ $value->nama_pengarang }}</td>
            <td>{{ $value->penerbit }}</td>
            <td>{{ $value->tahunterbit }}</td>
            
            <td>
                <a href="{{ url('buku/'.$value->id.'/edit') }}" class="btn btn-warning btn-sm">Ubah</a>
                <form action="{{ url('buku/'.$value->id) }}" method="POST">
                 {{ csrf_field() }}
                 <input type="hidden" name="_method" value="DELETE">
                 <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                     Hapus
                 </button>
             </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection