<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PictureController;


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

Route::get('/', [PictureController::class, 'index']);

//Route to create and store picture. This point to Picture controller function create()
Route::get('pictures/create', 'PictureController@create');

Route::resources([
    'pictures' => PictureController::class,
]);

Route::post('/pictures/{picture}/upvote', [PictureController::class, 'upvote'])->name('pictures.upvote');

// Post request route to ping function store in PictureController upon submitting information
Route::post('/picture', 'PictureController@store');
