@extends('layouts.app')

@section('title', 'Our Offices | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
@endpush

@section('content')
    <section class="subpage-hero">
        <div class="subpage-hero__bg" style="background-image: url('{{ asset('images/hero3.jpg') }}'); opacity: 0.3;"></div>
        <div class="subpage-hero__overlay"></div>
        <div class="subpage-hero__inner">
            <p class="subpage-hero__eyebrow">Our Company</p>
            <h1 class="subpage-hero__title">Our Global Presence</h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="page-width">
            <div class="section-intro">
                <h2 class="section-intro__title">Supporting clients across the globe.</h2>
                <p class="section-intro__desc">TML Consulting Group operates strategically in key industrial hubs to provide on-the-ground support and global engineering excellence.</p>
            </div>

            <div class="office-card">
                <div class="image-wrapper office-card__map">
                    <img src="{{ asset('images/market6.jpg') }}" alt="London Office">
                </div>
                <div class="office-card__content">
                    <p class="team-member__role">Global Headquarters</p>
                    <h3>London, United Kingdom</h3>
                    <ul class="office-card__details">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <span>123 City Road, London, EC1V 2NX, United Kingdom</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <span>+44 (0) 20 7123 4567</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            <span>london@tml-consulting.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="office-card">
                <div class="image-wrapper office-card__map">
                    <img src="{{ asset('images/market1.jpg') }}" alt="Aberdeen Office">
                </div>
                <div class="office-card__content">
                    <p class="team-member__role">Regional Hub</p>
                    <h3>Lagos, Nigeria</h3>
                    <ul class="office-card__details">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <span>45 Admiralty Way, Lekki Phase 1, Lagos, Nigeria</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <span>+234 (0) 803 123 4567</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            <span>lagos@tml-consulting.com</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- CAREERS BLOCK REPLICATED OR SIMILAR --}}
    <section class="section-padding" style="background: var(--tml-light);">
        <div class="page-width">
            <div class="content-grid">
                <div class="text-block">
                    <h3>Join our Global Network</h3>
                    <p>We are constantly expanding our footprint and looking for experts to join us in new regions. Our global network enables us to deliver the highest quality engineering services wherever our clients need us.</p>
                    <a href="/careers" class="btn-navy" style="display: inline-block;">View Jobs</a>
                </div>
                <div class="image-wrapper">
                    <img src="{{ asset('images/careers.jpg') }}" alt="Global Careers">
                </div>
            </div>
        </div>
    </section>
@endsection
