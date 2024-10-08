@extends('layouts.dashboard');

@section('main-content')
       <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <h2>ELENCO PROGETTI AUTH </h2>
                    <a href="" class="btn btn-sm btn-primary"> AGGIUNGI PROGETTO</a>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>ID</th>
                        <th>Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                        <tr>
                            <td>{{ $project->id}}</td>
                            <td>{{ $project->name}}</td>
                            <td>{{ $project->slug}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.projects.show', ['project' => $project->id] ) }}" 
                                    class="btn btn-sm btn-square btn-ptimary">
                                        <i class="fas fa-eye"> qui</i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
       </div>
@endsection
             