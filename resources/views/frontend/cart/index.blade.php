@extends('layouts.checkout')

@section('content')
 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Panier d'Achat</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Accueil</a>
                            <span>Panier d'Achat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container" id="cart">
           
        </div>
    </section>
    <!-- Shoping Cart Section End -->

@endsection
