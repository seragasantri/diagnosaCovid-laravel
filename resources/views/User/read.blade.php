@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                @foreach ($user as $i)
                <div class="card-header text-center"><h4>DATA {{strtoupper($i->name)}}</h4></div>

                <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                            <tr class="">
                                <th class="col-1">Nama</th>
                                <td class="col-1">:</td>
                                <td class="col-1">{{$i->name}}</td>
                            </tr>
                            <tr class="">
                                <th class="col-1">Username</th>
                                <td class="col-1">:</td>
                                <td class="col-1">{{$i->username}}</td>
                            </tr>
                            <tr class="">
                                <th class="col-1">Email</th>
                                <td class="col-1">:</td>
                                <td class="col-1">{{$i->email}}</td>
                            </tr>
                            <tr class="">
                                <th class="col-1">No Telp</th>
                                <td class="col-1">:</td>
                                <td class="col-1">{{$i->no_hp}}</td>
                            </tr>
                            <tr class="">
                                <th class="col-1">role</th>
                                <td class="col-1">:</td>
                                <td class="col-1">{{$i->role}}</td>
                            </tr>
                            </tbody>
                        </table>
                    
                    
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-primary" href="{{route('Data_User')}}">Kembali</a>
                    <a class="btn btn-warning" href="/edit_Data_User/{{$i->id}}">Update</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
