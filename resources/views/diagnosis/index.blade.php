@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container">
          <div class="row">

            <h3>Data diagnosis</h3>
             <a type="submit" class="btn btn-primary ml-auto" href="{{route('Tambah_Data_Diagnosis')}}"><i class="fa fa-plus"></i> Tambah Data</a>
          </div>
        </div>
        
        <hr>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode diagnosis</th>
                <th scope="col">Nama diagnosis</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($diagnosis as $no => $i)
              <tr>
                    
                <th scope="row">{{$no+1}}</th>
                <td>{{ $i->kode_diagnosis}}</td>
                <td >{{ $i->nama_diagnosis}}</td>
                <td><a href="/Read_Data_Diagnosis/{{$i->id}}" class="btn btn-primary">Read</a>
                  <a href="/Edit_Data_Diagnosis/{{$i->id}}" class="btn btn-warning text-white">Update</a>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection