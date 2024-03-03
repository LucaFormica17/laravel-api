@extends('layouts.app')

@section('content') 
    <h1 class="text-center mt-3">Titolo: {{$project->title}}</h1>
    <img src="{{asset('/storage/'.$project->project_image)}}" alt="{{$project->title}}" class="img-fluid">
    <h3 class="text-center mt-5">Descrizione:</h3>
    <p class="text-center">{{$project->description}}</p>
    <p class="text-center">Categoria: {{$project->type_id ? $project->type->nome : 'Nessuna categoria'}}</p>
    <p>
        @forelse ($project->technologies as $technology)
            #{{ $technology->nome }}
        @empty
            Non è stata assegnata nessuna tecnologia
        @endforelse
    </p>
    <p class="text-end me-5 mt-4">Data di consegna: {{$project->end_date}}</p>

    <a href="{{route('admin.projects.edit', $project->id)}}" class="ms-5">
        <button class="btn btn-sm btn-primary">Modifica</button>
    </a>

        <form action="{{route('admin.projects.destroy', $project->id)}}" method="post" onsubmit="return confirm('Sicuro di volere cancellare questo progetto?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger ms-5">Elimina</button>
        </form>
@endsection