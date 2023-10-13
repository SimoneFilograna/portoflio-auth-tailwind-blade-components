<?php

use App\Http\Controllers\ProjectController as GuestController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [GuestController::class, "index"])->name("guests.welcome");

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'verified'])
    ->prefix("admin")
    ->name("admin.")
    ->group(function(){
        
        //create
        Route::get("/projects/create", [ProjectController::class, "create"])->name("projects.create");
        Route::post("/projects", [ProjectController::class, "store"])->name("projects.store");

        //read
        Route::get("/projects/index", [ProjectController::class, "index"])->name("projects.index");
        Route::get("/projects/{project}", [ProjectController::class, "show"])->name("projects.show");

        //update
        Route::get("/projects/{project}/edit", [ProjectController::class, "edit"])->name("projects.edit");
        Route::match(["put", "patch"], "/projects/{project}", [ProjectController::class, "update"])->name("projects.update");

        //delete
        Route::delete("/projects/{project}", [ProjectController::class, "destroy"])->name("projects.destroy");
    });



Route::middleware('auth')->group(function () {
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

require __DIR__.'/auth.php';
