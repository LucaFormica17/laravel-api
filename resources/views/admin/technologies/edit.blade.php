@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white mt-5">Modifica tecnologia</h1>
            </div>
            <div class="col-12">
                <form class="mt-5" action="{{ route('admin.technologies.update', $technology->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group my-3">
                        <label for="nome" class="control-label text-white">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Inserisci il nome della tecnologia"
                            class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}" required>
                        @error('nome')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <button class="btn btn-success" type="submit">Salva</button>
                    </div>
                    <a href="{{ route('admin.technologies.index') }}" class="btn btn-primary float-end">Torna alle
                        tecnologie
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
