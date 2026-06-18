{{-- ══════════ SEARCH OVERLAY ══════════ --}}
<div class="search-overlay" id="searchOverlay" role="dialog" aria-modal="true" aria-label="Search">
    <div class="search-overlay__inner">
        <button class="search-overlay__close" id="searchClose" aria-label="Close search">
            Close
            <svg viewBox="0 0 329 329" aria-hidden="true"><path d="m194.8 164.8 128.2-128.2c8.3-8.3 8.3-21.8 0-30.2-8.3-8.3-21.8-8.3-30.2 0L164.6 134.6 36.4 6.4c-8.3-8.3-21.8-8.3-30.2 0-8.3 8.3-8.3 21.8 0 30.2L134.4 164.8 6.2 293c-8.3 8.3-8.3 21.8 0 30.2 4.2 4.2 9.6 6.2 15.1 6.2s10.9-2.1 15.1-6.2L164.6 195l128.2 128.2c4.2 4.2 9.6 6.2 15.1 6.2s10.9-2.1 15.1-6.2c8.3-8.3 8.3-21.8 0-30.2L194.8 164.8z"/></svg>
        </button>
        <form class="search-overlay__form" action="/search" role="search">
            <input class="search-overlay__input" type="search" name="query" placeholder="Search TML Consulting…" aria-label="Search" autocomplete="off">
            <button class="search-overlay__submit" type="submit" aria-label="Submit search">
                <svg viewBox="0 0 512 512" aria-hidden="true"><path d="M505.7 475.6l-145.6-145.6C388.2 295.1 405.2 250.9 405.2 202.7 405.2 90.9 314.3 0 202.7 0S0 90.9 0 202.7s90.9 202.7 202.7 202.7c48.2 0 92.5-17 127.3-45.2l145.6 145.6c4.2 4.2 9.6 6.2 15.1 6.2s10.9-2.1 15.1-6.2c8.3-8.3 8.3-21.8-.1-30.2zM42.7 202.7c0-88.2 71.8-160 160-160s160 71.8 160 160-71.8 160-160 160-160-71.8-160-160z"/></svg>
            </button>
        </form>
    </div>
</div>

{{-- ══════════ TOP BAR ══════════ --}}
<div class="topbar" role="banner">
    <div class="topbar__inner">
        <a href="{{ route('resources.news') }}" class="topbar__link">News</a>
        <a href="{{ route('resources.insights') }}" class="topbar__link">Insights</a>
        <a href="{{ route('company.sustainability') }}" class="topbar__link">Sustainability</a>
        <a href="{{ route('company.investors') }}" class="topbar__link">Investors</a>
    </div>
</div>

{{-- ══════════ SITE HEADER ══════════ --}}
<header class="site-header" role="banner">
    <div class="site-header__inner">
        {{-- Logo --}}
        <a href="/" class="site-header__logo" aria-label="TML Consulting Group Homepage" style="display:flex;align-items:center;gap:.75rem;text-decoration:none;">
            <img src="{{ asset('logo.png') }}" alt="TML Consulting Group" style="height:44px;width:auto;">
            <div class="site-header__logo-text">
                <span class="name">TML</span>
                <span class="sub">Consulting Group</span>
            </div>
        </a>

        {{-- Desktop Nav --}}
        <nav role="navigation" aria-label="Main menu">
            <ul class="main-nav" role="menubar">
                <li class="main-nav__item" role="none">
                    <button class="main-nav__btn" role="menuitem" aria-haspopup="true" aria-expanded="false">
                        Our Company
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>
                    </button>
                    <ul class="dropdown" role="menu">
                        <li><a href="{{ route('company.about_us') }}" role="menuitem">About Us</a></li>
                        <li><a href="{{ route('company.team') }}" role="menuitem">Our Team</a></li>
                        <li><a href="{{ route('company.offices') }}" role="menuitem">Our Offices</a></li>
                        <li><a href="{{ route('company.sustainability') }}" role="menuitem">Sustainability</a></li>
                        <li><a href="{{ route('company.investors') }}" role="menuitem">Investors</a></li>
                    </ul>
                </li>
                <li class="main-nav__item" role="none">
                    <a href="{{ route('company.careers') }}" class="main-nav__btn" role="menuitem">Careers</a>
                </li>
                <li class="main-nav__item" role="none">
                    <button class="main-nav__btn" role="menuitem" aria-haspopup="true" aria-expanded="false">
                        News &amp; Insights
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>
                    </button>
                    <ul class="dropdown" role="menu">
                        <li><a href="{{ route('resources.news') }}" role="menuitem">News</a></li>
                        <li><a href="{{ route('resources.insights') }}" role="menuitem">Technical Insights</a></li>
                    </ul>
                </li>
                <li class="main-nav__item" role="none">
                    <button class="main-nav__btn" role="menuitem" aria-haspopup="true" aria-expanded="false">
                        Our Solutions
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>
                    </button>
                    <ul class="dropdown" role="menu">
                        <li><a href="{{ route('solutions.advisory') }}" role="menuitem">Advisory</a></li>
                        <li><a href="{{ route('solutions.engineering') }}" role="menuitem">Engineering</a></li>
                        <li><a href="{{ route('solutions.project_delivery') }}" role="menuitem">Project Delivery</a></li>
                        <li><a href="{{ route('solutions.asset_management') }}" role="menuitem">Asset Management</a></li>
                        <li><a href="{{ route('solutions.decarbonisation') }}" role="menuitem">Decarbonisation</a></li>
                        <li><a href="{{ route('solutions.digitalisation') }}" role="menuitem">Digitalisation</a></li>
                        <li><a href="{{ route('solutions.case_studies') }}" role="menuitem">Case Studies</a></li>
                    </ul>
                </li>
                <li class="main-nav__item" role="none">
                    <button class="main-nav__btn" role="menuitem" aria-haspopup="true" aria-expanded="false">
                        Our Markets
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>
                    </button>
                    <ul class="dropdown" role="menu">
                        <li><a href="{{ route('markets.oil_and_gas') }}" role="menuitem">Oil &amp; Gas</a></li>
                        <li><a href="{{ route('markets.carbon_capture') }}" role="menuitem">Carbon Capture</a></li>
                        <li><a href="{{ route('markets.hydrogen') }}" role="menuitem">Hydrogen</a></li>
                        <li><a href="{{ route('markets.power') }}" role="menuitem">Power</a></li>
                        <li><a href="{{ route('markets.renewables') }}" role="menuitem">Renewables</a></li>
                        <li><a href="{{ route('markets.chemicals') }}" role="menuitem">Chemicals</a></li>
                        <li><a href="{{ route('markets.life_sciences') }}" role="menuitem">Life Sciences</a></li>
                        <li><a href="{{ route('markets.mining') }}" role="menuitem">Mining</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        {{-- Header Actions --}}
        <div class="header-actions">
            <button class="btn-search" id="searchOpen" aria-label="Open search">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 16.207 16.207" aria-hidden="true">
                    <g transform="translate(6890 351)">
                        <g transform="translate(-6890 -351)" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="6.5" cy="6.5" r="6.5" stroke="none"/>
                            <circle cx="6.5" cy="6.5" r="5.5" fill="none"/>
                        </g>
                        <line x1="5" y1="5" transform="translate(-6879.5 -340.5)" fill="none" stroke="currentColor" stroke-width="2"/>
                    </g>
                </svg>
            </button>
            <a href="{{ route('contact.index') }}" class="btn-contact">Contact Us</a>
            <button class="hamburger" id="hamburger" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobileNav">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>

{{-- ══════════ MOBILE NAV ══════════ --}}
<nav id="mobileNav" class="mobile-nav" role="navigation" aria-label="Mobile menu">
    <div class="mobile-nav__top">
        <a href="/" class="mobile-nav__logo">
            <span style="color:#fff;font-weight:800;font-size:1.2rem;">TML</span>
        </a>
        <button class="mobile-nav__close" id="mobileNavClose" aria-label="Close menu">&#x2715;</button>
    </div>

    <ul class="mobile-nav__list">
        <li class="mobile-nav__item">
            <button class="mobile-nav__toggle" aria-expanded="false">
                Our Company
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <ul class="mobile-nav__dropdown">
                <li><a href="{{ route('company.about_us') }}">About Us</a></li>
                <li><a href="{{ route('company.team') }}">Our Team</a></li>
                <li><a href="{{ route('company.offices') }}">Our Offices</a></li>
                <li><a href="{{ route('company.sustainability') }}">Sustainability</a></li>
                <li><a href="{{ route('company.investors') }}">Investors</a></li>
            </ul>
        </li>

        <li class="mobile-nav__item">
            <a href="{{ route('company.careers') }}" class="mobile-nav__link">Careers</a>
        </li>

        <li class="mobile-nav__item">
            <button class="mobile-nav__toggle" aria-expanded="false">
                News &amp; Insights
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <ul class="mobile-nav__dropdown">
                <li><a href="{{ route('resources.news') }}">News</a></li>
                <li><a href="{{ route('resources.insights') }}">Technical Insights</a></li>
            </ul>
        </li>

        <li class="mobile-nav__item">
            <button class="mobile-nav__toggle" aria-expanded="false">
                Our Solutions
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <ul class="mobile-nav__dropdown">
                <li><a href="{{ route('solutions.advisory') }}">Advisory</a></li>
                <li><a href="{{ route('solutions.engineering') }}">Engineering</a></li>
                <li><a href="{{ route('solutions.project_delivery') }}">Project Delivery</a></li>
                <li><a href="{{ route('solutions.asset_management') }}">Asset Management</a></li>
                <li><a href="{{ route('solutions.decarbonisation') }}">Decarbonisation</a></li>
                <li><a href="{{ route('solutions.digitalisation') }}">Digitalisation</a></li>
                <li><a href="{{ route('solutions.case_studies') }}">Case Studies</a></li>
            </ul>
        </li>

        <li class="mobile-nav__item">
            <button class="mobile-nav__toggle" aria-expanded="false">
                Our Markets
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <ul class="mobile-nav__dropdown">
                <li><a href="{{ route('markets.oil_and_gas') }}">Oil &amp; Gas</a></li>
                <li><a href="{{ route('markets.carbon_capture') }}">Carbon Capture</a></li>
                <li><a href="{{ route('markets.hydrogen') }}">Hydrogen</a></li>
                <li><a href="{{ route('markets.power') }}">Power</a></li>
                <li><a href="{{ route('markets.renewables') }}">Renewables</a></li>
                <li><a href="{{ route('markets.chemicals') }}">Chemicals</a></li>
                <li><a href="{{ route('markets.life_sciences') }}">Life Sciences</a></li>
                <li><a href="{{ route('markets.mining') }}">Mining</a></li>
            </ul>
        </li>

        <li class="mobile-nav__item">
            <a href="{{ route('contact.index') }}" class="mobile-nav__link">Contact</a>
        </li>

        <li class="mobile-nav__item" style="margin-top: 2rem;">
            <a href="{{ route('contact.index') }}" class="btn-contact" style="display:block;text-align:center;">Contact Us</a>
        </li>
    </ul>
</nav>
