@extends('layouts.app')

@section('title', 'Careers | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
@endpush

@section('content')
    <section class="subpage-hero">
        <div class="subpage-hero__bg" style="background-image: url('{{ asset('images/careers.jpg') }}'); opacity: 0.4;"></div>
        <div class="subpage-hero__overlay"></div>
        <div class="subpage-hero__inner">
            <p class="subpage-hero__eyebrow">Join TML</p>
            <h1 class="subpage-hero__title">Building the Future of Energy</h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="page-width">
            <div class="section-intro">
                <h2 class="section-intro__title">Real challenges demand real experts.</h2>
                <p class="section-intro__desc">At TML Consulting Group, we are looking for passionate engineers and consultants who want to make a meaningful impact in the global energy transition. We offer a collaborative environment where technical precision and sustainable innovation are at the heart of everything we do.</p>
            </div>

            <div class="content-grid" style="margin-bottom: 6rem;">
                <div class="text-block">
                    <h3>Why Join Us?</h3>
                    <p>We provide opportunities to work on some of the world's most complex industrial assets. From optimization projects in the North Sea to energy transition initiatives in West Africa, our people are at the forefront of engineering excellence.</p>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 0.75rem; display: flex; gap: 0.75rem; align-items: center;">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="var(--tml-gold)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Global Project Exposure</span>
                        </li>
                        <li style="margin-bottom: 0.75rem; display: flex; gap: 0.75rem; align-items: center;">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="var(--tml-gold)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Continuous Learning & Development</span>
                        </li>
                        <li style="margin-bottom: 0.75rem; display: flex; gap: 0.75rem; align-items: center;">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="var(--tml-gold)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Commitment to Safety and Quality</span>
                        </li>
                    </ul>
                </div>
                <div class="image-wrapper">
                    <img src="{{ asset('images/expertise3.jpg') }}" alt="Our Culture">
                </div>
            </div>

            {{-- JOB LISTINGS SECTION --}}
            <div id="openings" class="job-section">
                <h3 class="section-intro__title" style="font-size: 1.75rem; margin-bottom: 2.5rem;">Current Openings</h3>
                
                <div class="job-listings">
                    @forelse($jobs ?? [] as $job)
                        <div class="job-card">
                            <div class="job-card__info">
                                <h4>{{ $job->title }}</h4>
                                <div class="job-card__meta">
                                    <span class="job-card__meta-item">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                        {{ $job->location }}
                                    </span>
                                    <span class="job-card__meta-item">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                                        {{ $job->type ?? 'Full-time' }}
                                    </span>
                                </div>
                            </div>
                            <a href="{{ route('careers.show', $job->id) }}" class="btn-apply">View Details</a>
                        </div>
                    @empty
                        {{-- Placeholder for when no jobs are passed from backend --}}
                        <div class="job-card" style="justify-content: center; padding: 4rem; text-align: center; border-style: dashed; border-width: 2px;">
                            <p style="color: #777; font-size: 1.1rem;">There are currently no open positions. Please check back later or send your CV to <a href="mailto:careers@tml-consulting.com" style="color: var(--tml-navy); font-weight: 600;">careers@tml-consulting.com</a></p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    {{-- TALENT POOL --}}
    <section class="section-padding" style="background: var(--tml-light);">
        <div class="page-width" style="text-align: center;">
            <h2 class="section-intro__title" style="margin-bottom: 1.5rem;">Don't see a fit?</h2>
            <p style="max-width: 700px; margin: 0 auto 2.5rem; color: #555;">We are always looking for exceptional talent in process engineering, project management, and sustainability consultancy. Join our talent pool and we'll contact you when a matching opportunity arises.</p>
            <a href="/contact" class="btn-navy" style="display: inline-block;">Send your CV</a>
        </div>
    </section>
@endsection
