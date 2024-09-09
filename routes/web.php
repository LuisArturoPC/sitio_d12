<?php

use App\Http\Controllers\ContactoController;
use App\Models\Contacto;
use App\Models\contactos;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
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

route::get('/contacto', [ContactoController::class,'formulario']);
route::post('/contacto-recibe', [ContactoController::class, 'newContacto']);


    return redirect('/contacto');

