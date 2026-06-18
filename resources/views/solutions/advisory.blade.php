@extends('layouts.app')

@section('title', 'Advisory Services | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/solutions.css') }}">
@endpush

@section('content')
    <section class="solutions-hero">
        <div class="solutions-hero__bg" style="background-image: url('{{ asset('images/market4.jpg') }}');"></div>
        <div class="solutions-hero__overlay" style="position: absolute; inset: 0; background: linear-gradient(90deg, var(--tml-navy) 0%, transparent 60%);"></div>
        <div class="solutions-hero__inner">
            <p class="solutions-hero__eyebrow">Our Solutions</p>
            <h1 class="solutions-hero__title">Strategic Advisory &amp; Concept Engineering</h1>
        </div>
    </section>

    <section class="section-padding" style="padding: 6rem 0;">
        <div class="page-width">
            <div class="service-block">
                <div class="service-block__image">
                    <img src="{{ asset('images/market1.jpg') }}" alt="Concept Engineering">
                </div>
                <div class="service-block__content">
                    <h3>Data-Driven Insights for Global Assets</h3>
                    <p>Our advisory services provide the technical and strategic foundation for successful projects. We help clients navigate complex technical landscapes and regulatory environments with confidence.</p>
                    <ul class="service-list">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Feasibility Studies &amp; Concept EVALUATION</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Technical Due Diligence &amp; Risk Assessment</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Energy Transition Strategic Roadmaps</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Regulatory Compliance &amp; HSSE Planning</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
