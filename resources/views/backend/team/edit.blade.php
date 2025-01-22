@extends('layouts.app')

@section('title', 'Data team')

@section('content')
    <div class="container">
        <a href="/admin/teams" class="btn btn-primary mb-3">teams list</a>
        <div class="row" >
            <div class="col-md-12">
                <form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">TITTLE A</label>
                        <input type="text" class="form-control" name="tittlea" placeholder="Titlea">
                    </div>
                    @error('titlea')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">DESCRIPTION A </label>
                        <textarea name="descriptiona" id="" cols="30" rows="10" class="form-control" placeholder="Descriptiona"></textarea>
                    </div>
                    @error('descriptiona')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">FileA</label>
                        <input type="file" class="form-control" name="imagea">
                    </div>
                    @error('imagea')
                    <div class="form-group">
                        <label for="">fACEBOOK lIEN A</label>
                        <input type="text" class="form-control" name="fba" placeholder="fba">
                    </div>
                    <div class="form-group">
                        <label for="">TWITTER LIEN A</label>
                        <input type="text" class="form-control" name="twa" placeholder="twa">
                    </div>
                    <div class="form-group">
                        <label for="">INSTAGRAM LIEN A</label>
                        <input type="text" class="form-control" name="ina" placeholder="ina">
                    </div>
                    <div class="form-group">
                        <label for="">LINKDIN A</label>
                        <input type="text" class="form-control" name="linka" placeholder="linka">
                    </div>
                    <div class="form-group">
                        <label for="">GITHUB LIEN A</label>
                        <input type="text" class="form-control" name="gita" placeholder="gita">
                    </div>

                    <div class="form-group">
                        <label for="">TITTLE B</label>
                        <input type="text" class="form-control" name="tittleb" placeholder="Titleb">
                    </div>
                    @error('titleb')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">DESCRIPTION B</label>
                        <textarea name="descriptionb" id="" cols="30" rows="10" class="form-control" placeholder="Descriptionb"></textarea>
                    </div>
                    @error('descriptionb')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">File B</label>
                        <input type="file" class="form-control" name="imageb">
                    </div>
                    @error('imageb')
                    <div class="form-group">
                        <label for="">fACEBOOK lIEN B</label>
                        <input type="text" class="form-control" name="fbb" placeholder="fbb">
                    </div>
                    <div class="form-group">
                        <label for="">TWITTER LIEN B</label>
                        <input type="text" class="form-control" name="twb" placeholder="twb">
                    </div>
                    <div class="form-group">
                        <label for="">INSTAGRAM LIEN B</label>
                        <input type="text" class="form-control" name="inb" placeholder="inb">
                    </div>
                    <div class="form-group">
                        <label for="">LINKDIN B</label>
                        <input type="text" class="form-control" name="linkb" placeholder="linkb">
                    </div>
                    <div class="form-group">
                        <label for="">GITHUB LIEN B</label>
                        <input type="text" class="form-control" name="gitb" placeholder="gitb">
                    </div>


                    <div class="form-group">
                        <label for="">TITTLE C</label>
                        <input type="text" class="form-control" name="tittlec" placeholder="Titlec">
                    </div>
                    @error('titlec')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">DESCRIPTION C</label>
                        <textarea name="descriptionc" id="" cols="30" rows="10" class="form-control" placeholder="Descriptionc"></textarea>
                    </div>
                    @error('description')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">File C</label>
                        <input type="file" class="form-control" name="imagec">
                    </div>
                    @error('imagec')
                    <div class="form-group">
                        <label for="">fACEBOOK lIEN C</label>
                        <input type="text" class="form-control" name="fbc" placeholder="fbc">
                    </div>
                    <div class="form-group">
                        <label for="">TWITTER LIEN C</label>
                        <input type="text" class="form-control" name="twc" placeholder="twc">
                    </div>
                    <div class="form-group">
                        <label for="">INSTAGRAM LIEN C</label>
                        <input type="text" class="form-control" name="inc" placeholder="inc">
                    </div>
                    <div class="form-group">
                        <label for="">LINKDIN C</label>
                        <input type="text" class="form-control" name="linkc" placeholder="linkc">
                    </div>
                    <div class="form-group">
                        <label for="">GITHUB LIEN C</label>
                        <input type="text" class="form-control" name="gitc" placeholder="gitc">
                    </div>

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
