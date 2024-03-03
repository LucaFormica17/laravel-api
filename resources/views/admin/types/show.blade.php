@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card text-center card-show">
                    <div class="card-header bg-danger">
                        <h1>Type</h1>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Nome: {{ $type->nome }}</h3>
                        <p class="card-text">{{ $type->descrizione }}</p>
                        <div class="d-flex justify-content-around">
                            <h5>Autore: {{ $type->autore }}</h5>
                            <h5>Data fine progetto: {{ $type->fine_progetto }}</h5>
                        </div>

                        <div class="d-flex justify-content-around mt-5">
                            <a href="{{ route('admin.types.edit', $type->id) }}"
                                class="btn btn-warning  float-start">Modifica
                                tipologia</a>
                            <form action="{{ route('admin.types.destroy', ['type' => $type->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                            <a href="{{ route('admin.types.index') }}" class="btn btn-primary float-end">Torna alle
                                tipologie</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
