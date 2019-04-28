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

}
