@extends('layouts.app')
@section('title', 'Data slider')
@section('content')
    <div class="container">
        <a href="/sliders/create" class="btn btn-primary mb-3">Add Slider</a>
        <div class="table-responsive">
            <table class="table table-bordered table-hover striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
@endsection
