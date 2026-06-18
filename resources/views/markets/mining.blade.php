@extends('layouts.app')

@section('title', 'Mining | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/markets.css') }}">
@endpush

@section('content')
    <section class="markets-hero">
        <div class="markets-hero__bg" style="background-image: url('{{ asset('images/market8.jpg') }}');"></div>
        <div class="markets-hero__inner">
            <p class="markets-hero__eyebrow">Our Markets</p>
            <h1 class="markets-hero__title">Optimizing Global Mining Operations</h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="page-width">
            <div class="market-overview" style="margin-bottom: 6rem;">
                <div class="market-overview__content">
                    <h2>Engineering for Essential Mineral Processing</h2>
                    <p>The global mining industry identifies and processes the minerals critical for modern technology and the energy transition. We provide engineering and strategic support for mining, beneficiation, and waste stream management.</p>
                    <p>Our focus is on maximizing mechanical reliability and process efficiency for large-capacity mineral processing facilities in challenging environments.</p>
                </div>
                <div class="market-stats">
                    <div class="market-stat-card">
                        <span class="market-stat-card__val">Mineral Process</span>
                        <span class="market-stat-card__label">Technical Excellence</span>
                    </div>
                </div>
            </div>

            <div class="capability-grid">
                <div class="capability-card">
                    <h3>Beneficiation Efficiency</h3>
                    <p>Optimizing large-scale separation and mineral processing circuits through process modelling and debottlenecking.</p>
                </div>
                <div class="capability-card">
                    <h3>Tailing Management</h3>
                    <p>Techncial advice on sustainable tailings storage and water recycling for large industrial mines.</p>
                </div>
                <div class="capability-card">
                    <h3>Mechanical Reliability</h3>
                    <p>Integrated maintenance and reliability engineering for high-capacity mineral handling equipment.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
