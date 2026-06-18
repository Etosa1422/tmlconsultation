@extends('layouts.admin')

@section('title', 'Edit News Article')

@push('styles')
<style>
    .form-group { margin-bottom: 2rem; }
    .form-label { display: block; font-weight: 700; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; color: #444; margin-bottom: 0.5rem; }
    .form-input { width: 100%; padding: 1rem; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem; }
    .form-textarea { width: 100%; padding: 1rem; border: 1px solid #ddd; border-radius: 4px; min-height: 400px; font-family: inherit; font-size: 1rem; line-height: 1.6; }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; }
</style>
@endpush

@section('admin_content')
    <div style="margin-bottom: 2rem;">
        <a href="{{ route('admin.news.index') }}" style="color: #888; text-decoration: none; font-size: 0.9rem;">&larr; Back to news list</a>
        <h1 class="admin-title" style="margin-top: 1rem;">Edit News & Insight Article</h1>
    </div>

    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="admin-card">
            <h3 style="margin-bottom: 1.5rem; color: var(--tml-navy);">Core Content</h3>
            <div class="form-group">
                <label class="form-label">Article Title *</label>
                <input type="text" name="title" value="Sustainable Energy Transition Strategies for 2026" required class="form-input" placeholder="e.g. The Future of Hydrogen in Process Engineering">
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Category *</label>
                    <select name="category" class="form-input">
                        <option value="Sustainability" selected>Sustainability</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Decarbonisation">Decarbonisation</option>
                        <option value="Digital">Digital Transformation</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Featured Image URL</label>
                    <input type="text" name="image" value="hero1.jpg" class="form-input" placeholder="e.g. news-header-1.jpg">
                    <p style="font-size:0.75rem; color:#888; margin-top:0.35rem;">Enter the image filename from the /public/images folder.</p>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Article Content (HTML / Markdown Supported) *</label>
                <textarea name="content" required class="form-textarea" placeholder="Start writing your article here...">In the evolving landscape of 2026, the energy transition is no longer a distant goal but a present operational reality. This article explores the latest technical advancements in process engineering that are enabling facilities to achieve net-zero targets while maintaining peak production performance.</textarea>
            </div>
        </div>

        <div class="admin-card">
             <h3 style="margin-bottom: 1.5rem; color: var(--tml-navy);">Article Settings</h3>
             <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Publication Status</label>
                    <label style="display:inline-flex; align-items:center; gap:0.5rem; font-weight:600; font-size:0.9rem; cursor:pointer;">
                        <input type="radio" name="status" value="published" checked> Published
                    </label>
                    &nbsp;&nbsp;
                    <label style="display:inline-flex; align-items:center; gap:0.5rem; font-weight:600; font-size:0.9rem; cursor:pointer;">
                        <input type="radio" name="status" value="draft"> Draft
                    </label>
                </div>
                <div class="form-group">
                    <label class="form-label">Publication Date</label>
                    <input type="date" name="published_at" class="form-input" value="2026-03-24">
                </div>
             </div>
        </div>

        <div style="display: flex; gap: 1rem; margin-top: 2rem;">
            <button type="submit" class="btn-admin btn-admin--primary" style="padding: 1rem 2.5rem;">Update & Save Article</button>
            <a href="{{ route('admin.news.index') }}" class="btn-admin btn-admin--outline" style="text-decoration:none; display:flex; align-items:center; padding: 1rem 2rem;">Cancel</a>
        </div>
    </form>
@endsection
