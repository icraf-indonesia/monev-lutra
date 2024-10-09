<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        $artikel = DB::table('article')
                ->orderBy('id')
                ->paginate(10);
        return view('admin.artikel', ['artikel' => $artikel]);
    }

    public function show()
    {
        $artikel = DB::table('article')->orderBy('id')->get();
            // ->paginate(10);

        return view('pages.artikel', ['artikel' => $artikel]);
    }

    public function detailArticle($id)
    {
        $artikel = DB::table('article')->where('id', $id)->first();
        return view('pages.detail_artikel', ['artikel' => $artikel]);
    }

    public function tambahArtikel()
    {
        return view('admin.tambah_artikel');
    }

    public function storeArtikel(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        DB::table('article')->insert([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/admin/artikel')->with('status' ,'Artikel baru berhasil ditambah.');
    }

    public function deleteArticle($id)
    {
        DB::table('article')
            ->where('id', $id)
            ->delete();

        return redirect('/admin/artikel')->with('status', 'Data berhasil dihapus.');
    }

    public function editArticle($id)
    {
        $data = DB::table('article')
            ->where('article.id', $id)
            ->first();

        return view('admin.edit_artikel', ['data' => $data]);
    }

    public function updateArticle(Request $request, $id)
    {
        $rules = [
            'judul' => 'required',
            'deskripsi' => 'required',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['judul'] = $request->judul;
        $validatedData['deskripsi'] = $request->deskripsi;

        DB::table('article')->where('id', $id)
                            ->update($validatedData);

        return redirect()->back()->with('status', 'Berhasil mengubah artikel');
    }
}
