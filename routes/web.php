<?php

use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\SegundoControlador;
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

/*
Route::get('/test', function () {
    return ('Bienvenidos a L aravel');
});*/

/*Route::get('/test', function () {
    return view('test');
});*/

/*Route::get('/crud', function () {
    $age = 24;
    $data = ['name' => 'David', 'age' => $age];

    return view('crud/index', $data);
})->name('crud');*/

/*Route::get('/contact', function () {

    $data = ['name' => 'David'];
    return view('contact', $data);
    //return redirect('/contact2');
})->name('contact');*/

/*Route::get('/contact', function () {

    $name = 'name';
    $num = '3';
    return view('contact', ['name' => $name, 'num' => $num]);
})->name('contact');
*/
Route::get('/contact2', function () {
    return view('contact2');
})->name('contact2');

//Route::get('test', [PrimerControlador::class, 'index']);
//Route::get('test2', [\App\Http\Controllers\SegundoControlador::class, 'index']);
//Route::resource('post', PrimerControlador::class);
Route::get('otro/{post?}/{otro?}', [PrimerControlador::class, 'otro']);
