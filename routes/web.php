<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\Registration;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', [Registration::class,'view_properties_for_sale']);// {
    // return view('welcome');
// });
Route::middleware(['auth:sanctum', 'verified'])->get('/display', [Registration::class,'viewaallusers'])->name('display');

Route::get('forrent', [Registration::class,'view_properties_for_rent']);



Route::get('/form', function () {
    return view('dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Route::group(['middleware' => ['web']], function () {
//     Route::get('storage/{filename}', function ($filename) {
//         // $userid = session()->get('user')->id;
//         return Storage::get($filename);
//     });
// });
Route::middleware(['auth:sanctum', 'verified'])->get('/display', [Registration::class,'viewaallusers'])->name('display');// will display all users
Route::middleware(['auth:sanctum', 'verified'])->post('display/{id}', [Registration::class,'update']);//this path will be used to take updated values
Route::middleware(['auth:sanctum', 'verified'])->post('users/userdeleted', [Registration::class,'deleteuser']);

Route::middleware(['auth:sanctum', 'verified'])->get('/show/{id}',[Registration::class,'viewshow']);// to display user and plot information
Route::middleware(['auth:sanctum', 'verified'])->get('/edit/{id}',[Registration::class,'viewedit']);//to open the page where user and plot information will be edited
Route::middleware(['auth:sanctum', 'verified'])->get('/showphotos/{id}',[Registration::class,'viewphotos']);//to get a preview of plot photos
Route::middleware(['auth:sanctum', 'verified'])->get('/showfile/{id}',[Registration::class,'viewfile']);//to get a preview of plot file
Route::middleware(['auth:sanctum', 'verified'])->post('uploadphotos',[Registration::class,'uploadphotos']);//to add more photos in existing plot photos
Route::middleware(['auth:sanctum', 'verified'])->get('removephoto/{id}/{photoid}',[Registration::class,'removephotos']);//to remove single photo

Route::middleware(['auth:sanctum', 'verified'])->get('/userstatus/{id}/{statusvalue}',[Registration::class,'updateuserstatus']);//to update user status






Route::get('products/create',[ProductController::class,'viewcreate']);

Route::get('products/edit/{id}',[ProductController::class,'viewedit']);

Route::get('products/index',[ProductController::class,'viewindex']);
Route::get('products/show/{id}',[ProductController::class,'viewshow']);
Route::post('products/productdeleted', [ProductController::class,'deleteproduct']);
Route::post('products/productcreated', [ProductController::class,'savenewproduct']);
Route::post('products/show/{id}', [ProductController::class,'savenewproduct']);
