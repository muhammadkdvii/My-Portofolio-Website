<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HireController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Ubah route more-Services untuk memanggil method 'moreServices' di controller
Route::get('/more-Services', [HomeController::class, 'moreServices'])->name('moreServices');

Route::post('/hire', [HireController::class, 'store'])->name('hire.store');

Route::get('/download-cv', function () {
    return response()->download(public_path('assets1/cv/(CV) Muhammad Kadavi.pdf'));
})->name('download.cv');


Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.post');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    // Route untuk Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Route untuk Menampilkan dan Mengelola Data Hire
Route::get('/hire/create', [HireController::class, 'create'])->name('hire.create');
Route::get('/hire/{id}/edit', [HireController::class, 'edit'])->name('hire.edit');
Route::put('/hire/{id}', [HireController::class, 'update'])->name('hire.update');
Route::delete('/hire/{id}', [HireController::class, 'destroy'])->name('hire.destroy');

            // Portofolio routes
        Route::prefix('dashboard-portofolio')->group(function () {
            Route::get('/', [PortofolioController::class, 'index'])->name('dashboard.portofolio');
            Route::get('/create', [PortofolioController::class, 'create'])->name('dashboard.page-editable.portofolio.tambah');
            Route::post('/store', [PortofolioController::class, 'store'])->name('dashboard.portofolio.store');
            Route::get('/edit/{portofolio}', [PortofolioController::class, 'edit'])->name('dashboard.page-editable.portofolio.edit');
            Route::put('/update/{portofolio}', [PortofolioController::class, 'update'])->name('dashboard.portofolio.update');
            Route::delete('/delete/{portofolio}', [PortofolioController::class, 'destroy'])->name('dashboard.portofolio.delete');
            Route::get('/lihat/{id}', [PortofolioController::class, 'show'])->name('dashboard.portofolio.show');
        });


    
      // Service CRUD
      Route::prefix('dashboard-service')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('dashboard.service');
        Route::get('/create', [ServiceController::class, 'create'])->name('dashboard.service.create');
        Route::post('/store', [ServiceController::class, 'store'])->name('dashboard.service.store');
        Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('dashboard.service.edit');
        Route::put('/update/{id}', [ServiceController::class, 'update'])->name('dashboard.service.update');
        Route::delete('/delete/{id}', [ServiceController::class, 'destroy'])->name('dashboard.service.delete');
        Route::get('/lihat/{id}', [ServiceController::class, 'show'])->name('dashboard.service.show');
    });


    //route skill

    Route::prefix('dashboard-skill')->group(function () {
        Route::get('/', [SkillController::class, 'index'])->name('dashboard.skill');
        Route::get('/create', [SkillController::class, 'create'])->name('dashboard.skill.create');
        Route::post('/store', [SkillController::class, 'store'])->name('dashboard.skill.store');
        Route::get('/edit/{id}', [SkillController::class, 'edit'])->name('dashboard.skill.edit');
        Route::put('/update/{id}', [SkillController::class, 'update'])->name('dashboard.skill.update');
        Route::delete('/delete/{id}', [SkillController::class, 'destroy'])->name('dashboard.skill.delete');
        Route::get('/lihat/{id}', [SkillController::class, 'show'])->name('dashboard.skill.lihat');
    });

});