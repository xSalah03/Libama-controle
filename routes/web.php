<?php

use App\Http\Controllers\AppController;
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

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/', [AppController::class, 'index'])->name('Index');
Route:: get('Acceuil', [AppController::class, 'Acceuil'])->name('Acceuil');
Route:: get('Ajouter', [AppController::class, 'Ajouter'])->name('Ajouter');
Route:: get('Liste', [AppController::class, 'Liste'])->name('Liste');
Route:: post('/enregistrer', [AppController::class, 'enregistrer'])->name('enregistrer');
Route::delete('sup/{id',[CategoryController::class, 'sup'])->name('sup');