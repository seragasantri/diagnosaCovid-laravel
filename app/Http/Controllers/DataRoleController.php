<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DataRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = DB::table('data_roles')->get();
        return view('Role.index',['role'=>$role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = DB::table('users')->get();
        $gejala = DB::table('data_gejala')->get();
        $diagnosis = DB::table('data_diagnosis')->get();

        return view('Role.create',['gejala'=>$gejala , 'diagnosis'=>$diagnosis, 'user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('data_roles')->insert([
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

        return redirect('/Data_Role');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = DB::table('data_roles')->where('id',$id)->get();
        return view('Role.read', ['role'=>$role]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('data_roles')->where('id',$id)->delete();
        return redirect()->route('Data_Role');
    }
}
