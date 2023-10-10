<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;
// Jangan lupa untuk menggunakan model Comment jika Anda telah membuatnya
// use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data input
        $data=$request->validate([
            
            'komentar' => 'required|max:200',
        ]);
        Comment::create($data);

        // Simpan data ke database...
        // Misalnya, jika Anda memiliki model Comment, Anda bisa menggunakan kode berikut:
        // Comment::create($request->all());
        
        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        // return back()->with('success', 'Komentar Anda telah ditambahkan!')->withInput();
        // maap bang banyak error nya dan saya sudah menyerah :v
    }
}
