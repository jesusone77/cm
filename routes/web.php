<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

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
    return redirect('autors');
});

 
Route::resource('books', BookController::class)
    ->missing(function (Request $request) {
    return Redirect::route('books.index');
});

Route::resource('autors', AutorController::class)
    ->missing(function (Request $request) {
    return Redirect ('autor.index');
});

//Agregar 

Route::view('/agregarAutorForm','components.forms.inputAutor');


// Route::get('/actualizarAutorForm', function()
// {
//     return View::make('components.forms.updateAutor', array('name' => 'Taylor'));
// });
