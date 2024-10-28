@extends('layouts.master')

@section('contact')
<section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h2>Contact Us</h2>
        </div>

        <div class="row">
            <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>{{ $contact->address }}</p>
                </div>
            </div>

            <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>{{ $contact->email }}</p>
                </div>
            </div>

            <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="info-box ">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>{{ $contact->phone }}</p>
                </div>
            </div>

            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <!-- Form content -->
                </form>
            </div>
        </div>

    </div>

    <!-- Code pour afficher la carte Google Maps -->
    <div id="map" style="height: 400px; width: 100%;"></div>
    <script>
        // Fonction pour initialiser la carte Google Maps
        function initMap() {
            // Récupérer l'URL d'intégration depuis la base de données
            var mapsEmbed = `{!! $contact->maps_embed !!}`;

            // Insérer le code d'intégration dans la div #map
            document.getElementById('map').innerHTML = mapsEmbed;
        }
    </script>
    <!-- Charger l'API Google Maps avec votre clé API -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=VOTRE_CLE_API&callback=initMap"></script>

</section>
@endsection
