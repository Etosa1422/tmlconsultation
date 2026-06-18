@extends('layouts.admin')

@section('title', 'Edit Team Member')

@section('admin_content')
    <div style="margin-bottom:2rem;">
        <a href="{{ route('admin.team.index') }}" style="color:#888; text-decoration:none; font-size:0.9rem;">&larr; Back to team list</a>
        <h1 class="admin-title" style="margin-top:1rem;">Edit Team Member</h1>
    </div>

    <div class="admin-card">
        <form action="{{ route('admin.team.update', 1) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div style="display:grid; grid-template-columns: 1fr 1fr; gap:2rem; margin-bottom:2rem;">
                <div class="form-group">
                    <label style="display:block; font-weight:700; margin-bottom:0.5rem; font-size:0.8rem; text-transform:uppercase;">Full Name *</label>
                    <input type="text" name="name" value="Tariboladei Egai" required style="width:100%; padding:.75rem; border:1px solid #ddd; background:#f9f9f9;">
                </div>
                <div class="form-group">
                    <label style="display:block; font-weight:700; margin-bottom:0.5rem; font-size:0.8rem; text-transform:uppercase;">Job Title / Role *</label>
                    <input type="text" name="role" value="CEO & Principal Process Engineer" required style="width:100%; padding:.75rem; border:1px solid #ddd; background:#f9f9f9;">
                </div>
            </div>

            <div class="form-group" style="margin-bottom:2rem;">
                 <label style="display:block; font-weight:700; margin-bottom:0.5rem; font-size:0.8rem; text-transform:uppercase;">Short Biography *</label>
                 <textarea name="bio" rows="5" required style="width:100%; padding:.75rem; border:1px solid #ddd; background:#f9f9f9; font-family:inherit;">Tariboladei is an accomplished Process Engineer with over 20 years of experience optimizing oil and gas facilities, with a focus on sustainable separation technologies.</textarea>
            </div>

            <div style="display:grid; grid-template-columns: 100px 1fr; gap:2rem; align-items:center; margin-bottom:2rem;">
                <div>
                     <img src="{{ asset('images/ceo.avif') }}" alt="Current Photo" style="width:100%; aspect-ratio: 1/1; object-fit:cover; border-radius:4px; border:1px solid #ddd;">
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <label style="display:block; font-weight:700; margin-bottom:0.5rem; font-size:0.8rem; text-transform:uppercase;">Update Profile Picture</label>
                    <input type="file" name="photo" style="width:100%; padding:.75rem; border:1px solid #ddd; background:#f9f9f9;">
                </div>
            </div>

            <div style="display:flex; gap:1rem;">
                <button type="submit" class="btn-admin btn-admin--primary">Update Team Member</button>
                <a href="{{ route('admin.team.index') }}" class="btn-admin btn-admin--outline" style="text-decoration:none;">Cancel</a>
            </div>
        </form>
    </div>
@endsection
