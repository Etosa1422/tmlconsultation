@extends('layouts.app')

@section('title', 'Decarbonisation | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/solutions.css') }}">
@endpush

@section('content')
    <section class="solutions-hero">
        <div class="solutions-hero__bg" style="background-image: url('{{ asset('images/market2.jpg') }}');"></div>
        <div class="solutions-hero__overlay" style="position: absolute; inset: 0; background: linear-gradient(90deg, var(--tml-navy) 0%, transparent 60%);"></div>
        <div class="solutions-hero__inner">
            <p class="solutions-hero__eyebrow">Our Solutions</p>
            <h1 class="solutions-hero__title">Pioneering Sustainable Energy Solutions</h1>
        </div>
    </section>

    <section class="section-padding" style="padding: 6rem 0;">
        <div class="page-width">
            <div class="service-block">
                <div class="service-block__image">
                    <img src="{{ asset('images/hero1.jpg') }}" alt="Sustainable Energy">
                </div>
                <div class="service-block__content">
                    <h3>Leading the Transition to a Carbon-Neutral Future</h3>
                    <p>We help our clients translate sustainability goals into actionable engineering projects. Our decarbonisation strategies are both impactful and technically viable.</p>
                    <ul class="service-list">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Carbon Capture, Utilization &amp; Storage (CCUS) Design</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Emissions Monitoring &amp; Reduction Protocols</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Integration of Renewable Power in Industrial Facilities</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Energy Efficiency Audits &amp; Optimization Studies</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
