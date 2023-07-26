<?php

use App\Http\Controllers\ProfileController;
use App\Models\Budget;
use App\Models\Contractor;
use App\Models\Project;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});


Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'projects' => Project::getViewData(),
        'totalActiveBudget' => Budget::getTotalActiveBudget(),
        'totalActiveRemainingBudget' => Budget::getTotalActiveRemainingBudget(),
        'numOfActiveContractors' => Contractor::getNumOfActiveContractors(),
        'numOfActiveProjects' => Project::getNumOfActiveProjects()
    ]);
})->middleware(['auth', 'verified'])->name('Dashboard');

Route::get('/budgets', function () {

    return Inertia::render('Budgets', [
        'canLogin' => Route::has('login'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'budgets' => Budget::getViewData(),
        'totalActiveBudget' => Budget::getTotalActiveBudget(),
        'totalActiveRemainingBudget' => Budget::getTotalActiveRemainingBudget(),
        'numOfActiveContractors' => Contractor::getNumOfActiveContractors(),
        'numOfActiveProjects' => Project::getNumOfActiveProjects()
    ]);
})->middleware(['auth', 'verified'])->name('Budgets');

Route::get('/contractors', function () {

    return Inertia::render('Contractors', [
        'canLogin' => Route::has('login'),
        'contractors' => Contractor::getViewData(),
        'totalActiveBudget' => Budget::getTotalActiveBudget(),
        'totalActiveRemainingBudget' => Budget::getTotalActiveRemainingBudget(),
        'numOfActiveContractors' => Contractor::getNumOfActiveContractors(),
        'numOfActiveProjects' => Project::getNumOfActiveProjects()
    ]);
})->middleware(['auth', 'verified'])->name('Contractors');


//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
