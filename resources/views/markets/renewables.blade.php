@extends('layouts.app')

@section('title', 'Renewables | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/markets.css') }}">
@endpush

@section('content')
    <section class="markets-hero">
        <div class="markets-hero__bg" style="background-image: url('{{ asset('images/hero1.jpg') }}');"></div>
        <div class="markets-hero__inner">
            <p class="markets-hero__eyebrow">Our Markets</p>
            <h1 class="markets-hero__title">Pioneering Renewable Energy</h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="page-width">
            <div class="market-overview" style="margin-bottom: 6rem;">
                <div class="market-overview__content">
                    <h2>Sustainable Power for a Clean Energy Future</h2>
                    <p>The renewable energy sector is the backbone of the global transition to net zero. We provide technical support for onshore and offshore wind, solar PV, and biomass facilities.</p>
                    <p>Our focus is on the integration of these intermittent power sources into the industrial and utility grids with maximum efficiency and reliability.</p>
                </div>
                <div class="market-stats">
                    <div class="market-stat-card">
                        <span class="market-stat-card__val">Renewable First</span>
                        <span class="market-stat-card__label">Strategic Emphasis</span>
                    </div>
                </div>
            </div>

            <div class="capability-grid">
                <div class="capability-card">
                    <h3>Offshore Wind Integration</h3>
                    <p>Strategic and technical support for large-scale offshore wind farms and substation infrastructure.</p>
                </div>
                <div class="capability-card">
                    <h3>Biomass & Biofuels</h3>
                    <p>Process engineering for waste-to-energy and high-specification biofuel production facilities.</p>
                </div>
                <div class="capability-card">
                    <h3>Solar PV Performance</h3>
                    <p>Engineering services for utility-scale solar installations and energy yield optimization.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
