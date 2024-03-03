@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col-12">
            <a href="{{route('admin.projects.create')}}">
                <button class="btn btn-sm btn-primary">Nuovo+</button>
            </a>
        </div>
        <div class="col-12 text-center">
            <h1>I miei progetti</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Titolo</th>
                        <th>Descrizione</th>
                        <th>Data di consegna</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <td>{{$project->title}}</td>
                        <td>{{$project->description}}</td>
                        <td>{{$project->end_date}}</td>
                        <td>

                            <a href="{{route('admin.projects.show', $project->id)}}">
                                <div class="btn btn-sm btn-primary">
                                    Dettagli
                                </div>
                            </a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
