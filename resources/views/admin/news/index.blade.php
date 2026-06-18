@extends('layouts.admin')

@section('title', 'Manage News & Insights')

@section('admin_content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h1 class="admin-title" style="margin-bottom: 0;">News & Insights</h1>
        <a href="{{ route('admin.news.create') }}" class="btn-admin btn-admin--primary">+ Create New Article</a>
    </div>

    <div class="admin-card">
        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Article Title</th>
                        <th>Category</th>
                        <th>Date Published</th>
                        <th>Status</th>
                        <th>Views</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Sustainable Energy Transition Strategies for 2026</strong></td>
                        <td>Sustainability</td>
                        <td>2026-03-24</td>
                        <td><span class="badge badge--gold">PUBLISHED</span></td>
                        <td>124</td>
                        <td>
                            <div style="display:flex; gap:0.5rem;">
                                <a href="{{ route('admin.news.edit', 1) }}" class="btn-admin btn-admin--outline" style="padding: 0.4rem 0.8rem; font-size: 0.7rem; text-decoration:none; display:flex; align-items:center;">Edit</a>
                                <form action="{{ route('admin.news.destroy', 1) }}" method="POST" onsubmit="return confirm('Delete this article?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-admin btn-admin--danger" style="padding: 0.4rem 0.8rem; font-size: 0.7rem;">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>North Sea Asset Life Extension: Case Study</strong></td>
                        <td>Engineering</td>
                        <td>2026-03-20</td>
                        <td><span class="badge badge--gold">PUBLISHED</span></td>
                        <td>89</td>
                        <td>
                            <div style="display:flex; gap:0.5rem;">
                                <button class="btn-admin btn-admin--outline" style="padding: 0.4rem 0.8rem; font-size: 0.7rem;">Edit</button>
                                <form action="#" method="POST" onsubmit="return confirm('Delete this article?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-admin btn-admin--outline" style="padding: 0.4rem 0.8rem; font-size: 0.7rem; color:#dc3545; border-color:#dc3545;">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Carbon Capture Systems Optimization Report</strong></td>
                        <td>Decarbonisation</td>
                        <td>2026-03-15</td>
                        <td><span class="badge badge--gold">DRAFT</span></td>
                        <td>0</td>
                        <td>
                            <div style="display:flex; gap:0.5rem;">
                                <button class="btn-admin btn-admin--outline" style="padding: 0.4rem 0.8rem; font-size: 0.7rem;">Edit</button>
                                <form action="#" method="POST" onsubmit="return confirm('Delete this article?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-admin btn-admin--outline" style="padding: 0.4rem 0.8rem; font-size: 0.7rem; color:#dc3545; border-color:#dc3545;">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
