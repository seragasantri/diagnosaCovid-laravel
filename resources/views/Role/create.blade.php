@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h3>Tambah Data Rule</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('Create_Data_Role') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <select name="email" class="form-control " id="">
                                        <option value="#">--- Pilih Kode Gejala ---</option>
                                        @foreach ($user as $d)
                                        <option value="{{$d->email}}">{{$d->email}}</option>
                                    @endforeach
                                </select>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>        

                        <div class="form-group row">
                            <label for="kode_gejala"  class="col-md-4 col-form-label text-md-right">{{ __('Kode Gejala') }}</label>
                            <div class="col-md-6">
                                <select name="kode_gejala1" class="form-control" id="">
                                        <option value="">--- Pilih Kode Gejala 1---</option>
                                    @foreach ($gejala as $g)
                                        <option value="{{$g->kode_gejala}}">{{$g->kode_gejala}} - {{$g->nama_gejala}}</option>
                                    @endforeach
                                </select>
                                <select name="kode_gejala2" class="form-control" id="">
                                    <option value="">--- Pilih Kode Gejala 2---</option>
                                    @foreach ($gejala as $g)
                                        <option value="{{$g->kode_gejala}}">{{$g->kode_gejala}} - {{$g->nama_gejala}}</option>
                                    @endforeach
                                </select>
                                <select name="kode_gejala3" class="form-control" id="">
                                    <option value="-">--- Pilih Kode Gejala 3---</option>
                                    @foreach ($gejala as $g)
                                        <option value="{{$g->kode_gejala}}">{{$g->kode_gejala}} - {{$g->nama_gejala}}</option>
                                    @endforeach
                                </select>
                                <select name="kode_gejala4" class="form-control" id="">
                                    <option value="-">--- Pilih Kode Gejala 4---</option>
                                    @foreach ($gejala as $g)
                                        <option value="{{$g->kode_gejala}}">{{$g->kode_gejala}} - {{$g->nama_gejala}}</option>
                                    @endforeach
                                </select>
                                <select name="kode_gejala5" class="form-control" id="">
                                    <option value="-">--- Pilih Kode Gejala 5---</option>
                                    @foreach ($gejala as $g)
                                        <option value="{{$g->kode_gejala}}">{{$g->kode_gejala}} - {{$g->nama_gejala}}</option>
                                    @endforeach
                                </select>
                                <select name="kode_gejala6" class="form-control" id="">
                                    <option value="-">--- Pilih Kode Gejala 6---</option>
                                    @foreach ($gejala as $g)
                                        <option value="{{$g->kode_gejala}}">{{$g->kode_gejala}} - {{$g->nama_gejala}}</option>
                                    @endforeach
                                </select>
                                <select name="kode_gejala7" class="form-control" id="">
                                    <option value="-">--- Pilih Kode Gejala 7---</option>
                                    @foreach ($gejala as $g)
                                        <option value="{{$g->kode_gejala}}">{{$g->kode_gejala}} - {{$g->nama_gejala}}</option>
                                    @endforeach
                                </select>
                                <select name="kode_gejala8" class="form-control" id="">
                                    <option value="-">--- Pilih Kode Gejala 8---</option>
                                    @foreach ($gejala as $g)
                                        <option value="{{$g->kode_gejala}}">{{$g->kode_gejala}} - {{$g->nama_gejala}}</option>
                                    @endforeach
                                </select>
                                <select name="kode_gejala9" class="form-control" id="">
                                    <option value="-">--- Pilih Kode Gejala 9---</option>
                                    @foreach ($gejala as $g)
                                        <option value="{{$g->kode_gejala}}">{{$g->kode_gejala}} - {{$g->nama_gejala}}</option>
                                    @endforeach
                                </select>
                                <select name="kode_gejala10" class="form-control" id="">
                                    <option value="-">--- Pilih Kode Gejala 10---</option>
                                    @foreach ($gejala as $g)
                                        <option value="{{$g->kode_gejala}}">{{$g->kode_gejala}} - {{$g->nama_gejala}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_diagnosis" class="col-md-4 col-form-label text-md-right">{{ __('Kode Diagnosis') }}</label>

                            <div class="col-md-6">
                                <select name="kode_diagnosis" class="form-control" id="">
                                        <option value="#">--- Pilih Kode Gejala ---</option>
                                        @foreach ($diagnosis as $d)
                                        <option value="{{$d->kode_diagnosis}}">{{$d->kode_diagnosis}}</option>
                                    @endforeach
                                </select>

                                @error('nama_diagnosis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                     
                        
                        <div class="form-group row">
                            <label for="hasil" class="col-md-4 col-form-label text-md-right">{{ __('Hasil') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="hasil" placeholder="Masukan Hasil" class="form-control @error('email') is-invalid @enderror"  required autocomplete="email">

                                @error('hasil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>    

                        <div class="form-group row">
                            <label for="hasil" class="col-md-4 col-form-label text-md-right">{{ __('Hasil') }}</label>

                            <div class="col-md-6">
                                <input id="tanggal" placeholder="Masukan Hasil" type="date" class="form-control" name="tanggal" >
                            </div>
                        </div> 

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Tambahkan') }}
                                </button>
                                <a class="btn btn-primary" href="{{route('Data_Diagnosis')}}">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
