@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('UPDATE DATA DIAGNOSIS') }}</div>

                <div class="card-body">
                    @foreach ($diagnosis as $i)
                        
                    
                    <form method="POST" action="{{ route('Update_Data_Diagnosis', $i->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label for="kode_diagnosis" class="col-md-4 col-form-label text-md-right">{{ __('Kode diagnosis') }}</label>

                            <div class="col-md-6">
                                <input id="kode_diagnosis" type="text" class="form-control @error('kode_diagnosis') is-invalid @enderror" name="kode_diagnosis" value="{{ $i->kode_diagnosis }}" required autocomplete="kode_diagnosis" autofocus>

                                @error('kode_diagnosis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_diagnosis" class="col-md-4 col-form-label text-md-right">{{ __('Nama Diagnosis') }}</label>

                            <div class="col-md-6">
                                <input id="nama_diagnosis" type="text" class="form-control @error('nama_diagnosis') is-invalid @enderror" name="nama_diagnosis" value="{{ $i->nama_diagnosis }}" required autocomplete="nama_diagnosis" autofocus>

                                @error('nama_diagnosis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                     

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Update') }}
                                </button>                              
                                <a class="btn btn-primary" href="{{route('Data_Diagnosis')}}">Kembali</a>
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection