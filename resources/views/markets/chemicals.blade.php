@extends('layouts.app')

@section('title', 'Chemicals | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/markets.css') }}">
@endpush

@section('content')
    <section class="markets-hero">
        <div class="markets-hero__bg" style="background-image: url('{{ asset('images/market5.jpg') }}'); opacity: 0.3;"></div>
        <div class="markets-hero__inner">
            <p class="markets-hero__eyebrow">Our Markets</p>
            <h1 class="markets-hero__title">Chemicals &amp; Industrial Processing</h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="page-width">
            <div class="market-overview" style="margin-bottom: 6rem;">
                <div class="market-overview__content">
                    <h2>Advancing Efficiency in Large-Scale Production</h2>
                    <p>The chemical industry is fundamental to modern society. We provide specialized process engineering and facility optimization for both specialty and commodity chemicals production.</p>
                    <p>From reactor optimization to waste stream management, we help plant operators maximize throughput while minimizing their environmental footprint.</p>
                </div>
                <div class="market-stats">
                    <div class="market-stat-card">
                        <span class="market-stat-card__val">Process First</span>
                        <span class="market-stat-card__label">Technical Focus</span>
                    </div>
                </div>
            </div>

            <div class="capability-grid">
                <div class="capability-card">
                    <h3>Reactant Efficiency</h3>
                    <p>Optimizing large-scale industrial reactor performance through process modelling and digital twins.</p>
                </div>
                <div class="capability-card">
                    <h3>Waste Stream Management</h3>
                    <p>Closed-loop water and chemical recycling solutions for complex industrial facilities.</p>
                </div>
                <div class="capability-card">
                    <h3>HSSE Compliance</h3>
                    <p>Integrating high-level safety and environmental standards into industrial plant design.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
