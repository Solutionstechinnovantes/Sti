@extends('layouts.app')

@section('title', 'Data team')

@section('content')

<div class="container">
        <a href="/admin/teams/create" class="btn btn-primary mb-3">Add team</a>

        @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Successful</strong>
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-hover striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (  $teams as $key => $team )

                <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$team ->tittlea}}</td>
                        <td>{{$team->descriptiona}}</td>
                        <td>
                            <img src="/image/{{ $team->imagea }}" class="img-fluid" alt="" width="90">
                        </td>
                        <td>
                            <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('teams.destroy', $team->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$team ->tittleb}}</td>
                        <td>{{$team->descriptionb}}</td>
                        <td>
                            <img src="/image/{{ $team->imageb }}" class="img-fluid" alt="" width="90">
                        </td>
                        <td>
                            <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('teams.destroy', $team->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$team ->tittlec}}</td>
                        <td>{{$team->descriptionc}}</td>
                        <td>
                            <img src="/image/{{ $team->imagec }}" class="img-fluid" alt="" width="90">
                        </td>
                        <td>
                            <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('teams.destroy', $team->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection



