@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card my-5">
                    <div class="card-title">
                        <h2 class="text-center">Modifica progetto</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.projects.update', $project->id)}}" method="post" class="form-control">
                            @csrf
                            @method('PUT')
                            <label for="title">Titolo</label>
                            <input type="text" class="form-control mb-3" name="title" id="title" value="{{$project->title}}">
                            @error('title')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                            @if ($project->project_image != null)
                                <img src="{{asset('/storage/'.$project->project_image)}}" alt="{{$project->title}}" width="150">
                            @endif
                            <label for="project_image"></label>
                            <input type="file" name="project_image" id="project_image" @error('project_image') is-invalid @enderror>
                            @error('project_image')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <label for="descriprion">Descrizione</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control mb-3">{{$project->description}}</textarea>
                            @error('description')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror

                            <label for="type_id" class="control-label text-white">Selezione la tipologia</label>
                        <select name="type_id" id="type_id" class="form-select" @error('type_id') is-invalid @enderror">
                            <option value="">Seleziona la tipologia</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" @selected($type->id == old('type_id', $project->type ? $project->type_it : ''))>{{ $type->nome }}
                                </option>
                            @endforeach
                        </select>


                        <label class="control-label text-white">Selezione tecnologia</label>
                        <div class="my-3">
                            @foreach ($technologies as $technology)
                                <div class="form-check-inline">
                                    @if ($errors->any())
                                        <input type="checkbox" name="technologies[]" id="" class="form-check-input"
                                            value="{{ $technology->id }}"
                                            {{ in_array($technology->id, old('technologies')) ? 'checked' : '' }}>
                                    @else
                                        <input type="checkbox" name="technologies[]" id="" class="form-check-input"
                                            value="{{ $technology->id }}"
                                            {{ $project->technologies->contains($technology->id) ? 'checked' : '' }}>
                                    @endif

                                    <label for=""
                                        class="fomr-check-label text-white">{{ $technology->name }}</label>
                                </div>
                            @endforeach
                        </div>


                            <label for="end_date">Data di consena</label>
                            <input type="date" name="end_date" id="end_date" class="form-control mb-3">
                            @error('end_date')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                            <button type="submit" class="btn btn-sm btn-success">Conferma</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection