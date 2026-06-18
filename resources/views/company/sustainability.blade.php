@extends('layouts.app')

@section('title', 'Sustainability | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
@endpush

@section('content')
    <section class="subpage-hero">
        <div class="subpage-hero__bg" style="background-image: url('{{ asset('images/market2.jpg') }}');"></div>
        <div class="subpage-hero__overlay"></div>
        <div class="subpage-hero__inner">
            <p class="subpage-hero__eyebrow">Our Commitment</p>
            <h1 class="subpage-hero__title">Engineering for a Sustainable Future</h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="page-width">
            <div class="section-intro">
                <h2 class="section-intro__title">Advancing the energy transition through technical innovation.</h2>
                <p class="section-intro__desc">Sustainability is at the core of our business strategy. We help our clients minimize environmental impact while maximizing operational efficiency through data-driven decarbonisation pathways.</p>
            </div>

            <div class="content-grid">
                <div class="text-block">
                    <h3>Environmental Stewardship</h3>
                    <p>We believe that engineering excellence and environmental responsibility go hand in hand. Our teams work tirelessly to develop solutions that reduce GHG emissions, optimize resource usage, and protect the ecosystems where we operate.</p>
                    <h3>Social Responsibility</h3>
                    <p>TML is committed to fostering a diverse, inclusive, and safe workplace. We invest in the communities where we work, supporting local development and technical education programs.</p>
                </div>
                <div class="image-wrapper">
                    <img src="{{ asset('images/expertise1.jpg') }}" alt="Sustainability in Action">
                </div>
            </div>
        </div>
    </section>
@endsection
