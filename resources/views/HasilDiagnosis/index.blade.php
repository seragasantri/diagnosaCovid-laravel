@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container">
          <div class="row">

            <h3>Hasil Diagnosis</h3>
            
          </div>
        </div>
        
        <hr>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Hasil </th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($hasil as $no => $i)
              <tr>
                    
                <th scope="row">{{$no+1}}</th>
                <td>{{ $i->hasil}}</td>
                <td><a href="/Read_Hasil_Data/{{$i->id}}" class="btn btn-primary">Read</a>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection