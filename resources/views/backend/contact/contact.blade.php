@extends('layouts.app')

@section('title', 'Update contact Data')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

        @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Successful</strong>
            <p>{{ $message }}</p>
        </div>
        @endif
                <form action="/admin/contact/{{ $contact->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $contact->name }}" placeholder="Name">
                    </div>
                    @error('name')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Description">{{ $contact->description }}</textarea>
                    </div>
                    @error('description')
                    <small style="color: red">{{ $message }}</small>
                    @enderror

                    <img src="/image/{{ $contact->logo }}" alt="" class="image-fluid">
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="logo">
                    </div>
                    @error('logo')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" value="{{ $contact->address }}" placeholder="Address">
                    </div>

                    @error('address')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $contact->email }}" placeholder="Email">
                    </div>
                    @error('email')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{ $contact->phone }}" placeholder="Phone">
                    </div>
                    @error('phone')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="maps_embed">Maps Embed</label>
                        <textarea name="maps_embed" id="" cols="30" rows="10" class="form-control" placeholder="Maps Embed">{{ $contact->maps_embed }}</textarea>
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
