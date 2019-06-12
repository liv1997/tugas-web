<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku;

class bukuController extends Controller
{
	public function index(){
		
		// file buku terdapat pada folder resource
		$var = 'Pahrul Irfan';
				// SELECT * FROM tbl_buku
		$data = buku::all();
//		dd($data);
		return view('buku.index', compact('var', 'data'));
	}

	public function create(){
		return view('buku.tambah');
	}

	public function store(Request $buku){
		// INSERT INTO tbl_buku () VALUES ();
		buku::create($buku->all());
		return redirect('buku');
	}

	public function edit($id){
				//select * from buku where id=$id
		$mhs = buku::find($id);
		return view('buku.ubah', compact('mhs'));
	}

	public function update(Request $buku, $id){
		$mhs = $buku->all();
		// UPDATE tbl_mahasiwa SET nama_kolom=$mhs
		buku::find($id)->update($mhs);
		return redirect('buku');
	}

	public function destroy($id){
		// Delete from tbl_buku where id=$id
		buku::find($id)->delete();
		return redirect('buku');
	}
}