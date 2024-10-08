<?php

use App\Livewire\User\UserReport;
use App\Livewire\User\UserAssessment;
use App\Livewire\User\UserProfiling;
use App\Livewire\User\UserDashboard;

use App\Http\Controllers\ProfilingController;

use App\Livewire\Auth\AuthContact;
use App\Livewire\Auth\AuthAbout;
use App\Livewire\Auth\AuthRegister;
use App\Livewire\Auth\AuthHomepage;
use App\Livewire\Auth\AuthLogin;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/homepage', AuthHomepage::class)->name('homepage');
Route::get('/login', AuthLogin::class)->name('login');  
Route::get('/register', AuthRegister::class)->name('register');
Route::get('/about', AuthAbout::class);
Route::get('/contact', AuthContact::class);

Route::get('/dashboard', UserDashboard::class);
Route::get('/profiling', UserProfiling::class);
Route::get('/assessment', UserAssessment::class);
Route::get('/report', UserReport::class);

Route::post('/profiling/submit', [ProfilingController::class, 'submit'])->name('profiling.submit');








  