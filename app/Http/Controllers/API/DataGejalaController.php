<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataGejala;

class DataGejalaController extends Controller
{
    public function tambahData(Request $request)
    {
        DataGejala::create([
            'kode_gejala'      => $request->kode_gejala,
            'nama_gejala'      => $request->nama_gejala,
        ]);
        return response()->json(['message'=>'Data Berhasil di Tambahkan']);
    }

    public function tampilData()
    {
        $user = DataGejala::all();
        return response()->json($user); 
    }

    public function updateData(Request $request, $id)
    {
        DataGejala::findOrFail($id)->update([
            'kode_gejala'      => $request->kode_gejala,
            'nama_gejala'      => $request->nama_gejala,
        ]);
        return response()->json(['message'=>'Data Berhasil di Perbarui']);
    }

    public function getData($id)
    {
        $user = DataGejala::findOrFail($id);
        return response()->json($user); 
    }

    public function deleteData($id)
    {
        DataGejala::destroy($id);
        return response()->json(['message'=>'data berhasil dihapus']); 
    }


}
