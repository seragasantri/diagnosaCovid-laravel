<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataRole;

class DataRoleController extends Controller
{
    public function tambahData(Request $request)
    {
        DataRole::create([
            'email' => $request->email,
            'kode_gejala1' => $request->kode_gejala1,
            'kode_gejala2' => $request->kode_gejala2,
            'kode_gejala3' => $request->kode_gejala3,
            'kode_gejala4' => $request->kode_gejala4,
            'kode_gejala5' => $request->kode_gejala5,
            'kode_gejala6' => $request->kode_gejala6,
            'kode_gejala7' => $request->kode_gejala7,
            'kode_gejala8' => $request->kode_gejala8,
            'kode_gejala9' => $request->kode_gejala9,
            'kode_gejala10' => $request->kode_gejala10,
            'kode_diagnosis' => $request->kode_diagnosis,
            'hasil' => $request->hasil,
            'tanggal' => $request->tanggal
        ]);
        return response()->json(['message'=>'Data Berhasil di Tambahkan']);
    }

    public function tampilData()
    {
        $user = DataRole::all();
        return response()->json($user); 
    }

    public function updateData(Request $request, $id)
    {
        DataRole::findOrFail($id)->update([
            'email' => $request->email,
            'kode_gejala1' => $request->kode_gejala1,
            'kode_gejala2' => $request->kode_gejala2,
            'kode_gejala3' => $request->kode_gejala3,
            'kode_gejala4' => $request->kode_gejala4,
            'kode_gejala5' => $request->kode_gejala5,
            'kode_gejala6' => $request->kode_gejala6,
            'kode_gejala7' => $request->kode_gejala7,
            'kode_gejala8' => $request->kode_gejala8,
            'kode_gejala9' => $request->kode_gejala9,
            'kode_gejala10' => $request->kode_gejala10,
            'kode_diagnosis' => $request->kode_diagnosis,
            'hasil' => $request->hasil,
            'tanggal' => $request->tanggal
        ]);
        return response()->json(['message'=>'Data Berhasil di Perbarui']);
    }

    public function getData($id)
    {
        $user = DataRole::findOrFail($id);
        return response()->json($user); 
    }

    public function deleteData($id)
    {
        DataRole::destroy($id);
        return response()->json(['message'=>'data berhasil dihapus']); 
    }
}
