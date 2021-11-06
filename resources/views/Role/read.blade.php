@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                @foreach ($role as $i)
                <div class="card-header text-center"><h4>DATA RULE</h4></div>

                <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                            <tr class="">
                                <th class="col-1">Email</th>
                                <td class="col-1">:</td>
                                <td class="col-1">{{$i->email}}</td>
                            </tr>
                            <tr class="">
                                <th class="col-1">Kode Gejala</th>
                                <td class="col-1">:</td>
                                <td class="col-1">{{ $i->kode_gejala1}},{{ $i->kode_gejala2}},{{ $i->kode_gejala3}},{{ $i->kode_gejala4}},{{ $i->kode_gejala5}}
                                    ,{{ $i->kode_gejala6}},{{ $i->kode_gejala7}},{{ $i->kode_gejala8}},{{ $i->kode_gejala9}},{{ $i->kode_gejala10}}</td>
                            </tr>
                            <tr class="">
                                <th class="col-1">Kode Diagnosis</th>
                                <td class="col-1">:</td>
                                <td class="col-1">{{$i->kode_diagnosis}}</td>
                            </tr>
                            <tr class="">
                                <th class="col-1">Hasil</th>
                                <td class="col-1">:</td>
                                <td class="col-1">{{$i->hasil}}</td>
                            </tr>
                            <tr class="">
                                <th class="col-1">Riwayat Survei</th>
                                <td class="col-1">:</td>
                                <td class="col-1">{{$i->tanggal}}</td>
                            </tr>
                            </tbody>
                        </table>
                    
                    
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-primary" href="{{route('Data_Role')}}">Kembali</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
