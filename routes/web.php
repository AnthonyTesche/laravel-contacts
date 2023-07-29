<?php

use App\Http\Controllers\ContactsController;
use App\Models\Contacts;
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

Route::get('/', [ContactsController::class, 'index']);

Route::get('/contacts/create', [ContactsController::class, 'create']);

Route::post('/contacts', [ContactsController::class, 'store']);

Route::get('/contacts/{contacts}', [ContactsController::class, 'show']);
