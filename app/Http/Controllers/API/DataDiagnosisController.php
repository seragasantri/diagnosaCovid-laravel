<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataDiagnosis;

class DataDiagnosisController extends Controller
{
    public function tambahData(Request $request)
    {
        DataDiagnosis::create([
            'kode_diagnosis'      => $request->kode_diagnosis,
            'nama_diagnosis'      => $request->nama_diagnosis,
        ]);
        return response()->json(['message'=>'Data Berhasil di Tambahkan']);
    }

    public function tampilData()
    {
        $user = DataDiagnosis::all();
        return response()->json($user); 
    }

    public function getData($id)
    {
        $user = DataDiagnosis::findOrFail($id);
        return response()->json($user); 
    }

    public function updateData(Request $request, $id)
    {
        DataDiagnosis::findOrFail($id)->update([
            'kode_diagnosis'      => $request->kode_diagnosis,
            'nama_diagnosis'      => $request->nama_diagnosis,
        ]);
        return response()->json(['message'=>'Data Berhasil di Perbarui']);
    }

    public function deteleData($id)
    {
        $user = DataDiagnosis::destroy($id);
        return response()->json(['message'=> 'data berhasil dihapus']); 
    }
}
