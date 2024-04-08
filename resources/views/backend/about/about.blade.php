@extends('layouts.app')

@section('title', 'Update About Data')

@section('content')
    <div class="container">
        <a href="/about" class="btn btn-primary mb-3">Back to About List</a>
        <div class="row">
            <div class="col-md-12">
                      
        @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Successful</strong>
            <p>{{ $message }}</p>
        </div>
        @endif
                <form action="/about/{{ $about->id }}" method="POST" enctype="multipart/form-data">
        
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $about->name }}" placeholder="Name">
                    </div>
                    @error('name')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Description">{{ $about->description }}</textarea>
                    </div>
                    @error('description')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <input type="file" class="form-control" name="logo">
                    </div>
                    @error('logo')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" value="{{ $about->address }}" placeholder="Address">
                    </div>
                    @error('address')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $about->email }}" placeholder="Email">
                    </div>
                    @error('email')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{ $about->phone }}" placeholder="Phone">
                    </div>
                    @error('phone')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="maps_embed">Maps Embed</label>
                        <input type="text" class="form-control" name="maps_embed" value="{{ $about->maps_embed }}" placeholder="Maps Embed">
                    </div>
                    @error('maps_embed')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
