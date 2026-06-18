@extends('layouts.admin')

@section('title', 'Manage About Content')

@push('styles')
<style>
    .admin-section-header {
        display: flex;
        align-items: center;
        gap: 1.25rem;
        margin-bottom: 2.5rem;
        padding-bottom: 1.25rem;
        border-bottom: 2px solid #f1f5f9;
    }
    .admin-section-header h2 {
        font-size: 1.35rem;
        font-weight: 800;
        color: #0f172a;
        margin: 0;
    }
    .status-badge--step {
        width: 36px; height: 36px; 
        background: #0f172a; color: #fff; 
        border-radius: 10px; display: flex; 
        align-items: center; justify-content: center; 
        font-weight: 900; font-size: 1.1rem;
    }
</style>
@endpush

@section('admin_content')
    <div style="margin-bottom: 3rem;">
        <h1 class="admin-title" style="margin-bottom: 0.75rem;">About Page Content</h1>
        <p style="color: #64748b; font-size: 1.1rem;">Customize your company's narrative, core values, and sustainability goals.</p>
    </div>

    <form action="#" method="POST">
        @csrf
        
        {{-- Section 1: Hero & Identity --}}
        <div class="admin-card">
            <div class="admin-section-header">
                <div class="status-badge--step">1</div>
                <h2>Hero & Visual Identity</h2>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin-bottom: 1rem;">
                <div class="form-group">
                    <label class="form-label">Main Page Headline</label>
                    <input type="text" name="hero_title" class="form-input" value="About TML Consulting Group">
                    <p style="font-size: 0.85rem; color: #94a3b8; margin-top: 0.5rem;">This title appears as the primary text in the top banner.</p>
                </div>
                <div class="form-group">
                    <label class="form-label">Banner Image Filename</label>
                    <input type="text" name="hero_image" class="form-input" value="hero2.jpg">
                    <p style="font-size: 0.85rem; color: #94a3b8; margin-top: 0.5rem;">Image must be located in /public/images/.</p>
                </div>
            </div>
        </div>

        {{-- Section 2: Core Introduction --}}
        <div class="admin-card">
            <div class="admin-section-header">
                <div class="status-badge--step">2</div>
                <h2>Mission Introduction</h2>
            </div>
            
            <div class="form-group">
                <label class="form-label">Introduction Summary Headline</label>
                <input type="text" name="intro_title" class="form-input" value="Advancing industry through technical precision and sustainable innovation.">
            </div>
            <div class="form-group">
                <label class="form-label">Full Narrative Bio</label>
                <textarea name="intro_desc" rows="6" class="form-textarea">TML Consulting Group is a leading provider of process engineering and strategic consulting services for the global energy sector.</textarea>
            </div>
        </div>

        {{-- Section 3: Company Values --}}
        <div class="admin-card">
            <div class="admin-section-header">
                <div class="status-badge--step">3</div>
                <h2>Core Corporate Values</h2>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2.5rem;">
                <div class="form-group">
                    <label class="form-label">01. Safety</label>
                    <textarea name="value_1" rows="5" class="form-textarea">We prioritize the health and safety of our people and the integrity of the environment in everything we do.</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">02. Integrity</label>
                    <textarea name="value_2" rows="5" class="form-textarea">We maintain the highest ethical standards, fostering trust through transparent communication and reliable delivery.</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">03. Innovation</label>
                    <textarea name="value_3" rows="5" class="form-textarea">We continuously challenge the status quo, integrating new technologies to drive efficiency and sustainability.</textarea>
                </div>
            </div>
        </div>

        {{-- Section 4: Sustainability Commitment --}}
        <div class="admin-card">
            <div class="admin-section-header">
                <div class="status-badge--step">4</div>
                <h2>Sustainable Energy Commitment</h2>
            </div>
            
            <div class="form-group">
                <label class="form-label">Section Headline</label>
                <input type="text" name="sust_title" class="form-input" value="Commitment to Sustainability">
            </div>
            <div class="form-group">
                <label class="form-label">Commitment Statement</label>
                <textarea name="sust_desc" rows="10" class="form-textarea">As the energy landscape evolves, TML Consulting Group is at the forefront of the energy transition. We help our clients reduce their carbon footprint through decarbonisation strategies, energy efficiency audits, and the integration of renewable energy sources. Our focus is on creating long-term value that balances industrial productivity with environmental stewardship, ensuring a viable future for generations to come.</textarea>
            </div>
        </div>

        {{-- ACTION BAR --}}
        <div style="position: sticky; bottom: 1.5rem; z-index: 100;">
            <div class="admin-card" style="margin-bottom: 0; padding: 1.25rem 2rem; display: flex; align-items: center; justify-content: space-between; background: rgba(255,255,255,0.95); backdrop-filter: blur(10px); border-color: #0f172a; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);">
                <div style="color: #64748b; font-size: 0.9rem; font-weight: 500;">
                    Review your changes carefully before saving.
                </div>
                <div style="display: flex; gap: 1rem;">
                    <button type="submit" class="btn-admin btn-admin--primary">Push Updates to Live Site</button>
                    <button type="reset" class="btn-admin btn-admin--outline">Revert Changes</button>
                </div>
            </div>
        </div>
    </form>
@endsection
