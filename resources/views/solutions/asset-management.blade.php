@extends('layouts.app')

@section('title', 'Asset Management | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/solutions.css') }}">
@endpush

@section('content')
    <section class="solutions-hero">
        <div class="solutions-hero__bg" style="background-image: url('{{ asset('images/market1.jpg') }}'); opacity: 0.3;"></div>
        <div class="solutions-hero__overlay" style="position: absolute; inset: 0; background: linear-gradient(90deg, var(--tml-navy) 0%, transparent 60%);"></div>
        <div class="solutions-hero__inner">
            <p class="solutions-hero__eyebrow">Our Solutions</p>
            <h1 class="solutions-hero__title">Maximizing Asset Reliability &amp; Performance</h1>
        </div>
    </section>

    <section class="section-padding" style="padding: 6rem 0;">
        <div class="page-width">
            <div class="service-block">
                <div class="service-block__image">
                    <img src="{{ asset('images/market6.jpg') }}" alt="Asset Performance">
                </div>
                <div class="service-block__content">
                    <h3>Operational Integrity &amp; Lifetime Optimization</h3>
                    <p>We provide long-term support for existing assets, ensuring they operate safely, efficiently, and at peak performance throughout their lifecycle.</p>
                    <ul class="service-list">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Maintenance Strategy &amp; Reliability Engineering</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Condition-Based Monitoring &amp; Predicitive Maintenance</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Brownfield Modification &amp; Lite Extension Studies</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Asset Performance Benchmarking &amp; Optimization</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
