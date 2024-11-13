<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $data['setting'] = Setting::all();
        return view('admin.setting', $data);
    }
    
    public function update(Request $request)
    {
        $request->validate([
            'dealer'    => 'required',
            'sales'     => 'required',
            'no_wa'     => 'required',
            'alamat'    => 'required',
            'instagram' => 'nullable',
            'deskripsi' => 'nullable'
        ]);
        foreach ($request->except('_token') as $nama_setting => $value) {
            Setting::where('nama_setting', $nama_setting)->update(['value' => $value]);
        }

        return redirect()->back()->with('success', 'Setting berhasil diperbarui.');
    }
}
