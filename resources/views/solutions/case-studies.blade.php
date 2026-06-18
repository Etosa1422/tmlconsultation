@extends('layouts.app')

@section('title', 'Case Studies | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/solutions.css') }}">
@endpush

@section('content')
    <section class="solutions-hero">
        <div class="solutions-hero__bg" style="background-image: url('{{ asset('images/market6.jpg') }}'); opacity: 0.3;"></div>
        <div class="solutions-hero__overlay" style="position: absolute; inset: 0; background: linear-gradient(90deg, var(--tml-navy) 0%, transparent 60%);"></div>
        <div class="solutions-hero__inner">
            <p class="solutions-hero__eyebrow">Our Solutions</p>
            <h1 class="solutions-hero__title">Our Impact in Action</h1>
        </div>
    </section>

    <section class="section-padding" style="padding: 6rem 0;">
        <div class="page-width">
            <div class="section-intro">
                <h2 class="section-intro__title">Proven results across global energy sectors.</h2>
                <p class="section-intro__desc">Each case study highlights our approach to solving complex engineering and strategic challenges, delivering measurable value for our clients.</p>
            </div>

            <div class="solutions-grid">
                <div class="solution-card">
                    <div class="solution-card__title">Offshore Separation Optimization</div>
                    <p class="solution-card__desc">Reduced water-cut by 15% through hydrocyclone performance analysis and CFD modelling for a North Sea operator.</p>
                </div>
                <div class="solution-card">
                    <div class="solution-card__title">Refinery Decarbonisation Roadmap</div>
                    <p class="solution-card__desc">Developed a comprehensive 2030 net-zero strategy for an industrial facility in West Africa.</p>
                </div>
                <div class="solution-card">
                    <div class="solution-card__title">Global Digital Twin Integration</div>
                    <p class="solution-card__desc">Deployed a real-time monitorring platform across multiple assets, reducing maintenance downtime by 20%.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
