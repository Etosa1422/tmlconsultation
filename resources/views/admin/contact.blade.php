@extends('layouts.admin')

@section('title', 'Manage Contact Info')

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
    .icon-box--admin {
        width: 42px; height: 42px; 
        background: #f1f5f9; color: #0f172a; 
        border-radius: 12px; display: flex; 
        align-items: center; justify-content: center;
    }
</style>
@endpush

@section('admin_content')
    <div style="margin-bottom: 3rem;">
        <h1 class="admin-title" style="margin-bottom: 0.75rem;">Contact Information</h1>
        <p style="color: #64748b; font-size: 1.1rem;">Manage your global office locations, support channels, and social media connectivity.</p>
    </div>

    <form action="#" method="POST">
        @csrf

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem;">
            {{-- PRIMARY ADDRESS --}}
            <div class="admin-card">
                <div class="admin-section-header">
                    <div class="icon-box--admin">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></circle><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <h2>Headquarters</h2>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Office Identity</label>
                    <input type="text" name="office_title" class="form-input" value="Aberdeen HQ">
                </div>
                <div class="form-group">
                    <label class="form-label">Primary Address Line</label>
                    <input type="text" name="address_1" class="form-input" value="89 Craigievar Crescent">
                </div>
                <div class="form-group">
                    <label class="form-label">Regional Information</label>
                    <input type="text" name="address_2" class="form-input" value="Aberdeen AB12 7DQ, United Kingdom">
                </div>
            </div>

            {{-- DIRECT CHANNELS --}}
            <div class="admin-card">
                <div class="admin-section-header">
                    <div class="icon-box--admin" style="background: rgba(200,153,58,0.1); color: var(--tml-gold);">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"></path></svg>
                    </div>
                    <h2>Support Channels</h2>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Switchboard Number</label>
                    <input type="text" name="phone" class="form-input" value="+44 (0) 1224 000000">
                </div>
                <div class="form-group">
                    <label class="form-label">Main Business Email</label>
                    <input type="email" name="email" class="form-input" value="contact@tmlgroup.com">
                </div>
                <div class="form-group">
                    <label class="form-label">Media & Press Inquiries</label>
                    <input type="email" name="media_email" class="form-input" value="media@tmlgroup.com">
                </div>
            </div>
        </div>

        {{-- SOCIAL CHANNELS --}}
        <div class="admin-card">
            <div class="admin-section-header">
                <div class="icon-box--admin">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                </div>
                <h2>Global Social Ecosystem</h2>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 3rem;">
                <div class="form-group">
                    <label class="form-label">LinkedIn Corporate</label>
                    <input type="text" name="linkedin" class="form-input" value="https://linkedin.com/company/tmlgroup">
                </div>
                <div class="form-group">
                    <label class="form-label">X / Twitter Handle</label>
                    <input type="text" name="twitter" class="form-input" placeholder="https://x.com/tmlgroup">
                </div>
                <div class="form-group">
                    <label class="form-label">Instagram Profile</label>
                    <input type="text" name="instagram" class="form-input" placeholder="https://instagram.com/tmlgroup">
                </div>
            </div>
        </div>

        <div style="display: flex; gap: 1.5rem; justify-content: flex-end;">
            <button type="reset" class="btn-admin btn-admin--outline" style="padding: 1rem 2rem;">Discard All Changes</button>
            <button type="submit" class="btn-admin btn-admin--primary" style="padding: 1rem 3rem; background: var(--tml-gold); border-color: var(--tml-gold);">Update Global Contact Info</button>
        </div>
    </form>
@endsection
