@extends('layouts.master')

@section('about')
<!-- ======= About Us Section ======= -->
<section class="about-us">
    <div class="container text-center">
        <h2 class="section-title">@lang('messages.about us')</h2>
        <p>@lang('messages.about us description')</p>
    </div>
</section>
<!-- End About Us Section -->

<!-- ======= About Lists Section ======= -->
<section class="about-lists" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
                <img src="{{ url( 'image/'. $about->icon_imagea) }}" alt="Coding Icon" class="icon-image" style="width: 5cm; height: 5cm;">
     
                <h4><strong>{{ $about->axea }}</strong></h4>
                <h6>{{ $about->titlea }}</h6>
                <p>{{ $about->subtitlea }}</p>
                <small>{{ $about->descriptiona }}</small>
            </div>

            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('image/' . $about->icon_imageb) }}" alt="Advice Icon" class="icon-image" style="width: 5cm; height: 5cm;">
                <h4><strong>{{ $about->axeb }}</strong></h4>
                <h6>{{ $about->titleb }}</h6>
                <p>{{ $about->subtitleb }}</p>
                <small>{{ $about->descriptionb }}</small>

            </div>

            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('image/' . $about->icon_imagec) }}" alt="Education Icon" class="icon-image" style="width: 5cm; height: 5cm;">
                <h4><strong>{{ $about->axec }}</strong></h4>
                <h6>{{ $about->titlec }}</h6>
                <p>{{ $about->subtitlec }}</p>
                <small>{{ $about->descriptionc }}</small>
            </div>

            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('image/' . $about->icon_imaged) }}" alt="Education Icon" class="icon-image" style="width: 5cm; height: 5cm;">
                <h4><strong>{{ $about->axed }}</strong></h4>
                <h6>{{ $about->titled }}</h6>
                <p>{{ $about->subtitled }}</p>
                <small>{{ $about->descriptiond }}</small>
            </div>
        </div>
    </div>

</section>

@endsection
