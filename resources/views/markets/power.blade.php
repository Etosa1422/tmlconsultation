@extends('layouts.app')

@section('title', 'Power | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/markets.css') }}">
@endpush

@section('content')
    <section class="markets-hero">
        <div class="markets-hero__bg" style="background-image: url('{{ asset('images/market4.jpg') }}');"></div>
        <div class="markets-hero__inner">
            <p class="markets-hero__eyebrow">Our Markets</p>
            <h1 class="markets-hero__title">Power Generation &amp; Grid Integration</h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="page-width">
            <div class="market-overview" style="margin-bottom: 6rem;">
                <div class="market-overview__content">
                    <h2>Securing Stable and Sustainable Power Systems</h2>
                    <p>The global power sector is undergoing a massive transformation. We provide technical and strategic support for modern power generation facilities, grid integration, and large-scale energy storage systems.</p>
                    <p>Our multidisciplinary team assists in optimizing existing thermal power plants and the integration of new-generation utility-scale renewables into the electrical grid.</p>
                </div>
                <div class="market-stats">
                    <div class="market-stat-card">
                        <span class="market-stat-card__val">Utility Scale</span>
                        <span class="market-stat-card__label">Engineering Solutions</span>
                    </div>
                </div>
            </div>

            <div class="capability-grid">
                <div class="capability-card">
                    <h3>Thermal Generation Efficiency</h3>
                    <p>Combining heat and power (CHP) optimization and thermal plant performance upgrades.</p>
                </div>
                <div class="capability-card">
                    <h3>Grid-Scale Energy Storage</h3>
                    <p>Engineering services for BESS (Battery Energy Storage Systems) and pumped-hydro storage solutions.</p>
                </div>
                <div class="capability-card">
                    <h3>Digital Grid Solutions</h3>
                    <p>Integration of smart monitoring and analytical tools into power transmission infrastructure.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
