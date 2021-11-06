<?php

namespace App\Http\Controllers\Api;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DataUserController extends Controller
{
    public function tambahData(Request $request)
    {
        User::create([
            'name'      => $request->name,
            'username'  => $request->username,
            'email'     => $request->email, 
            'password'  => Hash::make($request->password),
            'no_hp'     => $request->no_hp,
            'role'      => 'pengunjung'
        ]);
        return response()->json(['message'=>'Data Berhasil di Tambahkan']);
    }

    public function tampilData()
    {
        $user = User::all();
        return response()->json($user); 
    }

    public function updateData(Request $request, $id)
    {
        User::findOrFail($id)->update([
            'name'      => $request->name,
            'username'  => $request->username,
            'email'     => $request->email, 
            'password'  => Hash::make($request->password),
            'no_hp'     => $request->no_hp,
            'role'      => $request->role,
        ]);
        return response()->json(['message'=>'Data Berhasil di Perbarui']);
    }

    public function getData($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }
    

    public function deleteData($id)
    {
        User::destroy($id);
        return response()->json(['message'=>'data berhasil dihapus']);
    }
}
 