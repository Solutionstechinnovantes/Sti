@extends('layouts.app')

@section('title', 'Update About Data')

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

                <form action="/admin/about/{{ $about->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="axea">Axea</label>
                        <input type="text" class="form-control" name="axea" value="{{ $about->axea }}" placeholder="Axea">
                    </div>
                    @error('axea')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="axeb">Axeb</label>
                        <input type="text" class="form-control" name="axeb" value="{{ $about->axeb }}" placeholder="Axeb">
                    </div>
                    @error('axeb')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="axec">Axec</label>
                        <input type="text" class="form-control" name="axec" value="{{ $about->axec }}" placeholder="Axec">
                    </div>
                    @error('axec')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="axed">Axed</label>
                        <input type="text" class="form-control" name="axed" value="{{ $about->axed }}" placeholder="Axed">
                    </div>
                    @error('axed')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="titlea">Tittlea</label>
                        <input type="text" class="form-control" name="titlea" value="{{ $about->titlea }}" placeholder="Titlea">
                    </div>
                    @error('titlea')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="titleb">Tittleb</label>
                        <input type="text" class="form-control" name="titleb" value="{{ $about->titleb }}" placeholder="Titleb">
                    </div>
                    @error('titleb')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="titlec">Tittlec</label>
                        <input type="text" class="form-control" name="titlec" value="{{ $about->titlec }}" placeholder="Titlec">
                    </div>
                    @error('titlec')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="titled">Tittled</label>
                        <input type="text" class="form-control" name="titled" value="{{ $about->titled }}" placeholder="Titled">
                    </div>
                    @error('titled')
                        <small style="color: red">{{ $message }}</small>
                    @enderror

                    <div class="form-group">
                        <label for="subtitlea">Subtitlea</label>
                        <input type="text" class="form-control" name="subtitlea" value="{{ $about->subtitlea }}" placeholder="Subtitlea">
                    </div>
                    @error('subtitlea')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="subtitleb">Subtitleb</label>
                        <input type="text" class="form-control" name="subtitleb" value="{{ $about->subtitleb }}" placeholder="Subtitleb">
                    </div>
                    @error('subtitleb')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="subtitlec">Subtitlec</label>
                        <input type="text" class="form-control" name="subtitlec" value="{{ $about->subtitlec }}" placeholder="Subtitlec">
                    </div>
                    @error('subtitlec')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="subtitled">Subtitled</label>
                        <input type="text" class="form-control" name="subtitled" value="{{ $about->subtitled }}" placeholder="Subtitled">
                    </div>
                    @error('subtitled')
                        <small style="color: red">{{ $message }}</small>
                    @enderror

                    <div class="form-group">
                        <label for="descriptiona">Descriptiona</label>
                        <textarea name="descriptiona" id="descriptiona" cols="30" rows="10" class="form-control" placeholder="Descriptiona">{{ $about->descriptiona }}</textarea>
                    </div>
                    @error('descriptiona')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="descriptionb">Descriptionb</label>
                        <textarea name="descriptionb" id="descriptionb" cols="30" rows="10" class="form-control" placeholder="Descriptionb">{{ $about->descriptionb }}</textarea>
                    </div>
                    @error('descriptionb')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="descriptionc">Descriptionc</label>
                        <textarea name="descriptionc" id="descriptionc" cols="30" rows="10" class="form-control" placeholder="Descriptionc">{{ $about->descriptionc }}</textarea>
                    </div>
                    @error('descriptionc')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="descriptiond">Descriptiond</label>
                        <textarea name="descriptiond" id="descriptiond" cols="30" rows="10" class="form-control" placeholder="Descriptiond">{{ $about->descriptiond }}</textarea>
                    </div>
                    @error('descriptiond')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <!-- Les images -->
                    <img src="/image/{{ $about->icon_imagea }}" alt="" class="img-fluid">
                    <div class="form-group">
                        <label for="icon_imagea">Icon Image a</label>
                        <input type="file" class="form-control" name="icon_imagea">
                    </div>
                    @error('icon_imagea')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <img src="/image/{{ $about->icon_imageb }}" alt="" class="img-fluid">
                    <div class="form-group">
                        <label for="icon_imageb">Icon Image b</label>
                        <input type="file" class="form-control" name="icon_imageb">
                    </div>
                    @error('icon_imageb')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <img src="/image/{{ $about->icon_imagec }}" alt="" class="img-fluid">
                    <div class="form-group">
                        <label for="icon_imagec">Icon Image c</label>
                        <input type="file" class="form-control" name="icon_imagec">
                    </div>
                    @error('icon_imagec')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <img src="/image/{{ $about->icon_imaged }}" alt="" class="img-fluid">
                    <div class="form-group">
                        <label for="icon_imaged">Icon Image d</label>
                        <input type="file" class="form-control" name="icon_imaged">
                    </div>
                    @error('icon_imaged')
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
