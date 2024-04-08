@extends('layouts.app')

@section('title', 'Data service')

@section('content')

<div class="container">
        <a href="/services/create" class="btn btn-primary mb-3">Add service</a>

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
                    @foreach (  $services as $service )
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$service ->tittle}}</td>
                        <td>{{$service->description}}</td>
                        <td>
                            <img src="/image/{{ $service->image }}" class="img-fluid" alt="" width="90">
                        </td>
                        <td>
                            <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('services.destroy', $service->id) }}" method="POST">
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
