@extends('layouts.app')

@section('title', 'Our Team | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
@endpush

@section('content')
    <section class="subpage-hero">
        <div class="subpage-hero__bg" style="background-image: url('{{ asset('images/hero1.jpg') }}'); opacity: 0.3;"></div>
        <div class="subpage-hero__overlay"></div>
        <div class="subpage-hero__inner">
            <p class="subpage-hero__eyebrow">Our Company</p>
            <h1 class="subpage-hero__title">Our Team</h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="page-width">
            <div class="section-intro">
                <h2 class="section-intro__title">A diverse group of world-class engineering specialists.</h2>
                <p class="section-intro__desc">Our team is composed of seasoned professionals with decades of experience in the energy and industrial sectors. Together, we solve complex challenges through collaboration and technical innovation.</p>
            </div>

            <div class="team-grid">
                {{-- CEO --}}
                <div class="team-member">
                    <div class="team-member__img-box">
                        <img src="{{ asset('images/ceo.avif') }}" alt="Tariboladei Egai - CEO">
                    </div>
                    <div class="team-member__info">
                        <h3 class="team-member__name">Tariboladei Egai</h3>
                        <p class="team-member__role">CEO &amp; Principal Process Engineer</p>
                        <p style="font-size: 0.9rem; color: #666; line-height: 1.6;">Tariboladei is an accomplished Process Engineer with over 20 years of experience optimizing oil and gas facilities, with a focus on sustainable separation technologies.</p>
                    </div>
                </div>

                {{-- Member 2 --}}
                <div class="team-member">
                    <div class="team-member__img-box">
                        <img src="{{ asset('images/expertise2.jpg') }}" alt="Technical Director">
                    </div>
                    <div class="team-member__info">
                        <h3 class="team-member__name">Dr. Sarah Thompson</h3>
                        <p class="team-member__role">Technical Director</p>
                        <p style="font-size: 0.9rem; color: #666; line-height: 1.6;">Dr. Thompson specializes in CFD analysis and digital modelling for large-scale industrial projects across the globe.</p>
                    </div>
                </div>

                {{-- Member 3 --}}
                <div class="team-member">
                    <div class="team-member__img-box">
                        <img src="{{ asset('images/expertise3.jpg') }}" alt="Operations Director">
                    </div>
                    <div class="team-member__info">
                        <h3 class="team-member__name">James Miller</h3>
                        <p class="team-member__role">Operations Director</p>
                        <p style="font-size: 0.9rem; color: #666; line-height: 1.6;">James oversees our global project delivery, ensuring that every engagement meets our high standards for safety and quality.</p>
                    </div>
                </div>

                {{-- Member 4 --}}
                <div class="team-member">
                    <div class="team-member__img-box">
                        <img src="{{ asset('images/expertise4.jpg') }}" alt="Sustainability Lead">
                    </div>
                    <div class="team-member__info">
                        <h3 class="team-member__name">Elena Rodriguez</h3>
                        <p class="team-member__role">Sustainability & Transition Lead</p>
                        <p style="font-size: 0.9rem; color: #666; line-height: 1.6;">Elena leads our energy transition initiatives, helping clients implement carbon reduction protocols and renewable energy sources.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- JOIN US --}}
    <section class="section-padding" style="background: var(--tml-navy); color: #fff; text-align: center;">
        <div class="page-width">
            <p class="subpage-hero__eyebrow" style="margin-bottom: 2rem;">Work With Us</p>
            <h2 class="section-intro__title" style="color: #fff; margin-bottom: 2rem;">Ready to solve industry's toughest challenges?</h2>
            <p style="max-width: 600px; margin: 0 auto 3rem; color: rgba(255,255,255,0.7);">We are always looking for talented engineers and consultants to join our growing global team.</p>
            <a href="/careers" class="btn-contact" style="display: inline-block; background: var(--tml-gold);">Explore Careers</a>
        </div>
    </section>
@endsection
