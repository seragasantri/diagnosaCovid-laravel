@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h3>Tambah Data Gejala</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('Create_Data_Gejala') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="kode_gejala"  class="col-md-4 col-form-label text-md-right">{{ __('Kode Gejala') }}</label>

                            <div class="col-md-6">
                                <input id="kode_gejala" placeholder="Masukan Kode Gejala" type="text" class="form-control @error('kode_gejala') is-invalid @enderror" name="kode_gejala" value="{{ old('kode_gejala') }}" required autocomplete="kode_gejala" autofocus>

                                @error('kode_gejala')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_gejala" class="col-md-4 col-form-label text-md-right">{{ __('Nama Gejala') }}</label>

                            <div class="col-md-6">
                                <input id="nama_gejala" placeholder="Masukan Nama Gejala" type="text" class="form-control @error('nama_gejala') is-invalid @enderror" name="nama_gejala" value="{{ old('nama_gejala') }}" required autocomplete="nama_gejala" autofocus>

                                @error('nama_gejala')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                     
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Tambahkan') }}
                                </button>
                                <a class="btn btn-primary" href="{{route('Data_Gejala')}}">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
