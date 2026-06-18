@extends('layouts.app')

@section('title', 'About Us | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
@endpush

@section('content')
    {{-- SUBPAGE HERO --}}
    <section class="subpage-hero">
        <div class="subpage-hero__bg" style="background-image: url('{{ asset('images/hero2.jpg') }}');"></div>
        <div class="subpage-hero__overlay"></div>
        <div class="subpage-hero__inner reveal">
            <p class="subpage-hero__eyebrow">About Us</p>
            <h1 class="subpage-hero__title">About TML Consulting Group</h1>
        </div>
    </section>

    {{-- INTRODUCTION --}}
    <section class="section-padding">
        <div class="page-width">
            <div class="section-intro reveal">
                <h2 class="section-intro__title">Advancing industry through technical precision and sustainable innovation.</h2>
                <p class="section-intro__desc">TML Consulting Group is a leading provider of process engineering and strategic consulting services for the global energy sector.</p>
            </div>

            <div class="content-grid reveal">
                <div class="image-wrapper reveal--left">
                    <img src="{{ asset('images/expertise1.jpg') }}" alt="Engineering Excellence">
                </div>
                <div class="text-block reveal--right">
                    <h3>Technical Excellence</h3>
                    <p>With over two decades of experience, we bring a deep understanding of fluid dynamics, separation systems, and asset lifecycle management to every project. Our engineers are dedicated to solving the most challenging technical problems with data-driven insights.</p>
                    <h3>Global Operations</h3>
                    <p>Operating across multiple continents, we provide localized support backed by global expertise. Our scalable approach allows us to deliver high-quality outcomes for both minor optimizations and large-scale greenfield developments.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- OUR VALUES --}}
    <section class="section-padding" style="background: var(--tml-light);">
        <div class="page-width">
            <div class="section-intro reveal" style="text-align: center; margin: 0 auto 4rem;">
                <h2 class="section-intro__title">Our Core Values</h2>
                <p class="section-intro__desc">These principles guide our interactions with clients, partners, and our community, ensuring long-term success for all stakeholders.</p>
            </div>

            <div class="values-grid reveal-stagger">
                <div class="value-card">
                    <div class="value-card__icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 class="value-card__title">Safety First</h3>
                    <p class="value-card__desc">We prioritize the health and safety of our people and the integrity of the environment in everything we do.</p>
                </div>

                <div class="value-card">
                    <div class="value-card__icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <h3 class="value-card__title">Integrity</h3>
                    <p class="value-card__desc">We maintain the highest ethical standards, fostering trust through transparent communication and reliable delivery.</p>
                </div>

                <div class="value-card">
                    <div class="value-card__icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                    </div>
                    <h3 class="value-card__title">Innovation</h3>
                    <p class="value-card__desc">We continuously challenge the status quo, integrating new technologies to drive efficiency and sustainability.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- SUSTAINABILITY COMMITMENT --}}
    <section class="section-padding">
        <div class="page-width">
            <div class="content-grid content-grid--reverse">
                <div class="image-wrapper">
                    <img src="{{ asset('images/market2.jpg') }}" alt="Sustainability">
                </div>
                <div class="text-block">
                    <h3>Commitment to Sustainability</h3>
                    <p>As the energy landscape evolves, TML Consulting Group is at the forefront of the energy transition. We help our clients reduce their carbon footprint through decarbonisation strategies, energy efficiency audits, and the integration of renewable energy sources.</p>
                    <p>Our focus is on creating long-term value that balances industrial productivity with environmental stewardship, ensuring a viable future for generations to come.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
