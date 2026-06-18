{{-- ══════════ FOOTER ══════════ --}}
<footer class="footer" role="contentinfo">
    <div class="footer__inner">
        <div class="footer__grid">
            {{-- Brand column --}}
            <div>
                <div class="footer__logo-text" style="margin-bottom:1rem;">
                    <img src="{{ asset('logo.png') }}" alt="TML Consulting Group" style="height:40px;width:auto;filter:brightness(0) invert(1);">
                    <div>
                        <div class="footer__brand-name">TML</div>
                        <div class="footer__brand-sub">Consulting Group</div>
                    </div>
                </div>
                <p class="footer__brand-desc">
                    Global engineering and consulting specialists in oil &amp; gas, energy transition, and industrial assets.
                    Delivering technical precision and sustainable outcomes across 60+ countries.
                </p>
                <div class="footer__social" aria-label="Social media links">
                    <a href="https://www.linkedin.com/company/tml-consulting-group/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn (opens in new window)">in</a>
                    <a href="https://twitter.com/TMLConsulting" target="_blank" rel="noopener noreferrer" aria-label="Twitter (opens in new window)">&#x1D54F;</a>
                    <a href="https://www.youtube.com/c/TMLConsultingGroup" target="_blank" rel="noopener noreferrer" aria-label="YouTube (opens in new window)">▶</a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <div class="footer__col-title">Our Solutions</div>
                <ul class="footer__links">
                    <li><a href="/solutions/advisory">Advising</a></li>
                    <li><a href="/solutions/engineering">Engineering</a></li>
                    <li><a href="/solutions/project-delivery">Project Delivery</a></li>
                    <li><a href="/solutions/asset-management">Asset Management</a></li>
                    <li><a href="/solutions/decarbonisation">Decarbonisation</a></li>
                    <li><a href="/solutions/digitalisation">Digitalisation</a></li>
                </ul>
            </div>

            {{-- Policies --}}
            <div>
                <div class="footer__col-title">Policies</div>
                <ul class="footer__links">
                    <li><a href="/policies/hsse">HSSE Policy</a></li>
                    <li><a href="/policies/quality">Quality Policy</a></li>
                    <li><a href="/policies/ethics">Ethics</a></li>
                    <li><a href="/policies/diversity">Diversity &amp; Inclusion</a></li>
                    <li><a href="/policies/modern-slavery">Modern Slavery</a></li>
                    <li><a href="/policies/human-rights">Human Rights</a></li>
                </ul>
            </div>

            {{-- Privacy --}}
            <div>
                <div class="footer__col-title">Legal &amp; Privacy</div>
                <ul class="footer__links">
                    <li><a href="/legal/terms">Terms of Use</a></li>
                    <li><a href="/legal/privacy">Privacy Notice</a></li>
                    <li><a href="/legal/cookies">Cookie Notice</a></li>
                    <li><a href="/legal/accessibility">Accessibility</a></li>
                    <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                    <li><a href="{{ route('company.offices') }}">Find an Office</a></li>
                </ul>
            </div>

            {{-- Newsletter --}}
            <div class="footer__newsletter-col">
                <div class="footer__col-title">Newsletter</div>
                <p class="footer__brand-desc" style="font-size:.875rem; color:rgba(255,255,255,.6); margin-bottom:1.25rem;">Subscribe for technical insights and corporate updates direct to your inbox.</p>
                
                @if(session('news_success'))
                    <div style="color:var(--tml-gold); font-size:.875rem; margin-bottom:1rem; font-weight:700;">
                        {{ session('news_success') }}
                    </div>
                @endif

                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="footer__newsletter-form">
                    @csrf
                    <input type="email" name="email" placeholder="email@company.com" required style="width:100%; background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.1); padding:.85rem; color:#fff; border-radius:1px; margin-bottom:.75rem; font-size:.875rem;">
                    <button type="submit" class="btn-subscribe">Subscribe</button>
                    <p style="font-size:0.7rem; color:rgba(255,255,255,0.4); margin-top:0.75rem;">By subscribing, you agree to our Privacy Policy.</p>
                </form>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="footer__copyright">
                <p>&copy; {{ date('Y') }} TML Consulting International &mdash; Technical Engineering &amp; Sustainability</p>
                <div style="font-size: 0.75rem; color: rgba(255,255,255,0.4); margin-top: 0.25rem;">89 Craigievar Crescent, Aberdeen AB12 7DQ, United Kingdom</div>
            </div>
            
            <div class="footer__bottom-links" role="navigation" aria-label="Footer legal links">
                <a href="/legal/terms">Terms</a>
                <a href="/legal/privacy">Privacy</a>
                <a href="/legal/cookies">Cookies</a>
                <a href="/legal/accessibility">Accessibility</a>
                {{-- <a href="{{ route('admin.login') }}" style="opacity:0.4;">Admin Login</a> --}}
            </div>

            <div style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid rgba(255,255,255,0.05); display: flex; align-items: center; gap: 0.75rem; justify-content: center; font-size: 0.7rem; font-weight: 800; color: rgba(255,255,255,0.25); text-transform: uppercase; letter-spacing: 0.2em;">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" style="color: var(--tml-gold); opacity: 0.6;"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
                <span>Project by <span style="color: rgba(255,255,255,0.5); border-bottom: 1px solid rgba(200,153,58,0.3); padding-bottom: 2px;">Mesaved Enterprise Limited</span></span>
            </div>
        </div>
    </div>
</footer>
