@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('admin_content')
    <h1 class="admin-title">Dashboard Overview</h1>
    
    <div class="stats-grid">
        <div class="stat-card stat-card--indigo">
            <div class="stat-card__icon">
                <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </div>
            <div class="stat-card__label">Subscribed</div>
            <div class="stat-card__value">2,482</div>
            <div class="stat-card__trend stat-card__trend--up">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="3"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                <span>12% from last month</span>
            </div>
        </div>
        <div class="stat-card stat-card--amber">
            <div class="stat-card__icon">
                <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
            </div>
            <div class="stat-card__label">Active Jobs</div>
            <div class="stat-card__value">14</div>
            <div class="stat-card__trend" style="color: #64748b;">
                <span>Steady at +0</span>
            </div>
        </div>
        <div class="stat-card stat-card--emerald">
            <div class="stat-card__icon">
                <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
            </div>
            <div class="stat-card__label">New News</div>
            <div class="stat-card__value">8</div>
            <div class="stat-card__trend stat-card__trend--up">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="3"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                <span>New items added today</span>
            </div>
        </div>
        <div class="stat-card stat-card--rose">
            <div class="stat-card__icon">
                <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
            </div>
            <div class="stat-card__label">Messages</div>
            <div class="stat-card__value">32</div>
            <div class="stat-card__trend" style="color: #f43f5e; font-weight: 700;">
                <span>5 Unread</span>
            </div>
        </div>
    </div>

    <div class="admin-layout-grid">
        <div class="admin-card" style="margin-bottom: 0;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                <h2 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0;">Recent Subscriber Activity</h2>
                <a href="{{ route('admin.newsletter') }}" style="font-size: 0.85rem; font-weight: 700; color: var(--tml-gold); text-decoration: none;">View All &rarr;</a>
            </div>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Subscriber</th>
                        <th>Joined</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: 0.75rem;">
                                <div style="width: 32px; height: 32px; border-radius: 50%; background: #f1f5f9; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.75rem; color: #475569;">TE</div>
                                <div>
                                    <div style="font-weight: 700; color: #1e293b;">taribol@example.com</div>
                                    <div style="font-size: 0.75rem; color: #64748b;">Process Engineer</div>
                                </div>
                            </div>
                        </td>
                        <td>Mar 27, 2026</td>
                        <td><span style="display: inline-flex; align-items: center; gap: 0.35rem; padding: 0.25rem 0.6rem; background: rgba(16, 185, 129, 0.1); color: #10b981; border-radius: 99px; font-size: 0.7rem; font-weight: 800;"><span style="width: 6px; height: 6px; border-radius: 50%; background: #10b981;"></span> ACTIVE</span></td>
                    </tr>
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: 0.75rem;">
                                <div style="width: 32px; height: 32px; border-radius: 50%; background: #f1f5f9; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.75rem; color: #475569;">CE</div>
                                <div>
                                    <div style="font-weight: 700; color: #1e293b;">consult@energy.uk</div>
                                    <div style="font-size: 0.75rem; color: #64748b;">Industrial Consultant</div>
                                </div>
                            </div>
                        </td>
                        <td>Mar 26, 2026</td>
                        <td><span style="display: inline-flex; align-items: center; gap: 0.35rem; padding: 0.25rem 0.6rem; background: rgba(16, 185, 129, 0.1); color: #10b981; border-radius: 99px; font-size: 0.7rem; font-weight: 800;"><span style="width: 6px; height: 6px; border-radius: 50%; background: #10b981;"></span> ACTIVE</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="admin-card" style="margin-bottom: 0;">
            <h2 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin-bottom: 1.5rem;">Quick Actions</h2>
            <div style="display: flex; flex-direction: column; gap: 1rem;">
                <a href="{{ route('admin.jobs.create') }}" class="btn-admin btn-admin--primary" style="justify-content: center; text-decoration: none;">Post New Job</a>
                <a href="{{ route('admin.news.create') }}" class="btn-admin btn-admin--outline" style="justify-content: center; text-decoration: none;">Write Insight</a>
                <a href="{{ route('admin.team.create') }}" class="btn-admin btn-admin--outline" style="justify-content: center; text-decoration: none;">Add Team Member</a>
            </div>
            <div style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid #f1f5f9;">
                <p style="font-size: 0.85rem; color: #64748b; line-height: 1.5;">Need help? Check the <a href="#" style="color: var(--tml-gold); font-weight: 700; text-decoration: none;">Documentation</a> or contact sys-admin.</p>
            </div>
        </div>
    </div>
@endsection
