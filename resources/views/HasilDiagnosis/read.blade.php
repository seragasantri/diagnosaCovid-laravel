@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                @foreach ($hasil as $i)
                <div class="card-header text-center"><h4>DATA {{strtoupper($i->email)}}</h4></div>

                <div class="card-body">
                        <table class="table table-borderless">
                            <tbody class="text-center">
                            <tr class="">
                                <th class="">HASIL :</th>
                            </tr>
                            <tr>
                                <td class="">Berdasarkan Hasil Survei <b>{{$i->tanggal}}</b> bahwa Saudara <b>{{$i->email}}</b> 
                                    dinyatakan <b>{{$i->hasil}}</b></td>
                                
                            </tr>
                            </tbody>
                        </table>
                    
                    
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-primary" href="{{route('Hasil_Data')}}">Kembali</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
