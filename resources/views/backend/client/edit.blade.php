@extends('layouts.app')

@section('title', 'Data client')

@section('content')
    <div class="container">
        <a href="/admin/clients" class="btn btn-primary mb-3">clients list</a>
        <div class="row" >
            <div class="col-md-12">
                <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="tittle" placeholder="Title">
                    </div>
                    @error('title')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Description"></textarea>
                    </div>
                    @error('description')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <img src="/image/{{ $client->image }}" alt="" class="img-fluid">
                    <div class="form-group">
                        <label for="">File</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    @error('image')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @endsection
