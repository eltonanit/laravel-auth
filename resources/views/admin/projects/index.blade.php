@extends('layouts.dashboard');

@section('main-content')
       <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex">
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
                                    <a href="" class="btn btn-sm btn-ptimary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @
                    </tbody>
                </table>
            </div>
        </div>
       </div>
             