<?php

use Illuminate\Support\Facades\Route;
use App\Models\TodoItem;

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

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    $items = TodoItem::latest()->get();
    return view('dashboard',compact(['items']));
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'dashboard'], function(){
    Route::resource('items', 'TodoItemController');
});

require __DIR__.'/auth.php';
