<?php
#-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --
use App\Http\Controllers\MasterController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//View Routes
Route::get('/viewmaster', [ViewController::class, 'viewmaster'])->name('viewmaster');
Route::get('/viewsubmaster', [ViewController::class, 'viewsubmaster'])->name('viewsubmaster');
Route::get('/viewaddvehicle', [ViewController::class, 'viewaddvehicle'])->name('viewaddvehicle');
Route::get('/viewvehicles', [ViewController::class, 'viewvehicles'])->name('viewvehicles');
Route::get('/viewaddcustomer', [ViewController::class,'viewaddcustomer'])->name('viewaddcustomer');
Route::get('/viewallcustomers', [ViewController::class,'viewallcustomers'])->name('viewallcustomers');
Route::get('/viewbuyvehicles/{id}', [ViewController::class,'viewbuyvehicles'])->name('viewbuyvehicles');



//Store Routes
Route::post('/createmaster', [MasterController::class, 'createmaster'])->name('createmaster');
Route::post('/createsubmaster', [MasterController::class, 'createsubmaster'])->name('createsubmaster');
Route::post('/createvehicle', [StoreController::class, 'createvehicle'])->name('createvehicle');
Route::post('/createcustomer', [StoreController::class,'createcustomer'])->name('createcustomer');
Route::post('/createbuyvehicle',[StoreController::class,'createbuyvehicle'])->name('createbuyvehicle');


//Delete Routes
Route::get('/deletemaster/{id}/{type}', [MasterController::class, 'deletemaster'])->name('deletemaster');


//AJAX ROUTES
Route::get('/getmastercatajax/{selectedCat}', [MasterController::class, 'getmastercatajax'])->name('getmastercatajax');
Route::post('/updatestatus', [StoreController::class, 'updatestatus'])->name('updatestatus');
Route::get('/ajaxvehicleshow/{id}',[StoreController::class, 'ajaxvehicleshow'])->name('ajaxvehicleshow');
Route::get('/filtervehicle/{selectedtype}',[StoreController::class,'filtervehicle'])->name('filtervehicle');

