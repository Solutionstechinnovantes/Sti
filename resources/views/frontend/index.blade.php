@extends('layouts.master')
@section('title', 'STI Solutions & Technologies Innovantes')
@section('content')
    <!-- Contenu de la page d'accueil -->
    @include('frontend.sliders')
    @include('frontend.about')
    @include('frontend.services')
    @include('frontend.portfolio')
    @include('frontend.team')
    @include('frontend.contact')


    <!-- Autres inclusions de fichiers de vue -->
@endsection
