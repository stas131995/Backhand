@extends('layouts.document')

@section('content')

@include('components.header')

<div id="hero" class="hero-section">
        
    <div id="hero-carousel" class="hero-carousel carousel carousel-fade slide" data-ride="carousel" data-interval="10000">
        
        <div class="figure-holder-wrapper">
            <div class="container">
                <div class="row">
                    <div class="figure-holder">
                        <img class="figure-image img-responsive" src="assets/images/imac.png" alt="image" />
                    </div><!--//figure-holder-->
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//figure-holder-wrapper-->
        
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#hero-carousel"></li>
            <li data-slide-to="1" data-target="#hero-carousel"></li>
            <li data-slide-to="2" data-target="#hero-carousel"></li>
        </ol>
        
        <!-- Wrapper for slides -->
        @include('components.carusel')

    </div><!--//carousel-->
</div><!--//hero-->
@endsection