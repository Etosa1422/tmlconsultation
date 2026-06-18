@extends('layouts.app')

@section('title', 'Investors | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
@endpush

@section('content')
    <section class="subpage-hero">
        <div class="subpage-hero__bg" style="background-image: url('{{ asset('images/hero2.jpg') }}'); opacity: 0.2;"></div>
        <div class="subpage-hero__overlay"></div>
        <div class="subpage-hero__inner">
            <p class="subpage-hero__eyebrow">Financial Performance</p>
            <h1 class="subpage-hero__title">Investor Relations</h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="page-width">
            <div class="section-intro">
                <h2 class="section-intro__title">Transparent and Consistent Value Creation.</h2>
                <p class="section-intro__desc">We are committed to delivering long-term shareholder value through disciplined capital allocation and operational excellence in our global energy markets.</p>
            </div>

            <div class="values-grid">
                <div class="value-card">
                    <h3 class="value-card__title">Financial Highlights</h3>
                    <p class="value-card__desc">Review our latest quarterly results and annual performance records.</p>
                    <a href="#" class="btn-more" style="color:var(--tml-gold); font-weight:700;">View Documents &rarr;</a>
                </div>
                <div class="value-card">
                    <h3 class="value-card__title">Shareholder Services</h3>
                    <p class="value-card__desc">Information on dividend payments, stock listings, and registrar contacts.</p>
                </div>
                <div class="value-card">
                    <h3 class="value-card__title">Governance</h3>
                    <p class="value-card__desc">Details on our board of directors, management team, and corporate policies.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
