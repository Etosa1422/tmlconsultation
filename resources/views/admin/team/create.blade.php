@extends('layouts.admin')

@section('title', 'Add Team Member')

@section('admin_content')
    <div style="margin-bottom:2rem;">
        <a href="{{ route('admin.team.index') }}" style="color:#888; text-decoration:none; font-size:0.9rem;">&larr; Back to team list</a>
        <h1 class="admin-title" style="margin-top:1rem;">Add New Team Member</h1>
    </div>

    <div class="admin-card">
        <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div style="display:grid; grid-template-columns: 1fr 1fr; gap:2rem; margin-bottom:2rem;">
                <div class="form-group">
                    <label style="display:block; font-weight:700; margin-bottom:0.5rem; font-size:0.8rem; text-transform:uppercase;">Full Name *</label>
                    <input type="text" name="name" required style="width:100%; padding:.75rem; border:1px solid #ddd; background:#f9f9f9;">
                </div>
                <div class="form-group">
                    <label style="display:block; font-weight:700; margin-bottom:0.5rem; font-size:0.8rem; text-transform:uppercase;">Job Title / Role *</label>
                    <input type="text" name="role" required placeholder="e.g. Operations Director" style="width:100%; padding:.75rem; border:1px solid #ddd; background:#f9f9f9;">
                </div>
            </div>

            <div class="form-group" style="margin-bottom:2rem;">
                 <label style="display:block; font-weight:700; margin-bottom:0.5rem; font-size:0.8rem; text-transform:uppercase;">Short Biography *</label>
                 <textarea name="bio" rows="5" required placeholder="A brief description of their experience and expertise..." style="width:100%; padding:.75rem; border:1px solid #ddd; background:#f9f9f9; font-family:inherit;"></textarea>
            </div>

            <div class="form-group" style="margin-bottom:2rem;">
                <label style="display:block; font-weight:700; margin-bottom:0.5rem; font-size:0.8rem; text-transform:uppercase;">Profile Picture</label>
                <input type="file" name="photo" style="width:100%; padding:.75rem; border:1px solid #ddd; background:#f9f9f9;">
                <p style="font-size:0.75rem; color:#888; margin-top:0.35rem;">Recommended size: 600x800px (4:5 ratio).</p>
            </div>

            <div style="display:flex; gap:1rem;">
                <button type="submit" class="btn-admin btn-admin--primary">+ Add Team Member</button>
                <a href="{{ route('admin.team.index') }}" class="btn-admin btn-admin--outline" style="text-decoration:none;">Cancel</a>
            </div>
        </form>
    </div>
@endsection
