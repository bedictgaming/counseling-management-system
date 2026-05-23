<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Welcome / Gateway Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Central Traffic Controller Route after login
Route::get('/dashboard', function () {
    $user = auth()->user();
    
    if ($user->role === 'admin') {
        return redirect()->route('admin.dashboard');
    } elseif ($user->role === 'counselor') {
        return redirect()->route('counselor.dashboard');
    }
    
    return redirect()->route('student.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// --- ACCESS CONTROLLED DASHBOARDS ---

// Admin-only Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Counselor-only Routes
Route::middleware(['auth', 'role:counselor'])->group(function () {
    Route::get('/counselor/dashboard', function () {
        return view('counselor.dashboard');
    })->name('counselor.dashboard');
});

// Student-only Routes
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/student/dashboard', function () {
        return view('student.dashboard');
    })->name('student.dashboard');
});


// Profile routes managed by Laravel Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';