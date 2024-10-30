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
                <img src="{{ asset('image/' . $about->icon_imagea) }}" alt="Coding Icon" class="icon-image" style="width: 5cm; height: 5cm;">
                <h4>{{ $about->axea }}</h4>
                <h5>{{ $about->titlea }}</h5>
                <h6>{{ $about->subtitlea }}</h6>
                <p>{{ $about->descriptiona }}</p>
            </div>

            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('image/' . $about->icon_imageb) }}" alt="Advice Icon" class="icon-image" style="width: 5cm; height: 5cm;">
                <h4>{{ $about->axeb }}</h4>
                <h5>{{ $about->titleb }}</h5>
                <h6>{{ $about->subtitleb }}</h6>
                <p>{{ $about->descriptionb }}</p>

            </div>

            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('image/' . $about->icon_imagec) }}" alt="Education Icon" class="icon-image" style="width: 5cm; height: 5cm;">
                <h4>{{ $about->axec }}</h4>
                <h5>{{ $about->titlec }}</h5>
                <h6>{{ $about->subtitlec }}</h6>
                <p>{{ $about->descriptionc }}</p>
            </div>
        </div>
    </div>

</section>

@endsection
