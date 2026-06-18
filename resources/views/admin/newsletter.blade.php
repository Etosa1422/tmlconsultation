@extends('layouts.admin')

@section('title', 'Newsletter Subscribers')

@section('admin_content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h1 class="admin-title" style="margin-bottom: 0;">Newsletter Subscribers</h1>
        <div style="display: flex; gap: 0.75rem;">
             <button class="btn-admin btn-admin--outline" style="font-size: 0.75rem;">Export CSV File</button>
             <button class="btn-admin btn-admin--primary" style="font-size: 0.75rem;">Download All (Excel)</button>
        </div>
    </div>

    <div class="admin-card">
        <h3 style="margin-bottom: 1.5rem; color: var(--tml-navy);">Subscriber Database</h3>
        <p style="font-size: 0.875rem; color: #666; margin-bottom: 1.5rem;">Viewing all users who have opted-in to the TML Consulting Group newsletter across all website entry points.</p>

        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 50px;"><input type="checkbox"></th>
                        <th>Email Address</th>
                        <th>Status</th>
                        <th>Signup Date</th>
                        <th>Referrer Page</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><strong>taribol@example.com</strong></td>
                        <td><span class="badge badge--gold">ACTIVE</span></td>
                        <td>2026-03-27</td>
                        <td>Homepage / Footer</td>
                        <td>
                            <button class="btn-admin btn-admin--outline" style="padding: 0.35rem 0.6rem; font-size: 0.65rem; color: #d9534f; border-color: #d9534f;">Unsubscribe</button>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><strong>consult@energy.uk</strong></td>
                        <td><span class="badge badge--gold">ACTIVE</span></td>
                        <td>2026-03-26</td>
                        <td>Solutions Page</td>
                        <td>
                            <button class="btn-admin btn-admin--outline" style="padding: 0.35rem 0.6rem; font-size: 0.65rem; color: #d9534f; border-color: #d9534f;">Unsubscribe</button>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><strong>offshore_ops@bp.com</strong></td>
                        <td><span class="badge badge--gold">ACTIVE</span></td>
                        <td>2026-03-25</td>
                        <td>Markets / Oil & Gas</td>
                        <td>
                            <button class="btn-admin btn-admin--outline" style="padding: 0.35rem 0.6rem; font-size: 0.65rem; color: #d9534f; border-color: #d9534f;">Unsubscribe</button>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><strong>info@renewables.no</strong></td>
                        <td><span class="badge" style="background: #ccc; color: #fff;">PENDING</span></td>
                        <td>2026-03-22</td>
                        <td>Homepage / Hero</td>
                        <td>
                            <button class="btn-admin btn-admin--outline" style="padding: 0.35rem 0.6rem; font-size: 0.65rem; color: #d9534f; border-color: #d9534f;">Unsubscribe</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Pagination Placeholder --}}
        <div style="margin-top: 2rem; display: flex; justify-content: space-between; align-items: center; color: #888; font-size: 0.8rem;">
            <div>Showing 1 - 4 of 24 subscribers</div>
            <div style="display: flex; gap: 0.5rem;">
                <button disabled style="background: #eee; border: 1px solid #ddd; padding: 0.25rem 0.5rem; border-radius: 2px;">Prev</button>
                <button style="background: #fff; border: 1px solid #ddd; padding: 0.25rem 0.5rem; border-radius: 2px; font-weight: 700;">1</button>
                <button style="background: #fff; border: 1px solid #ddd; padding: 0.25rem 0.5rem; border-radius: 2px;">2</button>
                <button style="background: #fff; border: 1px solid #ddd; padding: 0.25rem 0.5rem; border-radius: 2px;">3</button>
                <button style="background: #fff; border: 1px solid #ddd; padding: 0.25rem 0.5rem; border-radius: 2px;">Next</button>
            </div>
        </div>
    </div>
@endsection
