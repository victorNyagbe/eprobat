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
            <h1 class="white-text animated fadeInRightBig" style="font-style: italic">Nos réalisations</h1>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h1 class="text-center">En cours de développement</h1>
            </div>
        </div>
    </div>
@endsection