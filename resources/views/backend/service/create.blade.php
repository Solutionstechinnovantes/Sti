@extends('layouts.app')

@section('title', 'Data service')

@section('content')
    <div class="container">
        <a href="/admin/services" class="btn btn-primary mb-3">Services list</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Éléments pour le service A -->
                    <div class="form-group">
                        <label for="">Title A</label>
                        <input type="text" class="form-control" name="tittlea" placeholder="Title A">
                    </div>
                    @error('tittlea')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Description A</label>
                        <textarea name="descriptiona" id="" cols="30" rows="10" class="form-control" placeholder="Description A"></textarea>
                    </div>
                    @error('descriptiona')
                    <small style="color: red">{{ $message }}</small>
                    @enderror

                    <div class="form-group">
                        <label for="">File A</label>
                        <input type="file" class="form-control" name="imagea">
                    </div>
                    @error('imagea')
                    <small style="color: red">{{ $message }}</small>
                    @enderror

                    <!-- Répéter ces éléments pour les services B, C et D -->

                <!-- Éléments pour le service B -->
                    <div class="form-group">
                        <label for="">Title B</label>
                        <input type="text" class="form-control" name="tittleb" placeholder="Title B">
                    </div>
                    @error('tittleb')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Description B</label>
                        <textarea name="descriptionb" id="" cols="30" rows="10" class="form-control" placeholder="Description B"></textarea>
                    </div>
                    @error('descriptionb')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">File B</label>
                        <input type="file" class="form-control" name="imageb">
                    </div>
                    @error('imageb')
                    <small style="color: red">{{ $message }}</small>
                    @enderror


                    <!-- Éléments pour le service C -->
                    <div class="form-group">
                        <label for="">Title C</label>
                        <input type="text" class="form-control" name="tittlec" placeholder="Title C">
                    </div>
                    @error('tittlec')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Description C</label>
                        <textarea name="descriptionc" id="" cols="30" rows="10" class="form-control" placeholder="Description C"></textarea>
                    </div>
                    @error('descriptionc')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">File C</label>
                        <input type="file" class="form-control" name="imagec">
                    </div>
                    @error('imagec')
                    <small style="color: red">{{ $message }}</small>
                    @enderror

                    <!-- Éléments pour le service D -->
                    <div class="form-group">
                        <label for="">Title D</label>
                        <input type="text" class="form-control" name="tittled" placeholder="Title D">
                    </div>
                    @error('tittled')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Description D</label>
                        <textarea name="descriptiond" id="" cols="30" rows="10" class="form-control" placeholder="Description D"></textarea>
                    </div>
                    @error('descriptiond')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">File D</label>
                        <input type="file" class="form-control" name="imaged">
                    </div>
                    @error('imaged')
                    <small style="color: red">{{ $message }}</small>
                    @enderror

                    <!-- Bouton de soumission -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Creer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
