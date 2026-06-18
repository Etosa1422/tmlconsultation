<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/login', function () {
    return view('admin.login');
})->name('admin.login');

Route::post('/login', function (Illuminate\Http\Request $request) {
    if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
        $request->session()->regenerate();
        return redirect()->route('admin.dashboard');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
})->name('admin.login.submit');

Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Jobs
    Route::get('/jobs', function () { return view('admin.jobs.index'); })->name('admin.jobs.index');
    Route::get('/jobs/create', function () { return view('admin.jobs.create'); })->name('admin.jobs.create');
    Route::get('/jobs/{id}/edit', function () { return view('admin.jobs.edit'); })->name('admin.jobs.edit');
    Route::post('/jobs', function () { return back()->with('success', 'Job created (mock)'); })->name('admin.jobs.store');
    Route::put('/jobs/{id}', function () { return redirect()->route('admin.jobs.index')->with('success', 'Job updated (mock)'); })->name('admin.jobs.update');
    Route::delete('/jobs/{id}', function () { return back()->with('success', 'Job deleted (mock)'); })->name('admin.jobs.destroy');

    // About Page
    Route::get('/about', function () { return view('admin.about'); })->name('admin.about');

    // News & Insights
    Route::get('/news', function () { return view('admin.news.index'); })->name('admin.news.index');
    Route::get('/news/create', function () { return view('admin.news.create'); })->name('admin.news.create');
    Route::get('/news/{id}/edit', function () { return view('admin.news.edit'); })->name('admin.news.edit');
    Route::put('/news/{id}', function () { return redirect()->route('admin.news.index')->with('success', 'Article updated (mock)'); })->name('admin.news.update');
    Route::delete('/news/{id}', function () { return back()->with('success', 'Article deleted (mock)'); })->name('admin.news.destroy');

    // Our Team
    Route::get('/team', function () { return view('admin.team.index'); })->name('admin.team.index');
    Route::get('/team/create', function () { return view('admin.team.create'); })->name('admin.team.create');
    Route::get('/team/{id}/edit', function () { return view('admin.team.edit'); })->name('admin.team.edit');
    Route::post('/team', function () { return redirect()->route('admin.team.index')->with('success', 'Member added (mock)'); })->name('admin.team.store');
    Route::put('/team/{id}', function () { return redirect()->route('admin.team.index')->with('success', 'Member updated (mock)'); })->name('admin.team.update');
    Route::delete('/team/{id}', function () { return back()->with('success', 'Member removed (mock)'); })->name('admin.team.destroy');

    // Newsletter Subscribers
    Route::get('/newsletter', function () { return view('admin.newsletter'); })->name('admin.newsletter');

    // Contact Details
    Route::get('/contact', function () { return view('admin.contact'); })->name('admin.contact');

    // Logout
    Route::post('/logout', function (Illuminate\Http\Request $request) {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    })->name('admin.logout');
});
