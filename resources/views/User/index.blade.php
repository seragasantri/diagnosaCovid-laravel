@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container">
          <div class="row">

            <h3>Data User</h3>
             <a type="submit" class="btn btn-primary ml-auto" href="{{route('Tambah_Data_User')}}"><i class="fa fa-plus"></i> Tambah Data</a>
          </div>
        </div>
        
        <hr>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">No Hp</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($user as $no => $i)
              <tr>
                    
                <th scope="row">{{$no+1}}</th>
                <td>{{ $i->name}}</td>
                <td >{{ $i->username}}</td>
                <td >{{ $i->no_hp}}</td>
                <td>{{ $i->email }}</td>
                <td><a href="/Read_Data_User/{{$i->id}}" class="btn btn-primary">Read</a>
                  <a href="/edit_Data_User/{{$i->id}}" class="btn btn-warning text-white">Update</a>
                  <a href="/Delete_Data_User/{{$i->id}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection