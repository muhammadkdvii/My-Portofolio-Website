<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Ubah route more-Services untuk memanggil method 'moreServices' di controller
Route::get('/more-Services', [HomeController::class, 'moreServices'])->name('moreServices');


Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.post');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    // Dashboard routes
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard.index');

    Route::get('/dashboard-skill', function () {
        return view('dashboard.skill');
    })->name('dashboard.skill');

    Route::get('/dashboard-service', function () {
        return view('dashboard.service');
    })->name('dashboard.service');

    Route::get('/dashboard-portofolio', function () {
        return view('dashboard.portofolio');
    })->name('dashboard.portofolio');

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