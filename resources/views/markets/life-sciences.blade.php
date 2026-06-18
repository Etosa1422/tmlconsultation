@extends('layouts.app')

@section('title', 'Life Sciences | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/markets.css') }}">
@endpush

@section('content')
    <section class="markets-hero">
        <div class="markets-hero__bg" style="background-image: url('{{ asset('images/market6.jpg') }}'); opacity: 0.3;"></div>
        <div class="markets-hero__inner">
            <p class="markets-hero__eyebrow">Our Markets</p>
            <h1 class="markets-hero__title">Life Sciences &amp; Biotech</h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="page-width">
            <div class="market-overview" style="margin-bottom: 6rem;">
                <div class="market-overview__content">
                    <h2>Global Engineering for a Healthier World</h2>
                    <p>The life sciences industry is driven by innovation and regulatory compliance. We provide engineering services for pharmaceutical, medical, and biotech facilities.</p>
                    <p>Our multidisciplinary team assists in facility design, clean-room commissioning, and automated process management for precision manufacturing.</p>
                </div>
                <div class="market-stats">
                    <div class="market-stat-card">
                        <span class="market-stat-card__val">Regulatory Ready</span>
                        <span class="market-stat-card__label">Technical Excellence</span>
                    </div>
                </div>
            </div>

            <div class="capability-grid">
                <div class="capability-card">
                    <h3>Clean-Room Design</h3>
                    <p>Specialized HVAC and facility engineering for high-specification pharmaceutical production.</p>
                </div>
                <div class="capability-card">
                    <h3>Process Automation</h3>
                    <p>Integrating SCADA and high-fidelity monitoring tools into batch processing facilities.</p>
                </div>
                <div class="capability-card">
                    <h3>Validation & Commissioning</h3>
                    <p>Ensuring that facilities meet the most stringent global standards for life-sciences safety and quality.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
