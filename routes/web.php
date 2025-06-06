<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\FormCompanyController;
use App\Livewire\SendReminders;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PageController;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
});

Route::controller(FormController::class)->group(function () {
    Route::post('/form', 'store')->name('form.store');
});

Route::controller(FormCompanyController::class)->group(function () {
    Route::post('/form-company', 'store')->name('form.company.store');
});

Route::get('/register', function () {
    return redirect('/');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/company-manager', function () {
        return view('components.admin.company-manager');
    })->name('company-manager');
    Route::get('/reminders', SendReminders::class)->name('reminders');
});

Route::get('/register/export', [FormController::class,'export'])->name('export');

//***************************EXPERIENCIA TU HOGAR CON SENTIDO********************************//
Route::get('/experiencia', [PageController::class, 'index'])->name("index");

Route::match(["GET", "POST"], "/final-site", function (Request $request) {
    if ($request->isMethod("POST")) {
        //Si es POST, se maneja la lógica de la funcion finalSite
        return app(PageController::class)->finalSite($request);
    } else {
        //Si es un GET, redirige a la página principal
        return redirect()->route("index");
    }
})->name("finalSite.store");

Route::get('/final-site/{slug}', [PageController::class, 'show'])->name("finalSite.show");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get("/generated-pages", [PageController::class, "pages"])->name("pages.index");
});
