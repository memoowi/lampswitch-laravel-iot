<?php

use App\Livewire\LampComponent;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/lamp', LampComponent::class);
Route::get('/', [LampComponent::class, 'render2']);

Livewire::setScriptRoute(function ($handle) {
    return Route::get('/LampSensor/public/livewire/livewire.js', $handle);
});
Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/LampSensor/public/livewire/update', $handle);
});
