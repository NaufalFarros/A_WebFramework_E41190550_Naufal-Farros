<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengalamanKerjaController ;


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

// Route::get('/', function () {
//     return view('welcome');
// });
//contoh route tanpa use direktori
// Route::get('/user','App\Http\Controllers\ManagementUserController@index');

// Route::get('/', [HomeController::class,'index']);
Route::get('/', [PagesController::class,'home'])->name('indexHome');
Route::get('/About', [PagesController::class,'About']);
Route::get('/User',[UserController::class,'index']);
Route::get('/User/cari',[UserController::class,'cari']);
Route::get('/User/Create',[UserController::class,'create']);
Route::get('/User/{id}',[UserController::class,'show']);
Route::delete('/User/{id}',[UserController::class,'destroy']);



Route::post('/User','App\Http\Controllers\UserController@store');


Route::any('/template', function () {
    return view('Layout.template');
});

// Route::resource('user', 'App\Http\Controllers\ManagementUserController');
Auth::routes();

Route::get('mahasiswa', function () {
    return view('index');
})->name('mahasiswa');


Route::get('/admin',[AdminController::class,'index'])->name('admin')->middleware('cekstatus');

// Route::get('pengalaman_kerja',[PengalamanKerjaController::class,'index']);
// Route::resource('pendidikan', PendidikanController::class);
Route::resource('pengalaman_kerja', PengalamanKerjaController::class );


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
