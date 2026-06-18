@extends('layouts.app')

@section('title', 'Oil & Gas | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/markets.css') }}">
@endpush

@section('content')
    <section class="markets-hero">
        <div class="markets-hero__bg" style="background-image: url('{{ asset('images/market1.jpg') }}');"></div>
        <div class="markets-hero__inner">
            <p class="markets-hero__eyebrow">Our Markets</p>
            <h1 class="markets-hero__title">Optimizing Global Oil &amp; Gas Assets</h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="page-width">
            <div class="market-overview" style="margin-bottom: 6rem;">
                <div class="market-overview__content">
                    <h2>Engineering Excellence in Upstream &amp; Midstream</h2>
                    <p>We provide authoritative process engineering and strategic support for offshore and onshore oil &amp; gas facilities. Our expertise in separation systems and asset optimization helps operators drive efficiency while reducing operational risk.</p>
                    <p>With a focus on long-term value, we assist clients in navigating the complex technical challenges of modern production, from initial concept engineering to facility life extensions.</p>
                </div>
                <div class="market-stats">
                    <div class="market-stat-card">
                        <span class="market-stat-card__val">20+</span>
                        <span class="market-stat-card__label">Years of Experience</span>
                    </div>
                    <div class="market-stat-card">
                        <span class="market-stat-card__val">15%</span>
                        <span class="market-stat-card__label">Avg. Separation Efficiency Gain</span>
                    </div>
                </div>
            </div>

            <div class="capability-grid">
                <div class="capability-card">
                    <h3>Produced-Water Treatment</h3>
                    <p>Optimizing multi-phase separation and hydrocyclone performance for offshore facility compliance.</p>
                </div>
                <div class="capability-card">
                    <h3>Subsea Engineering</h3>
                    <p>Integrated technical support for subsea production systems and host facility integration.</p>
                </div>
                <div class="capability-card">
                    <h3>Brownfield Optimization</h3>
                    <p>Maximizing the value of existing assets through targeted debottlenecking and life extension studies.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
