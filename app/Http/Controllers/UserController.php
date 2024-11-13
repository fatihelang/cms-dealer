<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // $search = $request->input('table_search');
        // $query = User::query();
        // if ($search) {
        //     $query->where('username', 'like', "%" . $search . "%")->orWhere('nama', 'like', "%" . $search . "%");
        // }
        // $data['user'] = $query->paginate(10)->appends(['table_search' => $search]);
        // $data['search'] = $search;
        $data['user'] = User::all();
        return view('admin.user', $data);
    }
    
    public function create(Request $request)
    {
        $request->validate([
            'username'  => 'required',
            'nama'      => 'required',
            'password'  => 'required',
        ]);

        if (User::where('username', $request->username)->exists()) {
            return redirect()->back()->with('error', 'Username sudah terdaftar');
        }
        $data = new User();
        $data->username = $request['username'];
        $data->nama = $request['nama'];
        $data->password = bcrypt($request['password']);
        $data->save();

        return redirect()->route('user')->with('success', 'User berhasil ditambahkan');
    }
    
    public function edit(Request $request)
    {
        $request->validate([
            'username'  => 'required',
            'nama'      => 'required',
            'password'  => 'required',
        ]);
        
        $id = $request->user_id;
        $user = User::findOrFail($id);

        if (User::where('username', $request->username)->where('id', '!=', $id)->exists()) {
            return redirect()->back()->with('error', 'Username sudah terdaftar');
        }
        $user->username = $request['username'];
        $user->nama = $request['nama'];
        $user->password = bcrypt($request['password']);
        $user->update();

        return redirect()->route('user')->with('success', 'User berhasil diperbarui');
    }
    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user')->with('success', 'User berhasil dihapus');
    }
}
