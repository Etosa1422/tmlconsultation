@extends('layouts.app')

@section('title', 'Hydrogen | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/markets.css') }}">
@endpush

@section('content')
    <section class="markets-hero">
        <div class="markets-hero__bg" style="background-image: url('{{ asset('images/market3.jpg') }}'); opacity: 0.3;"></div>
        <div class="markets-hero__inner">
            <p class="markets-hero__eyebrow">Our Markets</p>
            <h1 class="markets-hero__title">The Hydrogen Economy</h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="page-width">
            <div class="market-overview" style="margin-bottom: 6rem;">
                <div class="market-overview__content">
                    <h2>Engineering a Versatile Clean Energy Carrier</h2>
                    <p>Hydrogen is poised to play a central role in the energy transition. We provide engineering services for green, blue, and turquoise hydrogen production, storage, and processing infrastructure.</p>
                    <p>Our deep understanding of process engineering and gaseous separation protocols ensures the efficiency and safety of hydrogen facilities across small and large scale implementations.</p>
                </div>
                <div class="market-stats">
                    <div class="market-stat-card">
                        <span class="market-stat-card__val">Green & Blue</span>
                        <span class="market-stat-card__label">Full-Spectrum Support</span>
                    </div>
                </div>
            </div>

            <div class="capability-grid">
                <div class="capability-card">
                    <h3>Electrolysis Plant Design</h3>
                    <p>Optimizing the interface between renewable power sources and electrolysis production facilities.</p>
                </div>
                <div class="capability-card">
                    <h3>Methane Reforming (SMR/ATR)</h3>
                    <p>Advanced engineering for blue hydrogen production with integrated carbon capture solutions.</p>
                </div>
                <div class="capability-card">
                    <h3>Storage & Material Handling</h3>
                    <p>Specialized technical advice on high-pressure and cryogenic hydrogen storage solutions.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
