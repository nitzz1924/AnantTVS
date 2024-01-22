<?php
#-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserViewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [ViewController::class, 'dashboard'])->name('dashboard');
});


//View Routes
Route::get('/viewmaster', [ViewController::class, 'viewmaster'])->name('viewmaster');
Route::get('/viewsubmaster', [ViewController::class, 'viewsubmaster'])->name('viewsubmaster');
Route::get('/viewaddvehicle', [ViewController::class, 'viewaddvehicle'])->name('viewaddvehicle');
Route::get('/viewvehicles', [ViewController::class, 'viewvehicles'])->name('viewvehicles');
Route::get('/viewaddcustomer', [ViewController::class, 'viewaddcustomer'])->name('viewaddcustomer');
Route::get('/viewallcustomers', [ViewController::class, 'viewallcustomers'])->name('viewallcustomers');
Route::get('/viewbuyvehicles/{id}', [ViewController::class, 'viewbuyvehicles'])->name('viewbuyvehicles');
Route::get('/viewuservehicles/{id}', [ViewController::class, 'viewuservehicles'])->name('viewuservehicles');
Route::get('/viewvehicledetailpage/{id}', [ViewController::class, 'viewvehicledetailpage'])->name('viewvehicledetailpage');


//Store Routes
Route::post('/createmaster', [MasterController::class, 'createmaster'])->name('createmaster');
Route::post('/createsubmaster', [MasterController::class, 'createsubmaster'])->name('createsubmaster');
Route::post('/createvehicle', [StoreController::class, 'createvehicle'])->name('createvehicle');
Route::post('/createcustomer', [StoreController::class, 'createcustomer'])->name('createcustomer');
Route::post('/createbuyvehicle', [StoreController::class, 'createbuyvehicle'])->name('createbuyvehicle');
Route::post('/createlead', [StoreController::class, 'createlead'])->name('createlead');


//Delete Routes
Route::get('/deletemastercat/{id}/{type}', [MasterController::class, 'deletemaster'])->name('deletemaster');


//AJAX ROUTES
Route::get('/getmastercatajax/{selectedCat}', [MasterController::class, 'getmastercatajax'])->name('getmastercatajax');
Route::post('/updatestatus', [StoreController::class, 'updatestatus'])->name('updatestatus');
Route::get('/ajaxvehicleshow/{id}', [StoreController::class, 'ajaxvehicleshow'])->name('ajaxvehicleshow');
Route::get('/filtervehicle/{selectedtype}', [StoreController::class, 'filtervehicle'])->name('filtervehicle');

//Edit Routes
Route::get('/editcustomer/{id}', [EditController::class, 'editcustomer'])->name('editcustomer');
Route::post('/updatecustomer', [EditController::class, 'updatecustomer'])->name('updatecustomer');
Route::get('/editbuyvehicle/{id}', [EditController::class, 'editbuyvehicle'])->name('editbuyvehicle');
Route::post('/updatedocuments', [EditController::class, 'updatedocuments'])->name('updatedocuments');

//Frontend-Routes

Route::get('/home', [ViewController::class, 'frontendhomepage'])->name('frontendhomepage');
Route::get('/about', [ViewController::class, 'frontendaboutpage'])->name('frontendaboutpage');
Route::get('/contact', [ViewController::class, 'frontendcontactpage'])->name('frontendcontactpage');
Route::get('/vehicles', [ViewController::class, 'frontendvehiclespage'])->name('frontendvehiclespage');



//--------------------USER PANEL ROUTING--------------------------------------------------------

//view Routes
Route::get('/viewuserpanelhome', [ViewController::class, 'viewuserpanelhome'])->name('viewuserpanelhome');
Route::get('/viewloginpage', [ViewController::class, 'viewloginpage'])->name('viewloginpage');

Route::get('/viewuserprofile/{id}', [UserViewsController::class, 'viewuserprofile'])->name('viewuserprofile');
Route::get('/uservehicledetailview/{id}', [UserViewsController::class, 'uservehicledetailview'])->name('uservehicledetailview');
Route::get('/alluservehiclesview', [UserViewsController::class, 'alluservehiclesview'])->name('alluservehiclesview');
Route::get('/allvehicleslist', [UserViewsController::class, 'allvehicleslist'])->name('allvehicleslist');
Route::get('/paymentpage', [UserViewsController::class, 'paymentpage'])->name('paymentpage');


//Login Routes
Route::post('/loginuser', [AuthenticationController::class, 'loginuser'])->name('loginuser');
Route::get('/logoutuser', [AuthenticationController::class, 'logout'])->name('logoutuser');  //Admin
Route::get('/logoutuserpanel', [AuthenticationController::class, 'logoutuserpanel'])->name('logoutuserpanel');  //Admin

