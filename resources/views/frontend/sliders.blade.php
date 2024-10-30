@extends('layouts.master')

@section('sliders')

<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                @foreach ($sliders as $index => $slider)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" style="background-image: url('/image/{{ $slider->image }}')">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animated fadeInDown">{{  $slider->tittle  }}</h2>
                            <p class="animated fadeInUp">{{ $slider->description }}</p>
                            <a href="#about" class="btn-get-started animated fadeInUp scrollto">@lang('messages.read more')</a>
                        </div>
                    </div>
                </div>
                @endforeach

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section>
@endsection
