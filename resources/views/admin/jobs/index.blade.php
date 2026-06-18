@extends('layouts.admin')

@section('title', 'Manage Job Openings')

@section('admin_content')
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:2rem;">
        <h1 class="admin-title" style="margin-bottom:0;">Job Openings</h1>
        <a href="{{ route('admin.jobs.create') }}" class="btn-admin btn-admin--primary">+ Add New Opening</a>
    </div>

    <div class="admin-card">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Location</th>
                    <th>Sector</th>
                    <th>Status</th>
                    <th>Date Posted</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Principal Process Engineer</strong></td>
                    <td>Aberdeen, UK</td>
                    <td>Oil & Gas</td>
                    <td><span class="badge badge--gold">OPEN</span></td>
                    <td>2026-03-24</td>
                    <td>
                        <div style="display:flex; gap:0.75rem;">
                            <a href="{{ route('admin.jobs.edit', 1) }}" class="btn-admin btn-admin--outline" style="padding: 0.4rem 0.8rem; font-size: 0.7rem; color:var(--tml-navy); font-weight:700; text-decoration:none;">Edit</a>
                            <form action="{{ route('admin.jobs.destroy', 1) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this job opening?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-admin btn-admin--danger" style="padding: 0.4rem 0.8rem; font-size: 0.7rem;">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><strong>Sustainable Energy Consultant</strong></td>
                    <td>Remote</td>
                    <td>Renewables</td>
                    <td><span class="badge badge--gold">OPEN</span></td>
                    <td>2026-03-22</td>
                    <td>
                        <div style="display:flex; gap:0.75rem;">
                            <a href="{{ route('admin.jobs.edit', 1) }}" class="btn-admin btn-admin--outline" style="padding: 0.4rem 0.8rem; font-size: 0.7rem; color:var(--tml-navy); font-weight:700; text-decoration:none;">Edit</a>
                            <form action="{{ route('admin.jobs.destroy', 1) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this job opening?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-admin btn-admin--danger" style="padding: 0.4rem 0.8rem; font-size: 0.7rem;">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
