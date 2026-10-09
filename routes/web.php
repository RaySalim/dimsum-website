<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['set.locale'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/f1', function () {
        return view('f1');
    })->name('f1');

    Route::get('/locale/{lang}', function ($lang) {
        if (in_array($lang, ['en', 'zh'])) {
            session(['locale' => $lang]);
        }

        return redirect()->back();
    })->name('locale.switch');
});
