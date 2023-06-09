<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WEB\Home\HomeController;
use App\Http\Controllers\WEB\Reservas\ReservaController;
use App\Http\Controllers\WEB\Santander\SantanderController;

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


Route::redirect('/', '/es');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menu_adhara',[HomeController::class,'menu'])->name('menu.hotel');

Route::prefix('{locale}')->group(function ()
{
    Route::get('/',[HomeController::class,'index'])->name('inicio');
    Route::get('/rooms/{id}',[HomeController::class,'rooms'])->name('rooms');
    Route::get('/contact',[HomeController::class,'contact'])->name('contact');
    Route::get('/covid',[HomeController::class,'covid'])->name('covid');
    Route::get('/booking',[ReservaController::class,'index'])->name('booking');//se crearon 2 rutas de bookin para resolver el problema de que en el formulario al usar get se busca con la informacion de la consulta anterior
    Route::post('/booking',[ReservaController::class,'index'])->name('bookingP');// y que  con post al cambiar el idioma se recargaba la pagina y como ya no habia parametros en el requets fallaba
    Route::get('/accommodations',[AccommodationsController::class,'accommodations'])->name('accommodations');
    Route::get('/menu_adhara',[HomeController::class,'menu'])->name('menu.hotel');
    Route::get('/room_service',[HomeController::class,'roomService'])->name('room.service.hotel');
    Route::get('/grupos',[HomeController::class,'grupos'])->name('grupos.hotel');
    Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
    Route::get('/servicios',[HomeController::class,'servicios'])->name('servicios');
    Route::get('/hotel-detalles',[HomeController::class,'hotel'])->name('hotel.details');

    Route::get('/reservations',[ReservaController::class,'reservations'])->name('reservations');
    Route::get('/reserva-response/{id?}',[ReservaController::class,'response'])->name('response.reserva');
    Route::post('/reservas/booking',[ReservaController::class,'store'])->name('book.reserve');
    Route::post('/contact_mail',[HomeController::class,'postContact'])->name('contact_mail');
    Route::get('/test-mail',[HomeController::class,'mail'])->name('test_mail');


    #CLUBESTRELLA
    Route::post('get-user-clubestrella',[HomeController::class,'getUserC'])->name('get.clubestrella');
    Route::get('logout-clubestrella',[HomeController::class,'closeUserC'])->name('logout.clubestrella');

    Route::get('/test-response',[SantanderController::class,'testPost'])->name('test.response');
});

#Santander
Route::get('/santander/reserve',[SantanderController::class,'reserve'])->name('santander.response');
Route::post('/santander/reserve',[SantanderController::class,'store'])->name('santander.reserve');
Route::post('/santander/response',[SantanderController::class,'store'])->name('santander.result');


Route::post('/test-santander',[SantanderController::class,'testPost'])->name('santander.test');
