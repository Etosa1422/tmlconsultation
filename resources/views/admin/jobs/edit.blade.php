@extends('layouts.admin')

@section('title', 'Edit Job Opening')

@section('admin_content')
    <div style="margin-bottom:2rem;">
        <a href="{{ route('admin.jobs.index') }}" style="color:#888; text-decoration:none; font-size:0.9rem;">&larr; Back to job list</a>
        <h1 class="admin-title" style="margin-top:1rem;">Edit Job Opening</h1>
    </div>

    <div class="admin-card">
        <form action="#" method="POST">
            @csrf
            @method('PUT')
            
            <div style="display:grid; grid-template-columns: 1fr 1fr; gap:2rem; margin-bottom:2rem;">
                <div class="form-group">
                    <label style="display:block; font-weight:700; margin-bottom:0.5rem; font-size:0.8rem; text-transform:uppercase;">Job Title *</label>
                    <input type="text" name="title" value="Principal Process Engineer" required style="width:100%; padding:.75rem; border:1px solid #ddd; background:#f9f9f9;">
                </div>
                <div class="form-group">
                    <label style="display:block; font-weight:700; margin-bottom:0.5rem; font-size:0.8rem; text-transform:uppercase;">Location *</label>
                    <input type="text" name="location" value="Aberdeen, UK" required style="width:100%; padding:.75rem; border:1px solid #ddd; background:#f9f9f9;">
                </div>
            </div>

            <div style="display:grid; grid-template-columns: 1fr 1fr; gap:2rem; margin-bottom:2rem;">
                 <div class="form-group">
                    <label style="display:block; font-weight:700; margin-bottom:0.5rem; font-size:0.8rem; text-transform:uppercase;">Sector / Department</label>
                    <input type="text" name="sector" value="Oil & Gas" style="width:100%; padding:.75rem; border:1px solid #ddd; background:#f9f9f9;">
                </div>
                <div class="form-group">
                    <label style="display:block; font-weight:700; margin-bottom:0.5rem; font-size:0.8rem; text-transform:uppercase;">Job Status</label>
                    <select name="status" style="width:100%; padding:.75rem; border:1px solid #ddd; background:#f9f9f9;">
                        <option value="open" selected>Open</option>
                        <option value="closed">Closed</option>
                        <option value="draft">Draft</option>
                    </select>
                </div>
            </div>

            <div class="form-group" style="margin-bottom:2rem;">
                 <label style="display:block; font-weight:700; margin-bottom:0.5rem; font-size:0.8rem; text-transform:uppercase;">Job Description</label>
                 <textarea name="description" rows="10" required style="width:100%; padding:.75rem; border:1px solid #ddd; background:#f9f9f9;">As a Principal Process Engineer at TML Consulting Group, you will be responsible for leading complex engineering projects in the oil and gas sector. You will oversee multi-phase separation systems and produced-water treatment optimization across global sites.</textarea>
            </div>

            <button type="submit" class="btn-admin btn-admin--primary">Update Job Posting</button>
            <a href="{{ route('admin.jobs.index') }}" class="btn-admin btn-admin--outline" style="text-decoration:none;">Cancel</a>
        </form>
    </div>
@endsection
