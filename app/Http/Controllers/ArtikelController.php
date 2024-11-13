<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('table_search');
        $query = Artikel::query();
        if ($search) {
            $query->where('judul', 'like', "%" . $search . "%");
        }
        $data['artikel'] = $query->paginate(10)->appends(['table_search' => $search]);
        $data['search'] = $search;

        return view('admin.artikel', $data);
    }

    public function create()
    {
        return view('admin.tambah_artikel');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'meta_deskripsi' => 'nullable',
            'meta_keywords' => 'nullable',
            'gambar' => 'nullable|image|max:5048',
            'file'  => 'nullable|file',
            'slug' => 'nullable',
        ], [
            'foto.max' => 'Ukuran gambar tidak boleh lebih dari 5MB.'
        ]);

        if (Artikel::where('judul', $request->judul)->exists()) {
            return redirect()->back()->with('error', 'Judul sudah ada');
        }

        $data = new Artikel();
        $data->judul = $request['judul'];
        $data->slug = Str::slug($request['judul']);
        $data->deskripsi = $request['deskripsi'];
        $data->tanggal = $request['tanggal'];
        $data->meta_deskripsi = $request['meta_deskripsi'];
        $data->meta_keyword = $request['meta_keyword'];
        $data->user_id = auth()->id();
        $data->view_count = 0;
        // Upload multiple images
        if ($request->file('gambar')) {
            $NamaFoto = time().'.'.$request->extension();
            $request->file('gambar')->move(public_path('artikel/gambar'), $NamaFoto);
        }
        $data->gambar = json_encode($NamaFoto);
        // Upload file
        if ($request->hasFile('file')) {
            $Namafile = time() . '_' . $request->file('file')->getClientOriginalName();
            $request->file('file')->move(public_path('file'), $Namafile);
            $data->file = $Namafile;
        }
        $data->save();

        return redirect()->route('artikel')->with('success', 'Artikel berhasil di upload');
    }

    public function edit($id)
    {
        $data ['artikel'] = Artikel::findOrFail($id);
        return view('admin.edit_artikel', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'meta_deskripsi' => 'nullable',
            'meta_keywords' => 'nullable',
            'gambar' => 'nullable|image|max:5048',
            'file'  => 'nullable|file',
            'slug' => 'nullable',
        ], [
            'foto.max' => 'Ukuran gambar tidak boleh lebih dari 5MB.'
        ]);

        $id = $request->artikel_id;
        $artikel = Artikel::findOrFail($id);

        if (Artikel::where('judul', $request->judul)->where('id', '!=', $id)->exists()) {
            return redirect()->back()->with('error', 'Judul sudah ada');
        }

        $artikel->judul = $request['judul'];
        $artikel->tanggal = $request['tanggal'];
        $artikel->slug = Str::slug($request['judul']);
        $artikel->deskripsi = $request['deskripsi'];
        $artikel->tanggal = $request['tanggal'];
        $artikel->meta_deskripsi = $request['meta_deskripsi'];
        $artikel->meta_keyword = $request['meta_keyword'];
        $artikel->user_id = auth()->id();
        if ($request->hasFile('gambar')) {
            // Menghapus file lama jika ada
            if ($artikel->gambar) {
                $existingGambar = json_decode($artikel->gambar, true); // Ambil data gambar lama dari database

                if (is_array($existingGambar)) {
                    foreach ($existingGambar as $gambar) {
                        $filePath = public_path('artikel/gambar' . $gambar);
                        if (file_exists($filePath)) {
                            unlink($filePath); // Hapus file jika ada
                        }
                    }
                }
            }
            // Upload gambar baru
            $imagePaths = [];
            foreach ($request->file('gambar') as $image) {
                $NamaGambar = time() . '_' . $gambar->getClientOriginalName();
                $image->move(public_path('artikel/gambar'), $NamaGambar); // Simpan ke direktori public/artikel
                $imagePaths[] = $NamaGambar; // Tambahkan path ke array
            }
            $artikel->gambar = json_encode($imagePaths);
        }
        if ($request->hasFile('file')) {
            if ($artikel->file && file_exists(public_path('artikel/file/' . $artikel->file))) {
                unlink(public_path('artikel/file/' . $artikel->file));
            }

            $Namafile = time() . '_' . $request->file('file')->getClientOriginalName();
            $request->file('file')->move(public_path('file'), $Namafile);
            $artikel->file = $Namafile;
        }
        $artikel->update();

        return redirect()->route('artikel')->with('success', 'Artikel berhasil diperbarui');
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return redirect()->route('artikel')->with('success', 'Artikel berhasil dihapus');
    }

    // // Menampilkan postingan berdasarkan slug
    // public function show($slug)
    // {
    //     $artikel = Post::where('slug', $slug)->firstOrFail();
    //     $metaData = $artikel->getMetaData();

    //     return view('posts.show', compact('artikel', 'metaData'));
    // }
}
