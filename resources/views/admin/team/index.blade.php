@extends('layouts.admin')

@section('title', 'Manage Our Team')

@section('admin_content')
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:2rem;">
        <h1 class="admin-title" style="margin-bottom:0;">Our Team</h1>
        <a href="{{ route('admin.team.create') }}" class="btn-admin btn-admin--primary">+ Add Team Member</a>
    </div>

    <div class="admin-card">
        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Short Bio</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 80px;">
                            <img src="{{ asset('images/ceo.avif') }}" alt="CEO" style="width:50px; height:50px; border-radius:50%; object-fit:cover;">
                        </td>
                        <td><strong>Tariboladei Egai</strong></td>
                        <td>CEO & Principal Process Engineer</td>
                        <td>
                            <div style="max-width: 300px; font-size: 0.8rem; color: #666; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                Tariboladei is an accomplished Process Engineer with over 20 years of experience...
                            </div>
                        </td>
                        <td>
                            <div style="display:flex; gap:0.5rem;">
                                <a href="{{ route('admin.team.edit', 1) }}" class="btn-admin btn-admin--outline" style="padding: 0.4rem 0.8rem; font-size: 0.7rem; text-decoration:none;">Edit</a>
                                <form action="{{ route('admin.team.destroy', 1) }}" method="POST" onsubmit="return confirm('Remove this team member?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-admin btn-admin--danger" style="padding: 0.4rem 0.8rem; font-size: 0.7rem;">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('images/expertise2.jpg') }}" alt="Director" style="width:50px; height:50px; border-radius:50%; object-fit:cover;">
                        </td>
                        <td><strong>Dr. Sarah Thompson</strong></td>
                        <td>Technical Director</td>
                        <td>
                            <div style="max-width: 300px; font-size: 0.8rem; color: #666; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                Dr. Thompson specializes in CFD analysis and digital modelling...
                            </div>
                        </td>
                        <td>
                            <div style="display:flex; gap:0.5rem;">
                                <a href="{{ route('admin.team.edit', 1) }}" class="btn-admin btn-admin--outline" style="padding: 0.4rem 0.8rem; font-size: 0.7rem; text-decoration:none;">Edit</a>
                                <form action="{{ route('admin.team.destroy', 1) }}" method="POST" onsubmit="return confirm('Remove this team member?');">
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
    </div>
@endsection
