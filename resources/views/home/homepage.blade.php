@extends('layouts.app')

@section('title', 'Global Engineering & Consulting | TML Consulting Group')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endpush

@section('content')
    {{-- ── HERO BANNER ── --}}
    <section class="hero" aria-labelledby="hero-title">
        <div class="hero__carousel">
            <div class="hero__slide active" style="background-image: url('{{ asset('images/hero1.jpg') }}');" role="img" aria-label="Offshore wind turbines"></div>
            <div class="hero__slide" style="background-image: url('{{ asset('images/hero2.jpg') }}');" role="img" aria-label="Modern energy refinery"></div>
            <div class="hero__slide" style="background-image: url('{{ asset('images/hero3.jpg') }}');" role="img" aria-label="Solar panels at sunset"></div>
        </div>
        
        <div class="hero__overlay"></div>

        <div class="hero__inner">
            <div class="hero__content reveal">
                <p class="hero__eyebrow">TML CONSULTING INTERNATIONAL</p>
                <h1 class="hero__title" id="hero-title">
                    ENGINEERING A <br><span>SUSTAINABLE ENERGY FUTURE</span>
                </h1>
                <p class="hero__desc">We provide authoritative process engineering support for oil and gas facilities. Specializing in separation systems and hydrocyclone optimization to drive efficiency through technical precision.</p>
                
                <div class="hero__btns">
                    <a href="/contact" class="hero__cta">
                        Contact Us
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8-8-8z"/></svg>
                    </a>
                    <a href="/solutions" class="hero__cta hero__cta--secondary">
                        Get Solutions
                        <svg viewBox="0 0 24 24" aria-hidden="true" style="fill:none;stroke:#fff;stroke-width:2;"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8-8-8z"/></svg>
                    </a>
                </div>

                {{-- Carousel Dots --}}
                <div class="carousel-dots" style="position: absolute; bottom: 2rem; left: 1.5rem; display: flex; gap: .75rem; z-index: 10;">
                    <button class="hero__dot active" aria-label="Slide 1"></button>
                    <button class="hero__dot" aria-label="Slide 2"></button>
                    <button class="hero__dot" aria-label="Slide 3"></button>
                </div>
            </div>

            {{-- Hero Search Sidebar --}}
            <aside class="hero__search reveal reveal--right" aria-label="Search and resources">
                <h2>Quick Search</h2>
                <form action="/search" class="search-form">
                    <input type="text" name="q" placeholder="What are you looking for?" aria-label="Search query">
                    <button type="submit" aria-label="Run search">
                        <svg viewBox="0 0 512 512"><path d="M505.7 475.6l-145.6-145.6C388.2 295.1 405.2 250.9 405.2 202.7 405.2 90.9 314.3 0 202.7 0S0 90.9 0 202.7s90.9 202.7 202.7 202.7c48.2 0 92.5-17 127.3-45.2l145.6 145.6c4.2 4.2 9.6 6.2 15.1 6.2s10.9-2.1 15.1-6.2c8.3-8.3 8.3-21.8-.1-30.2zM42.7 202.7c0-88.2 71.8-160 160-160s160 71.8 160 160-71.8 160-160 160-160-71.8-160-160z"/></svg>
                    </button>
                </form>

                <h3>Trending Areas</h3>
                <div class="search-tags">
                    <a href="/solutions/decarbonisation" class="search-tag">Decarbonisation</a>
                    <a href="/markets/hydrogen" class="search-tag">Hydrogen Economy</a>
                    <a href="/solutions/digitalisation" class="search-tag">Digital Assets</a>
                    <a href="/solutions/engineering" class="search-tag">Front-End Engineering</a>
                </div>
            </aside>
        </div>
    </section>

    {{-- ── CORE EXPERTISE ── --}}
    <section class="expertise-section" aria-labelledby="expertise-header">
        <div class="expertise-section__inner">
            <h2 id="expertise-header" class="section-title reveal" style="margin-bottom: 3rem;">Core Expertise</h2>
            <div class="expertise-grid reveal-stagger">
                {{-- Expertise Card 1 --}}
                <div class="expertise-card">
                    <img src="{{ asset('images/market4.jpg') }}" alt="Feasibility" class="expertise-card__img">
                    <div class="expertise-card__content">
                        <span class="expertise-card__num">01. ADVISORY</span>
                        <h3 class="expertise-card__title">Feasibility & Concept Engineering</h3>
                        <p class="expertise-card__desc">Delivering data-driven insights to evaluate technical viability and optimize initial asset designs for global projects.</p>
                    </div>
                </div>
                {{-- Expertise Card 2 --}}
                <div class="expertise-card">
                    <img src="{{ asset('images/market1.jpg') }}" alt="Process" class="expertise-card__img">
                    <div class="expertise-card__content">
                        <span class="expertise-card__num">02. PERFORMANCE</span>
                        <h3 class="expertise-card__title">Process System Optimization</h3>
                        <h4 class="expertise-card__title" style="font-size: .95rem; font-weight: 500; font-style: italic; color: #777;">Process Engineering Specialists</h4>
                        <p class="expertise-card__desc">Specializing in the optimization of multi-phase separation systems and offshore produced-water treatment facilities.</p>
                    </div>
                </div>
                {{-- Expertise Card 3 --}}
                <div class="expertise-card">
                    <img src="{{ asset('images/digital.jpg') }}" alt="CFD" class="expertise-card__img">
                    <div class="expertise-card__content">
                        <span class="expertise-card__num">03. TECHNOLOGY</span>
                        <h3 class="expertise-card__title">CFD & Digital Modelling</h3>
                        <p class="expertise-card__desc">Utilizing Computational Fluid Dynamics to analyze equipment performance and predict maintenance requirements with precision.</p>
                    </div>
                </div>
                {{-- Expertise Card 4 --}}
                <div class="expertise-card">
                    <img src="{{ asset('images/market2.jpg') }}" alt="Energy" class="expertise-card__img">
                    <div class="expertise-card__content">
                        <span class="expertise-card__num">04. TRANSITION</span>
                        <h3 class="expertise-card__title">Energy Transition & Decarbonisation</h3>
                        <p class="expertise-card__desc">Leading the transition to sustainable operations through carbon reduction protocols and renewable energy integration.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── TECHNICAL SOLUTIONS ── --}}
    <section class="tech-solutions-section" aria-labelledby="tech-title">
        <div class="tech-solutions-section__inner">
            <div class="tech-solutions__header reveal">
                <span class="section-eyebrow">Driving Operational Excellence</span>
                <h2 id="tech-title" class="section-title">TECHNICAL SOLUTIONS</h2>
                <p class="tech-solutions__intro">Driving operational excellence through precision engineering and sustainable infrastructure for the global energy sector.</p>
            </div>

            <div class="tech-grid reveal-stagger">
                <div class="tech-card">
                    <div class="tech-card__img-wrapper">
                        <img src="{{ asset('images/market1.jpg') }}" alt="Separation Systems" class="tech-card__img">
                        <div class="tech-card__overlay-gradient"></div>
                    </div>
                    <div class="tech-card__content">
                        <h3 class="tech-card__title">Separation Systems</h3>
                        <p class="tech-card__desc">Advanced engineering support for multi-phase separation systems, designed to enhance facility throughput and separation efficiency.</p>
                    </div>
                </div>

                <div class="tech-card">
                    <div class="tech-card__img-wrapper">
                        <img src="{{ asset('images/market5.jpg') }}" alt="Water Management" class="tech-card__img">
                        <div class="tech-card__overlay-gradient"></div>
                    </div>
                    <div class="tech-card__content">
                        <h3 class="tech-card__title">Produced-Water Management</h3>
                        <p class="tech-card__desc">Holistic water treatment strategies optimized for regulatory compliance and environmental stewardship in complex energy facilities.</p>
                    </div>
                </div>

                <div class="tech-card">
                    <div class="tech-card__img-wrapper">
                        <img src="{{ asset('images/market3.jpg') }}" alt="Hydrocyclone" class="tech-card__img">
                        <div class="tech-card__overlay-gradient"></div>
                    </div>
                    <div class="tech-card__content">
                        <h3 class="tech-card__title">Hydrocyclone Optimization</h3>
                        <p class="tech-card__desc">Specialized performance analysis and optimization protocols to maximize the lifetime and separation performance of cyclone equipment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── MARKETS HEADER ── --}}
    <section class="markets-intro reveal" aria-labelledby="markets-title">
        <div class="markets-intro__inner">
            <p class="section-eyebrow">We operate across <a href="/markets">global energy markets</a></p>
            <h2 class="section-title" id="markets-title">We design, optimise and decarbonise industrial assets across a range of markets.</h2>
        </div>
    </section>

    {{-- ── MARKET CARDS GRID ── --}}
    <section class="markets-grid-section">
        <div class="markets-grid-section__inner">
            <div class="markets-grid reveal-stagger">
                {{-- Market Card 1 - Oil & Gas --}}
                <div class="market-card mc--oilgas" role="link" aria-label="Oil and Gas solutions" onclick="location.href='/markets/oil-and-gas'">
                    <div class="market-card__bg"></div>
                    <div class="market-card__overlay"></div>
                    <div class="market-card__content">
                        <span class="market-card__title">Oil &amp; Gas</span>
                        <span class="market-card__arrow">&rarr;</span>
                    </div>
                </div>
                {{-- Market Card 2 - Carbon Capture --}}
                <div class="market-card mc--carbon" role="link" aria-label="Carbon Capture solutions" onclick="location.href='/markets/carbon-capture'">
                    <div class="market-card__bg"></div>
                    <div class="market-card__overlay"></div>
                    <div class="market-card__content">
                        <span class="market-card__title">Carbon Capture</span>
                        <span class="market-card__arrow">&rarr;</span>
                    </div>
                </div>
                {{-- Market Card 3 - Hydrogen --}}
                <div class="market-card mc--hydrogen" role="link" aria-label="Hydrogen solutions" onclick="location.href='/markets/hydrogen'">
                    <div class="market-card__bg"></div>
                    <div class="market-card__overlay"></div>
                    <div class="market-card__content">
                        <span class="market-card__title">Hydrogen</span>
                        <span class="market-card__arrow">&rarr;</span>
                    </div>
                </div>
                {{-- Market Card 4 - Power --}}
                <div class="market-card mc--power" role="link" aria-label="Power and Utilities solutions" onclick="location.href='/markets/power'">
                    <div class="market-card__bg"></div>
                    <div class="market-card__overlay"></div>
                    <div class="market-card__content">
                        <span class="market-card__title">Power</span>
                        <span class="market-card__arrow">&rarr;</span>
                    </div>
                </div>
                {{-- Market Card 5 - Renewables --}}
                <div class="market-card mc--renewables" role="link" aria-label="Renewable energy solutions" onclick="location.href='/markets/renewables'">
                    <div class="market-card__bg"></div>
                    <div class="market-card__overlay"></div>
                    <div class="market-card__content">
                        <span class="market-card__title">Renewables</span>
                        <span class="market-card__arrow">&rarr;</span>
                    </div>
                </div>
                {{-- Market Card 6 - Chemicals --}}
                <div class="market-card mc--chemicals" role="link" aria-label="Chemical plant solutions" onclick="location.href='/markets/chemicals'">
                    <div class="market-card__bg"></div>
                    <div class="market-card__overlay"></div>
                    <div class="market-card__content">
                        <span class="market-card__title">Chemicals</span>
                        <span class="market-card__arrow">&rarr;</span>
                    </div>
                </div>
                {{-- Market Card 7 - Life Sciences --}}
                <div class="market-card mc--lifesci" role="link" aria-label="Life sciences sector solutions" onclick="location.href='/markets/life-sciences'">
                    <div class="market-card__bg"></div>
                    <div class="market-card__overlay"></div>
                    <div class="market-card__content">
                        <span class="market-card__title">Life Sciences</span>
                        <span class="market-card__arrow">&rarr;</span>
                    </div>
                </div>
                {{-- Market Card 8 - Mining --}}
                <div class="market-card mc--mining" role="link" aria-label="Mining and Minerals solutions" onclick="location.href='/markets/mining'">
                    <div class="market-card__bg"></div>
                    <div class="market-card__overlay"></div>
                    <div class="market-card__content">
                        <span class="market-card__title">Mining</span>
                        <span class="market-card__arrow">&rarr;</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── DIGITALIZATION BLOCK ── --}}
    <section class="feature-block reveal" aria-labelledby="digital-title">
        <div class="feature-block__inner">
            <div class="feature-block__grid">
                <div class="feature-block__image digital-img" role="img" aria-label="Digital twins and simulation"></div>
                <div class="feature-block__content">
                    <p class="feature-block__eyebrow">Digital Excellence</p>
                    <h2 class="feature-block__title" id="digital-title">Optimising asset lifecycle through <strong>Digital Twins &amp; Analytics.</strong></h2>
                    <p class="feature-block__desc">We integrate advanced simulation and data analytics to provide a real-time perspective on asset health. Our digital solutions empower operators to identify bottlenecks, reduce downtime, and implement predictive maintenance strategies with absolute confidence.</p>
                    <a href="/solutions/digitalisation" class="btn-navy">Our Digital Solutions</a>
                </div>
            </div>
        </div>
    </section>

    {{-- ── STATS BAR ── --}}
    <section class="stats-bar reveal" aria-label="Key performance statistics">
        <div class="stats-bar__inner">
            <div class="stats-grid reveal-stagger">
                <div class="stat">
                    <div class="stat__number">2+</div>
                    <div class="stat__label">Countries where we operate</div>
                </div>
                <div class="stat">
                    <div class="stat__number">10+</div>
                    <div class="stat__label">Global engineering specialists</div>
                </div>
                <div class="stat">
                    <div class="stat__number">20+</div>
                    <div class="stat__label">Years of technical excellence</div>
                </div>
                <div class="stat">
                    <div class="stat__number">100%</div>
                    <div class="stat__label">Commitment to HSSE &amp; Quality</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── CAREERS BLOCK ── --}}
    <section class="feature-block reveal" aria-labelledby="careers-title" style="padding-top: 0;">
        <div class="feature-block__inner">
            <div class="feature-block__grid reverse">
                <div class="feature-block__image careers-img" role="img" aria-label="Engineering professional at work"></div>
                <div class="feature-block__content">
                    <p class="feature-block__eyebrow"><a href="/careers" style="color:inherit;">Careers</a></p>
                    <h2 class="feature-block__title" id="careers-title"><strong>Real challenges demand real experts.</strong></h2>
                    <p class="feature-block__desc">Our people solve complex problems in energy and industry. They work safely, sustainably and with measurable impact. If you want to contribute to projects that matter, where precision and long-term outcomes are fundamental, we want to hear from you.</p>
                    <a href="/careers" class="btn-navy">Explore careers with us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- ── MEET OUR CEO ── --}}
    <section class="ceo-section reveal" aria-labelledby="ceo-title">
        <div class="ceo-section__inner reveal">
            <div class="ceo-section__img-wrapper">
                <img src="{{ asset('images/ceo.avif') }}" alt="Tariboladei Egai - CEO" class="ceo-section__img">
            </div>
            <div class="ceo-section__content">
                <p class="ceo-section__eyebrow">Meet our CEO</p>
                <h2 class="ceo-section__title" id="ceo-title">Tariboladei Egai</h2>
                <p class="ceo-section__desc">Tariboladei Egai is an accomplished Process Engineer with over 20 years of experience optimizing oil and gas facilities. His leadership at TML Consulting International focuses on technical precision and pioneering sustainable separation technologies.</p>
                
                <ul class="ceo-section__list">
                    <li>Expertise in offshore Produced-Water Treatment and Separation Systems.</li>
                    <li>Specialist in Hydrocyclone performance optimization and CFD analysis.</li>
                    <li>Strategic lead for sustainable energy transition and carbon reduction protocols.</li>
                    <li>Proven track record in driving operational efficiency for global energy facilities.</li>
                </ul>

                <a href="/company/our-leaders" class="ceo-section__btn">
                    View Full CV
                    <svg viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8-8-8z"/></svg>
                </a>
            </div>
        </div>
    </section>
@endsection
