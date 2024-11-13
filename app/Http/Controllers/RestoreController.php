<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Galeri;
use App\Models\Artikel;
use Illuminate\Http\Request;

class RestoreController extends Controller
{
    public function index() {
        $data['user'] = User::onlyTrashed()->get();
        $data['artikel'] = Artikel::onlyTrashed()->get();
        $data['galeri'] = Galeri::onlyTrashed()->get();

        return view('admin.sampah', $data);
    }

    public function user($id)
    {
        $user = User::withTrashed()->findOrFail($id);
        $user->restore();
        return redirect()->route('restore')->with('success', 'User berhasil dikembalikan');
    }
    public function artikel($id)
    {
        $artikel = Artikel::withTrashed()->findOrFail($id);
        $artikel->restore();
        return redirect()->route('restore')->with('success', 'Artikel berhasil dikembalikan');
    }
    public function galeri($id)
    {
        $galeri = Galeri::withTrashed()->findOrFail($id);
        $galeri->restore();
        return redirect()->route('restore')->with('success', 'Galeri berhasil dikembalikan');
    }
}
