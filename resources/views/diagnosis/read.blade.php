@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                @foreach ($diagnosis as $i)
                <div class="card-header text-center"><h4>DATA {{strtoupper($i->kode_diagnosis)}}</h4></div>

                <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                            <tr class="">
                                <th class="col-1">Kode Diagnosis</th>
                                <td class="col-1">:</td>
                                <td class="col-1">{{$i->kode_diagnosis}}</td>
                            </tr>
                            <tr class="">
                                <th class="col-1">Nama Diagnosis</th>
                                <td class="col-1">:</td>
                                <td class="col-1">{{$i->nama_diagnosis}}</td>
                            </tr>
                            </tbody>
                        </table>
                    
                    
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-primary" href="{{route('Data_Diagnosis')}}">Kembali</a>
                    <a class="btn btn-warning" href="/Edit_Data_Diagnosis/{{$i->id}}">Update</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
