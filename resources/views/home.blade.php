@extends('layouts.app')

@section('content')

    <!-- Start Slider Posts -->
@if (Auth::user()->confirmed == 0 )  Debe confirmar su correo electronico  @endif
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="blog-post single">
                        <div class="blog-post-img-date">
                            <div class="link-wrapper text-center">
                                <div class="overlay">
                                    <h2 class="text-center text-white">Ciao
                                        <strong>ingarqisrael</strong>!
                                        <br>Ecco la Tua Area Personale di
                                        <strong>Massaggi24</strong>!
                                    </h2>
                                </div>
                            </div>
                            <div class="blog-post-date">25
                                <span>Nov</span>
                            </div>
                            <div class="blog-type">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>

                        <div class="blog-post-img-date">
                            <div class="quote">
                                <h3>Come Funziona</h3>
                                <p>Per Pubblicare su Massaggi24 devi seguire questi 3 semplici passi:</p>
                                1. Acquista i Crediti necessari
                                <br> 2. Inviaci la Ricevuta di Pagamento
                                <br> 3. Pubblica i Tuoi Annunci
                                <p></p>

                            </div>

                            <div class="blog-type">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>

                    </div>


                    <div class="col-md-12">


                        <div class="row">
                            <div class="col-md-6 col-xs-12 text-center black hvr-shutter-in-horizontal">
                                <a class="pulsante-area-privata" href="{{ url('/pay') }}">
                                    <div class="p1">
                                        <i class="fa fa-3x fa-credit-card" aria-hidden="true"></i>
                                        <br>i tuoi crediti
                                        <br>
                                        <span class="sub-bot">Acquisto Credito e Storico Ordini</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xs-12 text-center black hvr-shutter-in-horizontal">
                                <a class="pulsante-area-privata" href="#">
                                    <div class="p2">
                                        <i class="fa fa-3x fa-envelope" aria-hidden="true"></i>
                                        <br>invio ricevuta pagamento
                                        <br>
                                        <span class="sub-bot">Invio OBBLIGATORIO</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 text-center black hvr-shutter-in-horizontal">
                                <a class="pulsante-area-privata" href="#">
                                    <div class="p4">
                                        <i class="fa fa-3x fa-user" aria-hidden="true"></i>
                                        <br>il tuo account
                                        <br>
                                        <span class="sub-bot">Stato, Email e Password</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xs-12 text-center black hvr-shutter-in-horizontal">
                                <a class="pulsante-area-privata" href="#">
                                    <div class="p3">
                                        <i class="fa fa-3x fa-newspaper-o" aria-hidden="true"></i>
                                        <br>pubblica annuncio
                                        <br>
                                        <span class="sub-bot">Pubblica il Tuo Annuncio</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row ">


                            <div class="alert alert-danger text-center">
                                <h3 class="text-center">I TUOI ANNUNCI</h3>
                                <p class="text-center">ELENCO ANNUNCI PUBBLICATI</p>
                            </div>
                            <div class=" alert alert-warning text-center">
                                <h2>INFO</h2>
                                <p>Nessun annuncio ancora pubblicato!</p>
                            </div>
                        </div>

                    </div>
                    <!--12-->

                </div>
            </div>

        </div>
    </section>

@endsection
