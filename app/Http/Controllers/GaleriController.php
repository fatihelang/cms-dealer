<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('table_search');
        $query = Galeri::query();
        if ($search) {
            $query->where('judul', 'like', "%" . $search . "%");
        }
        $data['galeri'] = $query->paginate(10)->appends(['table_search' => $search]);
        $data['search'] = $search;

        return view('admin.galeri', $data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'judul'     => 'required',
            'tanggal'   => 'required',
            'foto'      => 'required|image|max:5048',
        ], [
            'foto.max' => 'Ukuran file tidak boleh lebih dari 5MB.',
        ]);

        if (Galeri::where('judul', $request->judul)->exists()) {
            return redirect()->back()->with('error', 'Judul sudah ada');
        }
        $data = new Galeri();
        $data->judul = $request['judul'];
        $data->tanggal = $request['tanggal'];
        if ($request->hasFile('foto')) {
            $NamaFoto = time() . '_' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('galeri'), $NamaFoto);
        }
        $data->foto = $NamaFoto;
        $data->slug = Str::slug($request->judul);
        $data->save();

        return redirect()->route('galeri')->with('success', 'Foto berhasil ditambahkan');
    }

    public function edit(Request $request)
    {
        $request->validate([
            'judul'     => 'required',
            'tanggal'   => 'required',
            'foto'      => 'image|max:5048',
        ], [
            'foto.max' => 'Ukuran file tidak boleh lebih dari 5MB.'
        ]);
        
        $id = $request->galeri_id;
        $galeri = Galeri::findOrFail($id);

        if (Galeri::where('judul', $request->judul)->where('id', '!=', $id)->exists()) {
            return redirect()->back()->with('error', 'Judul sudah ada');
        }
        $galeri->judul = $request['judul'];
        $galeri->tanggal = $request['tanggal'];
        if ($request->hasFile('foto')) {
            if ($galeri->foto && file_exists(public_path('galeri/' . $galeri->foto))) {
                unlink(public_path('galeri/' . $galeri->foto));
            }
            
            $NamaFoto = time() . '_' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('galeri'), $NamaFoto);
            $galeri->foto = $NamaFoto;
        }
        $galeri->slug = Str::slug($request->judul);
        $galeri->update();

        return redirect()->route('galeri')->with('success', 'Foto berhasil diperbarui');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();

        return redirect()->route('galeri')->with('success', 'Foto berhasil dihapus');
    }
}
