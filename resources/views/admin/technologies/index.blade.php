@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col 12 d-flex">
                <div class="col-2">
                    <div class="container-fluid">
                        <div class="row flex-nowrap">
                            <div class="col-12 px-sm-2 px-0 bg-dark">
                                <div
                                    class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                                    <a href="/"
                                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                                    </a>
                                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                                        id="menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link align-middle px-0">
                                                <i class="fs-4 bi-house"></i> <span
                                                    class="ms-1 d-none d-sm-inline">Home</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.dashboard') }}" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Dashboard</span></a>
                                        <li class="w-100">
                                            <a href="{{ route('admin.projects.index') }}" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Project</span></a>
                                        </li>
                                        <li class="w-100">
                                            <a href="{{ route('admin.projects.create') }}" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Create New Project</span></a>
                                        </li>
                                        <li class="w-100">
                                            <a href="{{ route('admin.types.index') }}" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Types</span></a>
                                        </li>
                                        <li class="w-100">
                                            <a href="{{ route('admin.types.create') }}" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Create New Type</span></a>
                                        </li>
                                        <li class="w-100">
                                            <a href="{{ route('admin.technologies.index') }}" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Technologies</span></a>
                                        </li>
                                        <li class="w-100">
                                            <a href="{{ route('admin.technologies.create') }}" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Create New Technology</span></a>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="dropdown pb-4">
                                        <a href="#"
                                            class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="https://avatars.githubusercontent.com/u/146130373?v=4" alt="hugenerd"
                                                width="30" height="30" class="rounded-circle">
                                            <span class="d-none d-sm-inline mx-1">loser</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                            <li><a class="dropdown-item" href="#">New project...</a></li>
                                            <li><a class="dropdown-item" href="#">Settings</a></li>
                                            <li><a class="dropdown-item" href="#">Profile</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center text-white mt-3">Tecnologie</h2>
                            </div>
                            <div class="row">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Slug</th>
                                            <th>Strumenti</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($technologies as $technology)
                                            <tr>
                                                <td>{{ $technology->id }}</td>
                                                <td>{{ $technology->nome }}</td>
                                                <td>{{ $technology->slug }}</td>
                                                <td>
                                                    <div class="d-flex mt-4">
                                                        <a href="{{ route('admin.technologies.show', ['technology' => $technology->id]) }}"
                                                            class="btn btn-sm btn-primary">Dettagli</a>
                                                        <a href="{{ route('admin.technologies.edit', $technology->id) }}"
                                                            class="btn btn-sm btn-warning ms-2">Modifica</a>
                                                        <button class="btn btn-sm btn-danger mt-3" data-bs-toggle="modal"
                                                            data-bs-target="#modal_delete_{{ $technology->id }}">Elimina</button>
                                                        @include('admin.technologies.modal')
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
