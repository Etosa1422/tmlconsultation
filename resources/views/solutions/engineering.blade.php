@extends('layouts.app')

@section('title', 'Engineering Services | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/solutions.css') }}">
@endpush

@section('content')
    <section class="solutions-hero">
        <div class="solutions-hero__bg" style="background-image: url('{{ asset('images/hero2.jpg') }}');"></div>
        <div class="solutions-hero__overlay" style="position: absolute; inset: 0; background: linear-gradient(90deg, var(--tml-navy) 0%, transparent 60%);"></div>
        <div class="solutions-hero__inner">
            <p class="solutions-hero__eyebrow">Our Solutions</p>
            <h1 class="solutions-hero__title">Precision Engineering for Energy Assets</h1>
        </div>
    </section>

    <section class="section-padding" style="padding: 6rem 0;">
        <div class="page-width">
            <div class="service-block">
                <div class="service-block__image">
                    <img src="{{ asset('images/digital.jpg') }}" alt="Advanced Engineering">
                </div>
                <div class="service-block__content">
                    <h3>Technical Excellence Across Disciplines</h3>
                    <p>We deliver high-fidelity engineering solutions for both greenfield and brownfield projects. Our focus is on technical precision and long-term asset performance.</p>
                    <ul class="service-list">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Front-End Engineering Design (FEED)</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Process &amp; Separation Systems Optimization</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Computational Fluid Dynamics (CFD) Analysis</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Mechanical Design &amp; Structural Integrity</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
