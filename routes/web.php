<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.homepage');
});

Route::prefix('company')->group(function () {
    Route::get('/about-us', function () {
        return view('company.about');
    })->name('company.about_us');

    Route::get('/our-team', function () {
        return view('company.team');
    })->name('company.team');

    Route::get('/our-offices', function () {
        return view('company.offices');
    })->name('company.offices');

    Route::get('/sustainability', function () {
        return view('company.sustainability');
    })->name('company.sustainability');

    Route::get('/investors', function () {
        return view('company.investors');
    })->name('company.investors');

    Route::get('/careers', function () {
        return view('company.careers');
    })->name('company.careers');

    Route::get('/careers/{id}', function () {
        return "Job details";
    })->name('careers.show');
});

Route::get('/news', function () { return view('resources.news'); })->name('resources.news');
Route::get('/insights', function () { return view('resources.insights'); })->name('resources.insights');

Route::prefix('solutions')->group(function () {
    Route::get('/advisory', function () { return view('solutions.advisory'); })->name('solutions.advisory');
    Route::get('/engineering', function () { return view('solutions.engineering'); })->name('solutions.engineering');
    Route::get('/project-delivery', function () { return view('solutions.project-delivery'); })->name('solutions.project_delivery');
    Route::get('/asset-management', function () { return view('solutions.asset-management'); })->name('solutions.asset_management');
    Route::get('/decarbonisation', function () { return view('solutions.decarbonisation'); })->name('solutions.decarbonisation');
    Route::get('/digitalisation', function () { return view('solutions.digitalisation'); })->name('solutions.digitalisation');
    Route::get('/case-studies', function () { return view('solutions.case-studies'); })->name('solutions.case_studies');
});

Route::prefix('markets')->group(function () {
    Route::get('/oil-and-gas', function () { return view('markets.oil-and-gas'); })->name('markets.oil_and_gas');
    Route::get('/carbon-capture', function () { return view('markets.carbon-capture'); })->name('markets.carbon_capture');
    Route::get('/hydrogen', function () { return view('markets.hydrogen'); })->name('markets.hydrogen');
    Route::get('/power', function () { return view('markets.power'); })->name('markets.power');
    Route::get('/renewables', function () { return view('markets.renewables'); })->name('markets.renewables');
    Route::get('/chemicals', function () { return view('markets.chemicals'); })->name('markets.chemicals');
    Route::get('/life-sciences', function () { return view('markets.life-sciences'); })->name('markets.life_sciences');
    Route::get('/mining', function () { return view('markets.mining'); })->name('markets.mining');
});

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact.index');

Route::post('/contact', function () {
    return back()->with('success', 'Thank you for your message.');
})->name('contact.submit');

Route::post('/newsletter/subscribe', function () {
    return back()->with('news_success', 'Thank you for subscribing to our newsletter!');
})->name('newsletter.subscribe');
