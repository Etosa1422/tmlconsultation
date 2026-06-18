@extends('layouts.app')

@section('title', 'Project Delivery | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/solutions.css') }}">
@endpush

@section('content')
    <section class="solutions-hero">
        <div class="solutions-hero__bg" style="background-image: url('{{ asset('images/market5.jpg') }}');"></div>
        <div class="solutions-hero__overlay" style="position: absolute; inset: 0; background: linear-gradient(90deg, var(--tml-navy) 0%, transparent 60%);"></div>
        <div class="solutions-hero__inner">
            <p class="solutions-hero__eyebrow">Our Solutions</p>
            <h1 class="solutions-hero__title">Global Project Execution &amp; Delivery</h1>
        </div>
    </section>

    <section class="section-padding" style="padding: 6rem 0;">
        <div class="page-width">
            <div class="service-block">
                <div class="service-block__image">
                    <img src="{{ asset('images/market3.jpg') }}" alt="Project Management">
                </div>
                <div class="service-block__content">
                    <h3>Driving Outcomes from Planning to Execution</h3>
                    <p>Our project delivery teams ensure that every stage of the lifecycle is managed with precision. We minimize risk and ensure quality delivery on every project.</p>
                    <ul class="service-list">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Procurement &amp; Supply Chain Management</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Project Controls &amp; Scheduling Excellence</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Construction Management &amp; Supervision</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Commissioning &amp; Handover Strategies</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
