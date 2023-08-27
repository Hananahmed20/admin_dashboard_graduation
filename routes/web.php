<?php

use App\Http\Controllers\FirebaseController;
use Illuminate\Support\Facades\Route;
 use Illuminate\Http\Request;
use Kreait\Firebase\Database;
 use Kreait\Firebase\Factory;
 use Kreait\Firebase\ServiceAccount;
 use Kreait\Firebase\Storage;

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

Route::get('register', function () {
    return view('register');
});
Route::get('login.html', function () {
    return view('login');
});
     
Route::get('Books', [FirebaseController::class, 'index']);
Route::get('Orders', [FirebaseController::class, 'getOrders']);

Route::post('store_book', [FirebaseController::class, 'store']);
Route::get('add-book', [FirebaseController::class, 'create']);

Route::get('add_cat', [FirebaseController::class, 'add_cat']);
Route::post('store_cat', [FirebaseController::class, 'store_cat']);

Route::get('send-book/{id}', [FirebaseController::class, 'send']);

Route::get('edit-book/{id}', [FirebaseController::class, 'edit']);
Route::put('update-book/{id}', [FirebaseController::class, 'update']);

Route::get('delete-book/{id}', [FirebaseController::class, 'destroy']);

Route::get('/books/category/{category}', [FirebaseController::class,'showBooksByCategory']);
Route::get('books/all', 'FirebaseController@showAllBooks');
