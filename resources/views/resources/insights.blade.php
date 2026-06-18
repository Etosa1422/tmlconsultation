@extends('layouts.app')

@section('title', 'Technical Insights | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/resources.css') }}">
@endpush

@section('content')
    <section class="subpage-hero">
        <div class="subpage-hero__bg" style="background-image: url('{{ asset('images/hero2.jpg') }}'); opacity: 0.2;"></div>
        <div class="subpage-hero__overlay"></div>
        <div class="subpage-hero__inner">
            <p class="subpage-hero__eyebrow">Expert Perspectives</p>
            <h1 class="subpage-hero__title">Technical Insights</h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="page-width">
            <div class="section-intro">
                <h2 class="section-intro__title">Technical excellence and thought leadership.</h2>
                <p class="section-intro__desc">Deep dives into engineering challenges, market trends, and innovative perspectives from our global subject matter experts.</p>
            </div>

            <div class="resources-grid">
                <div class="resource-card">
                    <div class="resource-card__image">
                        <img src="{{ asset('images/digital.jpg') }}" alt="Insight 1">
                    </div>
                    <div class="resource-card__content">
                        <span class="resource-card__meta">MARCH 27, 2026 | DIGITAL TWINS</span>
                        <h3 class="resource-card__title">The Role of Digital Twins in Asset Life Extension</h3>
                        <p class="resource-card__excerpt">Exploring how real-time modelling and predictive analytics identify structural risks long before they manifest.</p>
                        <a href="#" class="resource-card__link">Read Analysis &rarr;</a>
                    </div>
                </div>

                <div class="resource-card">
                    <div class="resource-card__image">
                        <img src="{{ asset('images/market4.jpg') }}" alt="Insight 2">
                    </div>
                    <div class="resource-card__content">
                        <span class="resource-card__meta">MARCH 20, 2026 | HYDROGEN ECONOMY</span>
                        <h3 class="resource-card__title">Optimizing Green Hydrogen Electrolysis Plant Efficiency</h3>
                        <p class="resource-card__excerpt">Technical deeper dive into the engineering challenges of integrating intermittent renewable power with hydrogen production.</p>
                        <a href="#" class="resource-card__link">Read Analysis &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
