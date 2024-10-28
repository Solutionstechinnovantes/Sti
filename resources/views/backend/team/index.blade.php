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
                    @php
                        $i = 1;
                    @endphp
                    @foreach (  $teams as $team )
                <tr>
                        <td>{{$i++}}</td>
                        <td>{{$team ->tittle}}</td>
                        <td>{{$team->description}}</td>
                        <td>
                            <img src="/image/{{ $team->image }}" class="img-fluid" alt="" width="90">
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
