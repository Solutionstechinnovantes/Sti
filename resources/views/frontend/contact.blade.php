@extends('layouts.master')

@section('contact')
<section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h2>@lang('messages.contact us')</h2>
        </div>

        <div class="row">
            <!-- Utilisation de col-lg-4 pour trois colonnes égales -->
            <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                <div class="info-box" style="width: 500px;">
                    <i class="bx bx-map"></i>
                    <h3>@lang('messages.adress')</h3>
                    <p>@lang('messages.ksar, Ould Dahi Buildings, road of the late President Mokhtar Ould Daddah, opposite the World Bank.')</p>
                </div>
            </div>

            <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="info-box" style="width: 500px;">
                    <i class="bx bx-envelope"></i>
                    <h3>@lang('messages.email')</h3>
                    <!-- Ajout de la classe email-text pour limiter la longueur et permettre le retour à la ligne -->
                    <p class="email-text">{{ $contact->first()->email }}</p>
                </div>
            </div>

            <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="info-box">
                    <i class="bx bx-phone-call"></i>
                    <h3>@lang('messages.phone')</h3>
                    <p>+222 {{ $contact->first()->phone }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Affichage de la carte Google Maps avec iframe -->
    <div id="map-container" style="width: 100%; max-width: 100%; margin-top: 20px;">
        {!! $contact->first()->maps_embed !!}
    </div>

    <style>
        /* Limiter la longueur du texte de l'e-mail et permettre le retour à la ligne */
        .email-text {
            word-wrap: break-word; /* Permet de couper les mots longs */
            white-space: normal; /* Permet le retour à la ligne */
        }

        /* Style responsive pour la carte */
        #map-container iframe {
            width: 100%;
            height: 400px; /* Hauteur par défaut */
            border: 0;
        }

        /* Ajuster la hauteur pour les écrans plus larges */
        @media (min-width: 768px) {
            #map-container iframe {
                height: 600px;
            }
        }

        @media (min-width: 1200px) {
            #map-container iframe {
                height: 800px;
            }
        }

        .contact .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</section>
@endsection
