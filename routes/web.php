<?php

use Illuminate\Support\Facades\Route;
use LaraZeus\Wind\Http\Livewire\Contacts;

Route::middleware(config('zeus-wind.middleware'))
    ->prefix(config('zeus-wind.path'))
    ->get('contact-us/{departmentSlug?}', Contacts::class)
    ->name('contact');
