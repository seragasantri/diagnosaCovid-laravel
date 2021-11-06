<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DataDiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnosis = DB::table('data_diagnoses')->get();
        return view('diagnosis.index', ['diagnosis'=>$diagnosis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diagnosis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('data_diagnoses')->insert([
            'kode_diagnosis' => $request->kode_diagnosis,
            'nama_diagnosis' => $request->nama_diagnosis
        ]);

        return redirect()->route('Data_Diagnosis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diagnosis = DB::table('data_diagnoses')->where('id',$id)->get();
        return view('diagnosis.read',['diagnosis'=>$diagnosis]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diagnosis = DB::table('data_diagnoses')->where('id',$id)->get();
        return view('diagnosis.update', ['diagnosis'=>$diagnosis]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('data_diagnoses')->where('id',$request->id)->update([
            'kode_diagnosis' => $request->kode_diagnosis,
            'nama_diagnosis' => $request->nama_diagnosis,
        ]);

        return redirect()->route('Data_Diagnosis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
