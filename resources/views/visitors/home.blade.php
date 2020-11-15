@extends('layouts.master')

@section('styles')
    <style>
        @media only screen and (min-width: 992px) {
            .imageWidth {
                width: 100%;
                height: 600px;
            }
        }

        .imageClicked {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block imageWidth" src="{{ asset('assets/P1.jpg') }}">
        </div>
        <div class="carousel-item">
            <img class="d-block imageWidth" src="{{ asset('assets/P2.jpg') }}">
        </div>
        <div class="carousel-item">
            <img class="d-block imageWidth" src="{{ asset('assets/P3.jpg') }}">
        </div>
        </div>
    </div>
    <div class="container">
        {{-- Presentation's text --}}
        <div class="d-flex justify-content-center mt-4">
            <h2 class="font-weight-bolder">Présentation</h2>
        </div>
        <div class="row">
            <div class="col-12">
                @include('includes.presentation')
            </div>
        </div>

        {{-- Expertise's text --}}
        <div class="d-flex justify-content-center mt-4">
            <h2 class="font-weight-bolder"><span class="icofont-layout"></span> Notre savoir-faire</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-8">
                @include('includes.expertise')
            </div>
            <div class="col-12 col-md-4 d-none d-md-block">
                <img class="d-block w-100" src="{{ asset('assets/A1.jpg') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-4"><img class="d-block w-100 imageClicked" data-toggle="modal" data-target="#exampleModalCenter" src="{{ asset('assets/D81.jpg') }}"></div>
            <div class="col-4"><img class="d-block w-100 imageClicked" data-toggle="modal" data-target="#exampleModalCenter" src="{{ asset('assets/D82.jpg') }}"></div>
            <div class="col-4"><img class="d-block w-100 imageClicked" data-toggle="modal" data-target="#exampleModalCenter" src="{{ asset('assets/E2.jpg') }}"></div>
        </div>
        <div class="d-flex">
            <small class="text-muted mt-3"><em>cliquer sur une photo pour mieux le voir</em></small>
        </div>

        {{-- Teams --}}
        <div class="d-flex justify-content-center mt-4">
            <h2 class="font-weight-bolder"><span class="icofont-users"></span> Notre équipe</h2>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div uk-slider="center: true">

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                
                        <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@l uk-grid">
                            <li>
                                <div class="uk-card">
                                    <div class="uk-card-media-top">
                                        <center><img src="{{ asset('assets/avatars/man.png') }}" class="w-50" alt=""></center>
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title text-center black-text">KPETIGO Roland</h3>
                                        <p class="text-center">Directeur Général</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card">
                                    <div class="uk-card-media-top">
                                        <center><img src="{{ asset('assets/avatars/man.png') }}" class="w-50" alt=""></center>
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title black-text text-center">LEKOVI Gaston</h3>
                                        <p class="text-center">Directeur administratif</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card">
                                    <div class="uk-card-media-top">
                                        <center><img src="{{ asset('assets/avatars/man.png') }}" class="w-50" alt=""></center>
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title black-text text-center">HONKPO Ayélé</h3>
                                        <p class="text-center">Sécrétaire administrative</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card">
                                    <div class="uk-card-media-top">
                                        <center><img src="{{ asset('assets/avatars/man.png') }}" class="w-50" alt=""></center>
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title text-center black-text">AGOSSOU Honoré</h3>
                                        <p class=text-center>Directeur commercial </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card">
                                    <div class="uk-card-media-top">
                                        <center><img src="{{ asset('assets/avatars/man.png') }}" class="w-50" alt=""></center>
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title text-center black-text">AKAKPO Jean-Pierre</h3>
                                        <p class="text-center">Directeur technique</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover black-text" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover black-text" href="#" uk-slidenav-next uk-slider-item="next"></a>
                
                    </div>
                
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                
                </div>
            </div>
            <div class="col-12 mt-4">
                <p>L’organisation  de notre structure est entièrement  tournée vers la satisfaction du client et le respect des engagements et s’articule autour de six grandes directions :
                    
                    La Direction Générale, 
                    la Direction Technique,
                    la Direction des Achats et Logistique,   
                    la Direction Administrative et des Ressources Humaines,
                    la Direction Comptabilité,
                    la Direction Facturation et Recouvrement 
                    </p>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <a href="#!" class="btn blue-gradient py-3 z-depth-1-half"  data-toggle="modal" data-target="#demandeDevisModal">Faire une demande de devis</a>
        </div>
    </div>  
    
    <!-- Modal Image -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
    
        <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
        <div class="modal-dialog modal-dialog-centered" role="document">
    
    
        <div class="modal-content">
            <div class="modal-body">
                <img src="" alt="" class="d-block w-100" id="showImagePanel">
            </div>
        </div>
        </div>
    </div>

    
  
  <!-- Modal de demande de devis-->
  <div class="modal fade" id="demandeDevisModal" tabindex="-1" role="dialog" aria-labelledby="demandeDevisModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="demandeDevisModalLabel">Formulaire</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="post">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="full_name">Nom complet *</label>
                    <input type="text" name="fullname" id="full_name" class="form-control" required autofocus placeholder="exemple: victor GBOGAN">
                </div>
                <div class="form-group">
                    <label for="enterprise">Société:</label>
                    <input type="text" name="enterprise" id="enterprise" class="form-control" placeholder="le nom de votre société ici...">
                </div>
                <div class="form-group">
                    <label for="Email">Email *</label>
                    <input type="email" name="Email" id="email" class="form-control" required placeholder="email@exemple.com">
                </div>
                <div class="form-group">
                    <label for="number">Telephone *</label>
                    <input type="tel" name="number" id="number" class="form-control" required placeholder="votre numéro de téléphone">
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" class="form-control" rows="5" placeholder="Détaillez votre projet ici... (obligatoire)"></textarea>
                </div>
                <small class="text-muted font-italic">Le "*" devant le nom d'un champ définit que le champs est obligatoire</small>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
              <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('extra-js')
    <script>
        $(document).ready(function () {
            $('.imageClicked').click(function () {
                let image_source = $(this).attr('src');
                $('#showImagePanel').attr('src', image_source);
            });
        });
    </script>
@endsection