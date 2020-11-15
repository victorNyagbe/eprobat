@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-12 col-md-8 col-lg-7">
            <h1>Nous contacter</h1>
            <p class="lead">Eprobat BTP, une structure – un but – une foi, la qualité du professionnalisme panafricaine nous engage.</p>
            </div>
        </div>
    
        <div class="row pt-4">
            <div class="col-12 col-md-6">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7932.541260830602!2d1.166552909603003!3d6.228006460489546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2stg!4v1605286185032!5m2!1sfr!2stg"
                width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
            
            <div class="col-12 col-md-6 pt-5 pt-md-0">
                <form>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Saisir votre nom complet">
                        </div>
                    </div>
        
                    <div class="row mt-4">
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Saisir votre email">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <textarea class="form-control" name="message" rows="4" placeholder="Comment pouvons-nous vous aider?"></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <button type="submit" class="btn btn-success border border-white">Envoyer</button>
                        </div>
                    </div>
                </form>
                <p><span class="icofont icofont-2x p-2 mr-2 icofont-telephone rounded-circle white-text blue-gradient"></span> 00228 91 10 58 92 / 98 73 52 82 </p>
            </div>
        </div>
    </div>
@endsection