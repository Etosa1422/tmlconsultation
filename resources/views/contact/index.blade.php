@extends('layouts.app')

@section('title', 'Contact Us | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    {{-- SUBPAGE HERO --}}
    <section class="subpage-hero">
        <div class="subpage-hero__bg" style="background-image: url('{{ asset('images/market4.jpg') }}'); opacity: 0.2;"></div>
        <div class="subpage-hero__overlay"></div>
        <div class="subpage-hero__inner">
            <p class="subpage-hero__eyebrow">Get in Touch</p>
            <h1 class="subpage-hero__title">How can we support your energy project?</h1>
        </div>
    </section>

    <section class="section-padding" style="background: #fff; padding: 6rem 0;">
        <div class="page-width">
            <div class="contact-layout">
                
                {{-- Info Column --}}
                <div class="contact-info">
                    <h2>Reach our global experts</h2>
                    <p>Whether you're looking for technical advice, project delivery support, or wanting to discuss industrial assets, our teams are ready to assist you across any of our global locations.</p>
                    
                    <div class="contact-details">
                        <div class="detail-item">
                            <div class="detail-item__icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div class="detail-item__content">
                                <h4>Main Office</h4>
                                <span>89 Craigievar Crescent, Aberdeen AB12 7DQ, UK</span>
                            </div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-item__icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <div class="detail-item__content">
                                <h4>Email Us</h4>
                                <a href="mailto:contact@tmlgroup.com">contact@tmlgroup.com</a>
                            </div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-item__icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            </div>
                            <div class="detail-item__content">
                                <h4>Call Our Team</h4>
                                <a href="tel:+441224000000">+44 (0) 1224 000000</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Form Column --}}
                <div class="contact-form-wrapper">
                    @if(session('success'))
                        <div class="status-msg">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control" required placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control" required placeholder="email@company.com">
                        </div>
                        <div class="form-group">
                            <label for="service">Interested In</label>
                            <select id="service" name="service" class="form-control">
                                <option value="">Select a service…</option>
                                <option value="advisory">Advisory & Strategy</option>
                                <option value="engineering">Project Engineering</option>
                                <option value="delivery">Project Delivery</option>
                                <option value="assets">Asset Management</option>
                                <option value="decarbonisation">Decarbonisation</option>
                                <option value="digital">Digital Transformation</option>
                                <option value="other">General Inquiry</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">How can we help?</label>
                            <textarea id="message" name="message" class="form-control" placeholder="Share a few details about your project needs…"></textarea>
                        </div>
                        <button type="submit" class="btn-submit">Send Message</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    {{-- MAP PLACEHOLDER --}}
    <section class="section-padding" style="padding-top:0;">
        <div class="page-width">
            <div style="height:450px; background:var(--tml-light); display:flex; align-items:center; justify-content:center; border:1px solid #eee;">
                <div style="text-align:center;">
                    <svg viewBox="0 0 24 24" width="48" height="48" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--tml-gold); margin-bottom:1rem;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <h3 style="color:var(--tml-navy);">Global Locations Map</h3>
                    <p style="color:#666;">Integrated map visualization for our worldwide offices.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
