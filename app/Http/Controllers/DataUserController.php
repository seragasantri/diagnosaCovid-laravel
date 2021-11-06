<?php

namespace App\Http\Controllers;
use App\DataUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class DataUserController extends Controller
{
    use RegistersUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user   = DB::table('users')->get();
        return view('User.index',[ 'user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tambah()
    {
        return view('User.create');
    }

    protected function create(Request $request)
    {
        DB::table('users')->insert([
                'name'      => $request->name,
                'username'  => $request->username,
                'password'  => $request->password,
                'email'     => $request->email,
                'no_hp'     => $request->no_hp,
                'role'     => 'Pengunjung',
            ]);
            
              
        return redirect('/Data_User');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = DB::table('users')->where('id',$id)->get();

        return view('User.read', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('users')->where('id',$id)->get();

        return view('User.update', ['user'=>$user]);
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
        DB::table('users')->where('id',$request->id)->update([
            'name'      => $request->name,
            'username'  => $request->username,
            'no_hp'     => $request->no_hp,
            // 'password'  => $request->password,
            'email'     => $request->email,
            'role'     => $request->role,
        ]);
        
          
    return redirect('/Data_User');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = DB::table('users')->where('id',$id)->delete();
        return redirect('/Data_User');
    }
}
