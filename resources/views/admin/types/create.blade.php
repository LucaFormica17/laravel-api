@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white mt-5">Inserisci nuovo progetto</h1>
            </div>
            <div class="col-12">
                <form class="mt-5" action="{{ route('admin.types.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group my-3">
                        <label for="nome" class="control-label text-white">nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Inserisci il nome della tipologia"
                            class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}" required>
                        @error('nome')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <label class="control-label text-white">Selezione tecnologia</label>
                        <div class="my-3">
                            @foreach ($technologies as $technology)
                                <div class="form-check-inline">
                                    <input type="checkbox" name="technologies[]" id="" class="form-check-input"
                                        value="{{ $technology->id }}" @checked(is_array(old('technologies')) && in_array($technology->id, old('technologies')))>
                                    <label for=""
                                        class="fomr-check-label text-white">{{ $technology->nome }}</label>
                                </div>
                            @endforeach
                        </div>

                    <div class="form-group my-3">
                        <label for="descrizione" class="control-label text-white">Descrizione</label>
                        <textarea name="descrizione" id="descrizione" class="form-control @error('descrizione') is-invalid @enderror"
                            placeholder="Inserisci la descrizione della tipologia" cols="50" rows="10" required>{{ old('descrizione') }}</textarea>
                        @error('descrizione')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <button class="btn btn-success" type="submit">Salva</button>
                    </div>
                    <a href="{{ route('admin.types.index') }}" class="btn btn-primary float-end">Torna alle tipologie
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
