@extends('layouts.master')

@section('styles')
    <style>
        .activity-back {
            background-image: linear-gradient(to top right, #00b0ff, #0091ea, #0277bd, #01579b, blue)
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid activity-back py-5">
        <div class="d-flex justify-content-center">
            <h1 class="white-text animated fadeInRightBig" style="font-style: italic">Nos activités</h1>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">   
                <img src="{{ asset('assets/activities/road.svg') }}" alt="" class="w-25 d-none d-md-block float-left mb-1 mr-2">
                <img src="{{ asset('assets/activities/road.svg') }}" alt="" class="w-50 d-block d-md-none float-left mb-1 mr-2">

                <h2 class="mt-0">Routes</h2>
                <p class="text-justify">Notre structure spécialisée dans les métiers de la route.
                    
                    Elle dispose de son propre bureau d’études pour développer 
                    des solutions pour vos travaux routiers.
                    Notre objectif demeure la compétitivité et la performance de 
                    nos activités de la conception et de l’étude jusqu’à la livraison
                    de vos projets et nous intervenons sur toute l’Afrique
                    , dans tous les métiers liés à l’industrie routière. 
                    Nous répondons autant sur marchés publics aux services des 
                    collectivités locales que sur marchés privés, promoteurs,                 
                    industriels, bailleurs sociaux et particuliers. Enfin, nous 
                    Intervenons sur le territoire national pour les activités 
                    D’entretiens routiers type « Blow enrobés ».
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <img src="{{ asset('assets/activities/building.svg') }}" alt="" class="w-25 d-none d-md-block float-right mb-1 ml-2">
                <img src="{{ asset('assets/activities/building.svg') }}" alt="" class="w-50 d-block d-md-none float-right mb-1 ml-2">
                <h2 class="mt-0">Bâtiments</h2>
                <p class="text-justify">Chez Nous !!! Nous construisons plus qu’un bâtiment, de l’architecture à l’exécution, nous vous créons un lieu de vie élégant, confortable et de grande qualité.
                    Qu’il s’agisse d’un projet de construction résidentielle,
                    commerciale, industrielle, agricole ou de génie civil, nous 
                    appliquons la même minute et une grande rigueur à chaque étape de sa réalisation.
                    Nos constructions bénéficient des certifications en qualité du bâtiment et en haut rendement énergétique.
                    Confiez votre projet de construction à notre équipe. Elle vous accompagnera de l’initiation du projet jusqu’à la remise des clés. Grace à ce suivi personnalisé et une coordination rigoureuse tout au long du chantier, votre construction sera à la hauteur de vos attentes.                    
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">   
                <img src="{{ asset('assets/activities/big-data.svg') }}" alt="" class="w-25 d-none d-md-block float-left mb-1 mr-2">
                <img src="{{ asset('assets/activities/big-data.svg') }}" alt="" class="w-50 d-block d-md-none float-left mb-1 mr-2">

                <h2 class="mt-0">Réseau & Informatique</h2>
                <p class="text-justify">Nous nous spécialisons également dans l’installation et la maintenance, offrant un suivi des parcs informatiques et une maîtrise parfaite de vos réseaux afin d’optimiser votre stratégie informatique.
                    Nous vous proposons à la vente de tout type de matériels informatiques .Notre équipe s’aura vous conseiller afin de définir vos besoins et vous proposer des produits fiables et performants.
                    Nous prenons en charge tous les dépannages informatiques ainsi que les installations des logiciels ou  le changement des pièces détachées, vous assurant ainsi service après-vente efficace et réactif.                    
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <img src="{{ asset('assets/activities/water-drilling.svg') }}" alt="" class="w-25 d-none d-md-block float-right mb-1 ml-2">
                <img src="{{ asset('assets/activities/water-drilling.svg') }}" alt="" class="w-50 d-block d-md-none float-right mb-1 ml-2">
                <h2 class="mt-0">Forage d'eau</h2>
                <p class="text-justify">Ressource naturelle très convoitée, l’eau potable nécessite un
                    forage d’une grande précision pour éviter tout problème
                    éventuel . Spécialiste dans le forage hydraulique, notre Structure répond à vos besoins en matière de
                    captage d’eau résidentiel, commercial et industriel ainsi qu’en
                    alimentation villageoise.                                        
                </p>
            </div>
        </div>
    </div>
@endsection
