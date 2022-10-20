<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WEB\Home\HomeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::redirect('/', '/es');

Route::prefix('{locale}')->group(function () 
{
    Route::get('/',[HomeController::class,'index'])->name('inicio');
    Route::get('/rooms',[HomeController::class,'rooms'])->name('rooms');
    Route::get('/contact',[HomeController::class,'contact'])->name('contact');
    Route::get('/covid',[HomeController::class,'covid'])->name('covid');
    Route::get('/booking',[ReservasController::class,'index'])->name('booking');//se crearon 2 rutas de bookin para resolver el problema de que en el formulario al usar get se busca con la informacion de la consulta anterior 
    Route::post('/booking',[ReservasController::class,'index'])->name('bookingP');// y que  con post al cambiar el idioma se recargaba la pagina y como ya no habia parametros en el requets fallaba  
    Route::get('/accommodations',[AccommodationsController::class,'accommodations'])->name('accommodations');
    Route::get('/menu_restaurant',[HomeController::class,'menu'])->name('menu.hotel');
});
