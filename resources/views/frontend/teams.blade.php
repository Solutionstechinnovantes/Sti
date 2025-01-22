@extends('layouts.master')

@section('team')
<section id="team" class="team">
    <div class="container">

      <div class="section-title">
        <h2>@lang('messages.team')</h2>
        <p>@lang('messages.Those are our amazing team members who work every day to strengthen the foundation of our company.')</p>
      </div>

      <div class="row justify-content-center"> <!-- Ajouter la classe justify-content-center pour centrer les éléments -->
        @foreach ($teams as $team)

        <div class="col-xl-3 col-lg-4 col-md-6 mb-4"> <!-- Ajouter la classe mb-4 pour plus d'espace entre les cartes -->
          <div class="member">
            <div class="pic" style="text-align: center;"> <!-- centrer horizontalement -->
              <img src="{{ asset('image/' . $team->imagea) }}" class="img-fluid" style="width: 100%; height: 7.5cm; max-width: 250px;" alt="">
            </div>
            <div class="member-info">
              <h4>{{ $team->tittlea }}</h4>
              <span>{{ $team->descriptiona }}</span>
              <div class="social">
                <a href="https://x.com/MoustaphaTJ"><i class="icofont-twitter"></i></a>
                <a href="{{ $team->fba }}"><i class="icofont-facebook"></i></a>
                <a href="https://www.instagram.com/moustaphatalebjiddou/"><i class="icofont-instagram"></i></a>
                <a href="https://www.linkedin.com/in/moustaphatalebjiddou/"><i class="icofont-linkedin"></i></a>
                <a href="https://github.com/moustaphatalebjiddou"><i class="icofont-github"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="member">
            <div class="pic" style="text-align: center;">
              <img src="{{ asset('image/' . $team->imageb) }}" class="img-fluid" style="width: 100%; height: 7.5cm; max-width: 250px;" alt="">
            </div>
              <div class="member-info">
                <h4>{{ $team->tittleb }}</h4>
              <span>{{ $team->descriptionb }}</span>
                <div class="social">
                  <a href="{{ $team->fbb }}"><i class="icofont-twitter"></i></a>
                  <a href="{{ $team->fbb }}"><i class="icofont-facebook"></i></a>
                  <a href="{{ $team->fbb }}"><i class="icofont-instagram"></i></a>
                  <a href="{{ $team->fbb }}"><i class="icofont-linkedin"></i></a>
                  <a href="{{ $team->fbb }}"><i class="icofont-github"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="member">
            <div class="pic" style="text-align: center;">
              <img src="{{ asset('image/' . $team->imagec) }}" class="img-fluid" style="width: 100%; height: 7.5cm; max-width: 250px;" alt="">
            </div>
              <div class="member-info">
                <h4>{{ $team->tittlec }}</h4>
                <span>{{ $team->descriptionc }}</span>
                <div class="social">
                  <a href="{{ $team->fbc }}"><i class="icofont-twitter"></i></a>
                  <a href="{{ $team->fbc }}"><i class="icofont-facebook"></i></a>
                  <a href="{{ $team->fbc }}"><i class="icofont-instagram"></i></a>
                  <a href="{{ $team->fbc }}"><i class="icofont-linkedin"></i></a>
                  <a href="{{ $team->fbc }}"><i class="icofont-github"></i></a>
                </div>
              </div>
            </div>
          </div>

        @endforeach
      </div>

    </div>
</section>
@endsection
