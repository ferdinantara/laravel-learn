<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    // method untuk menampilkan data books
    public function index()
    {
    	// mengambil data dari table buku
    	$books = DB::table('books')->get();
 
    	// mengirim data buku ke view index
    	return view('index',['books' => $books]);
 
    }

    // method untuk menampilkan view form add books
    public function add()
    {

	    // memanggil view add
	    return view('add');

    }

    // method untuk insert data ke table books
    public function store(Request $request)
    {
	    // insert data ke table pegawai
	    DB::table('books')->insert([
		    'id' => $request->id,
		    'judul' => $request->judul,
		    'penerbit' => $request->penerbit,
		    'tahun_terbit' => $request->tahun_terbit,
		    'pengarang' => $request->pengarang
	    ]);
	    // kembali ke page books
	    return redirect('/books');
	}
	
	// method untuk hapus data buku
	public function delete($id)
	{
		// menghapus data buku berdasarkan id
		DB::table('books')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman utama
		return redirect('/books');
	}

	// method untuk edit data
	public function edit($id)
	{
		// mengambil data berdasarkan id
		$books = DB::table('books')->where('id',$id)->get();
		// passing data yang didapat ke view edit.blade.php
		return view('edit',['books' => $books]);
	}

	// update data
	public function update(Request $request)
	{
		// update data
		DB::table('books')->where('id',$request->id)->update([
			'id' => $request->id,
		    'judul' => $request->judul,
		    'penerbit' => $request->penerbit,
		    'tahun_terbit' => $request->tahun_terbit,
		    'pengarang' => $request->pengarang
		]);
		// alihkan halaman ke halaman utama
		return redirect('/books');
	}

}
