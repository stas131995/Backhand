@extends('layouts.document')

@section('content')

@include('components.header')

@component('components.hero', [
    'items' => $carouselItems,
    'figureImage' => '/assets/images/imac.png',
])
@endcomponent

@include('components.about')

@include('components.testimonials')

@component('components.features', [
    'items' => $featuresItems
])
@endcomponent

@include('components.team')

@component('components.pricing', [
    'items' => $pricingItems
])
@endcomponent

@include('components.contactfooter')


@endsection