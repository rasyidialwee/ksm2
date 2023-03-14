<?php

use App\Http\Controllers\DocumentController;
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

// Route::get('/', function () {
//     return view('index', [
//         'name' => 'Abu',
//         'workplace' => 'Kementerian Sumber Manusia',
//     ]);
//     // // return view('welcome');
//     // // $x = 2;
//     // // $y = $x * 2;
//     // // return $x + $y;

//     // // view()
//     // // inertia()
//     // //livewire()

//     // return $data;
// });

Route::get('/', [DocumentController::class, 'index']);
Route::delete('documents/{document}', [DocumentController::class, 'destroy'])->name('documents.delete');
Route::get('documents/create', [DocumentController::class, 'create'])->name('documents.create');

// Route::method('url',response);
// response => function, controller,
