@extends('layouts.app')

@section('title', 'Carbon Capture | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/markets.css') }}">
@endpush

@section('content')
    <section class="markets-hero">
        <div class="markets-hero__bg" style="background-image: url('{{ asset('images/market2.jpg') }}');"></div>
        <div class="markets-hero__inner">
            <p class="markets-hero__eyebrow">Our Markets</p>
            <h1 class="markets-hero__title">Pioneering Carbon Capture Solutions</h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="page-width">
            <div class="market-overview" style="margin-bottom: 6rem;">
                <div class="market-overview__content">
                    <h2>Enabling Large-Scale Emissions Reduction</h2>
                    <p>Carbon Capture, Utilization, and Storage (CCUS) is critical to achieving global net-zero targets. We provide engineering and strategic consultancy for the entire CCUS value chain, from capture technologies to transport and storage infrastructure.</p>
                    <p>Our deep expertise in fluid dynamics and process separation lets us optimize capturing systems across a range of industrial sectors.</p>
                </div>
                <div class="market-stats">
                    <div class="market-stat-card">
                        <span class="market-stat-card__val">Net Zero</span>
                        <span class="market-stat-card__label">Mission Driven Solutions</span>
                    </div>
                </div>
            </div>

            <div class="capability-grid">
                <div class="capability-card">
                    <h3>Post-Combustion Capture</h3>
                    <p>Integrating high-efficiency solvent-based capture systems into existing industrial facilities.</p>
                </div>
                <div class="capability-card">
                    <h3>CO2 Transport & Storage</h3>
                    <p>Technical support for pipeline infrastructure and deep-saline aquifer storage strategies.</p>
                </div>
                <div class="capability-card">
                    <h3>Technical Viability Studies</h3>
                    <p>Comprehensive feasibility analysis for early-stage CCUS projects across the globe.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
