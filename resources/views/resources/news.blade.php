@extends('layouts.app')

@section('title', 'Latest News | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/resources.css') }}">
@endpush

@section('content')
    <section class="subpage-hero">
        <div class="subpage-hero__bg" style="background-image: url('{{ asset('images/market6.jpg') }}'); opacity: 0.3;"></div>
        <div class="subpage-hero__overlay"></div>
        <div class="subpage-hero__inner">
            <p class="subpage-hero__eyebrow">Stay Updated</p>
            <h1 class="subpage-hero__title">Latest News &amp; Announcements</h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="page-width">
            <div class="section-intro">
                <h2 class="section-intro__title">TML Global Updates</h2>
                <p class="section-intro__desc">Key announcements, project milestones, and corporate developments from around the world.</p>
            </div>

            <div class="resources-grid">
                <div class="resource-card">
                    <div class="resource-card__image">
                        <img src="{{ asset('images/market1.jpg') }}" alt="News 1">
                    </div>
                    <div class="resource-card__content">
                        <span class="resource-card__meta">MARCH 27, 2026 | CORPORATE</span>
                        <h3 class="resource-card__title">TML Consulting Group Expands Operations in West Africa</h3>
                        <p class="resource-card__excerpt">Strategic new office opening in Lagos, Nigeria to support growwing energy infrastructure projects across the region.</p>
                        <a href="#" class="resource-card__link">Read Full Story &rarr;</a>
                    </div>
                </div>

                <div class="resource-card">
                    <div class="resource-card__image">
                        <img src="{{ asset('images/market2.jpg') }}" alt="News 2">
                    </div>
                    <div class="resource-card__content">
                        <span class="resource-card__meta">MARCH 15, 2026 | ENERGY TRANSITION</span>
                        <h3 class="resource-card__title">TML Partners with Global Energy Firm for Large-Scale CCUS Hub</h3>
                        <p class="resource-card__excerpt">New partnership to provide end-to-end engineering for a major carbon capture and storage feasibility study.</p>
                        <a href="#" class="resource-card__link">Read Full Story &rarr;</a>
                    </div>
                </div>

                <div class="resource-card">
                    <div class="resource-card__image">
                        <img src="{{ asset('images/market3.jpg') }}" alt="News 3">
                    </div>
                    <div class="resource-card__content">
                        <span class="resource-card__meta">MARCH 02, 2026 | SUSTAINABILITY</span>
                        <h3 class="resource-card__title">TML Achieves ISO 14001 Environmental Certification</h3>
                        <p class="resource-card__excerpt">Commitment to the highest international standards for environmental management systems across our global footprint.</p>
                        <a href="#" class="resource-card__link">Read Full Story &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
