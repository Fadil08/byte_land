<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\loginAdmin;
use App\Http\Controllers\auth\RegisterAdmin;
use App\Http\Controllers\blogControler;
use App\Http\Controllers\jualTanahControler;
use App\Models\Tanah;
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
//     return view('layouts.login');
// });
Route::get('/', function () {
    return view('layouts.index',[
        'tanah'=>Tanah::all()
        
    ]);
});
// Route::get('/', [jualTanahControler::class, 'viewproduct']); 
// Route::get('/prudu', [jualTanahControler::class, 'viewproduct']); 

// Route::get('/admin', [AdminController::class, 'showDasboard']); 
Route::get('/showdetails/{id}', [blogControler::class, 'showdetails']); 

// Route::get('/admin',[AdminController::class,'show']);
// Route::get('/admin/tanah',[AdminController::class,'show']);

// Route::get('/dasboa',[AdminController::class,'show']);

// Route::get('/admin/pemilik',[AdminController::class,'showPemilik']);

Route::get('/login',[loginAdmin::class,'showLogin']);

Route::post('/login-action',[loginAdmin::class,'auth']);

Route::get('/register',[RegisterAdmin::class,'showRegis']);



Route::post('/register-login',[RegisterAdmin::class,'register']);

// Route::get('/tanah/edit/{id}',[AdminController::class,'edit']);


Route::post('/edit-tanah',[AdminController::class,'prosesEdit']);

Route::post('/hapus-tanah{id}',[AdminController::class,'hapus']);

#pemilik

// Route::get('/admin/pemilik/tambah',[AdminController::class,'viewAddPemilik']);

// Route::post('/tambah-pemilik',[AdminController::class,'prosesAddPemilik']);
// Route::post('/hapus-pemilik/{id}',[AdminController::class,'hapusPemilik']);

// Route::get('/admin/pemilik',[AdminController::class,'showPemilik']);
// Route::get('/popUp/{id}',[blogControler::class,'showpopUp']);
// Route::get('/popup-closed', function()
// {
//     return back();
// });
// Route::get();
#home
Route::post('/tambah-tanah',[AdminController::class,'prosesTambah']);
// Route::get('/',[jualTanahControler::class,'showPemilik']);
Route::get('/logout',[loginAdmin::class,'logout']);
Route::middleware(['auth',])->group(function (){
    Route::get('/admin', [AdminController::class, 'showDasboard']); 
    Route::get('/admin/pemilik',[AdminController::class,'showPemilik']);
    Route::get('/admin/tanah/tambah',[AdminController::class,'tambah']);
    Route::get('/admin/pemilik/tambah',[AdminController::class,'viewAddPemilik']);
    Route::post('/tambah-pemilik',[AdminController::class,'prosesAddPemilik']);
    Route::post('/hapus-pemilik/{id}',[AdminController::class,'hapusPemilik']);
    Route::post('/edit-pemilik',[AdminController::class,'editPemilik']);
    Route::get('/admin/tanah/edit/{id}',[AdminController::class,'edit']);
    // Route::get('/admin/pemilik',[AdminController::class,'showPemilik']);
    Route::get('/admin',[AdminController::class,'show']);
    Route::get('/admin/tanah',[AdminController::class,'show']);
    Route::get('/admin/pemilik/edit/{id}',[AdminController::class,'viewEditPemilik']);

});