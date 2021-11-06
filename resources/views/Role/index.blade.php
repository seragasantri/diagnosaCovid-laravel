@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container">
          <div class="row">

            <h3>Data Rule</h3>
             <a type="submit" class="btn btn-primary ml-auto" href="{{route('Tambah_Data_Role')}}"><i class="fa fa-plus"></i> Tambah Data</a>
          </div>
        </div>
        
        <hr>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Gejala</th>
                <th scope="col">Kode Penyakit</th>
                <th scope="col">Hasil</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($role as $no => $i)
              <tr>
                    
                <th scope="row">{{$no+1}}</th>
                <td>{{ $i->kode_gejala1}},{{ $i->kode_gejala2}},{{ $i->kode_gejala3}},{{ $i->kode_gejala4}},{{ $i->kode_gejala5}}
                  ,{{ $i->kode_gejala6}},{{ $i->kode_gejala7}},{{ $i->kode_gejala8}},{{ $i->kode_gejala9}},{{ $i->kode_gejala10}}</td>
                <td >{{ $i->kode_diagnosis}}</td>
                <td >{{ $i->hasil}}</td>
                <td><a href="/Read_Data_Role/{{$i->id}}" class="btn btn-primary">Read</a>
                  <a href="/Delete_Data_Role/{{$i->id}}" class="btn btn-danger text-white">Delete</a>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection