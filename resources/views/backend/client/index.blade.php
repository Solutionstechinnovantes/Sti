@extends('layouts.app')

@section('title', 'Data client')

@section('content')

<div class="container">
        <a href="/clients/create" class="btn btn-primary mb-3">Add client</a>

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
                    @foreach (  $clients as $client )
                <tr>
                        <td>{{$i++}}</td>
                        <td>{{$client ->tittle}}</td>
                        <td>{{$client->description}}</td>
                        <td>
                            <img src="/image/{{ $client->image }}" class="img-fluid" alt="" width="90">
                        </td>
                        <td>
                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
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
