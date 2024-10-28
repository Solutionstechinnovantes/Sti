@extends('layouts.master')

@section('services')
<section id="services" class="services">
    <div class="container">
        <div class="section-title">
            <h2>Services</h2>
        </div>
        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon">  <img src="{{ asset('image/' . $service->imagea) }}" alt="Advice Icon" class="icon-image" style="width: 5cm; height: 5cm;">
                </div>
                <h4 class="title"><a href="">{{ $service->tittlea }}</a></h4>
                <p class="description">{{ $service->descriptiona }}</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon">  <img src="{{ asset('image/' . $service->imageb) }}" alt="Advice Icon" class="icon-image" style="width: 5cm; height: 5cm;">
                </div>
                <h4 class="title"><a href="">{{ $service->tittleb }}</a></h4>
                <p class="description">{{ $service->descriptionb }}</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon">  <img src="{{ asset('image/' . $service->imagec) }}" alt="Advice Icon" class="icon-image" style="width: 5cm; height: 5cm;">
                </div>
                <h4 class="title"><a href="">{{ $service->tittlec }}</a></h4>
                <p class="description">{{ $service->descriptionc }}</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon">  <img src="{{ asset('image/' . $service->imaged) }}" alt="Advice Icon" class="icon-image" style="width: 5cm; height: 5cm;">
                </div>
                <h4 class="title"><a href="">{{ $service->tittled }}</a></h4>
                <p class="description">{{ $service->descriptiond }}</p>
            </div>

            @endforeach
        </div>
    </div>
</section>
@endsection
