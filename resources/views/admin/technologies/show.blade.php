@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card text-center card-show">
                    <div class="card-header bg-danger">
                        <h1>Technology</h1>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Nome: {{ $technology->nome }}</h3>
                        <p class="card-text">{{ $technology->descrizione }}</p>
                        <div class="d-flex justify-content-around mt-5">
                            <a href="{{ route('admin.technologies.edit', $technology->id) }}"
                                class="btn btn-warning  float-start">Modifica
                                tecnologia</a>
                            <form action="{{ route('admin.technologies.destroy', ['technology' => $technology->id]) }}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                            <a href="{{ route('admin.technologies.index') }}" class="btn btn-primary float-end">Torna alle
                                tecnologie</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
