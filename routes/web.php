<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Products;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AdminController;

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
    $Services = Products::where('Category', 'Services')->get();

    // Fetch the latest 7 products that are not categorized as 'Services'
    $latestProducts = Products::where('Category', '!=', 'Services')
                              ->latest()
                              ->take(7)
                              ->get();

    // Pass both variables to the view
    return view('home', compact('Services', 'latestProducts'));
})->name('home');

Route::get('/AdminLogin',function(){
    return view('index');
})->name('AdminLogin');

// Pages
Route::get('/about',[App\Http\Controllers\ProductsController::class,'ShowAbout'])->name('about');
Route::get('/service',[App\Http\Controllers\ProductsController::class,'ShowService'])->name('service');
Route::get('/product',[App\Http\Controllers\ProductsController::class,'ShowProduct'])->name('product');
Route::get('/contact',[App\Http\Controllers\ProductsController::class,'ShowContact'])->name('contact');
Route::get('/vaccine',[App\Http\Controllers\ProductsController::class,'ShowVaccine'])->name('vaccine');
Route::get('/getPetsByUniqueId/{uniqueId}', [App\Http\Controllers\PetsController::class, 'getPetsByUniqueId']);

// PagesEnd




use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/sales-report', [App\Http\Controllers\DashboardController::class, 'getRange'])->middleware(['auth', 'verified'])->name('dashboard.salesReport');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('adduser',[App\Http\Controllers\Auth\AdminController::class,'create'])->name('addcashier');
    Route::post('adduser',[App\Http\Controllers\Auth\AdminController::class,'store']);

    // Pos apis and multi user apis
    Route::Post('/store', [App\Http\Controllers\ProductsController::class, 'store'])->name('store');
Route::get('/edit1/{id}', [App\Http\Controllers\ProductsController::class, 'edit1'])->name('edit1');
Route::get('/edit2/{id}', [App\Http\Controllers\Auth\AdminController::class, 'edit2'])->name('edit2');
Route::get('/delete/{id}', [App\Http\Controllers\ProductsController::class, 'destroy'])->name('delete');
Route::Post('/update',[App\Http\Controllers\ProductsController::class,'update'])->name('update');
Route::Post('/updateUser',[App\Http\Controllers\Auth\AdminController::class,'update'])->name('updateuser');
Route::post('/', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::get('/bill',[App\Http\Controllers\BillController::class, 'bill'])->name('bill');
Route::get('/show', [App\Http\Controllers\HomeController::class, 'show'])->name('show');
Route::Post('/Add', [App\Http\Controllers\BillController::class, 'addToBill'])->name('Add');
Route::Post('/showBill', [App\Http\Controllers\BillController::class, 'showBill'])->name('showBill');
Route::get('deleteb/{id}', [App\Http\Controllers\BillController::class, 'deleteBill'])->name('deleteBill');
Route::post('/UpdateBill', [App\Http\Controllers\BillController::class, 'UpdateBill'])->name('UpdateBill');
Route::get('/Sell/{action?}', [App\Http\Controllers\BillController::class, 'sell'])->name('Sell');
Route::get('/St', [App\Http\Controllers\BillController::class, 'testPdfGeneration'])->name('test');
Route::get('/ShowSold', [App\Http\Controllers\SoldController::class, 'show'])->name('ShowSold');
Route::get('/product/detail/{id}', [App\Http\Controllers\ProductsController::class, 'Detail'])->name('detail');
Route::get('/getUpdatedBill', [App\Http\Controllers\BillController::class, 'getUpdatedBill'])->name('getUpdatedBill');

// routes/web.php
Route::get('/getTotalQuantity/{productId}',[App\Http\Controllers\ProductsController::class,'getTotalQuantity'])->name('getTotalQuantity');
Route::post('/InputQuantity', [App\Http\Controllers\BillController::class, 'updateQuantity'])->name('UpdateQ');
Route::get('barcode',[App\Http\Controllers\ProductsController::class,'Barcode'])->name('barcode');
Route::get('deleteuser/{id}', [App\Http\Controllers\Auth\AdminController::class, 'destroy'])->name('deleteuser');
Route::get('Login/{id}', [App\Http\Controllers\Auth\AdminController::class, 'UserLogin'])->name('loginuser');
// end apis
// Owner APi's
Route::Post('/storeOwner', [App\Http\Controllers\ClientController::class, 'store'])->name('storeOwner');
Route::get('/editOwner/{id}', [App\Http\Controllers\ClientController::class, 'editOwner'])->name('editOwner');
Route::get('/deleteOwner/{id}', [App\Http\Controllers\ClientController::class, 'destroyOwner'])->name('deleteOwner');
Route::Post('/updateOwner',[App\Http\Controllers\ClientController::class,'update'])->name('updateOwner');
Route::get('/Owner',[App\Http\Controllers\ClientController::class,'Owner'])->name('Owner');
// In web.php or api.php
Route::get('/getOwners', [App\Http\Controllers\ClientController::class, 'getOwners'])->name('getOwners');


// End Owners API's
// Pets APi's
Route::Post('/storePet', [App\Http\Controllers\PetsController::class, 'store'])->name('storePet');
Route::get('/editPet/{id}', [App\Http\Controllers\PetsController::class, 'editPet'])->name('editPet');
Route::get('/deletePet/{id}', [App\Http\Controllers\PetsController::class, 'destroyPet'])->name('deletePet');
Route::Post('/updatePet',[App\Http\Controllers\PetsController::class,'update'])->name('updatePet');
Route::get('/Pet',[App\Http\Controllers\PetsController::class,'Pet'])->name('Pet');

// End Pets API's

// History APi's
Route::Post('/storeHistory', [App\Http\Controllers\HistoryController::class, 'store'])->name('storeHistory');
Route::get('/editHistory/{id}', [App\Http\Controllers\HistoryController::class, 'editHistory'])->name('editHistory');
Route::get('/deleteHistory/{id}', [App\Http\Controllers\HistoryController::class, 'destroyHistory'])->name('deleteHistory');
Route::Post('/updateHistory',[App\Http\Controllers\HistoryController::class,'update'])->name('updateHistory');
Route::get('/vaccine-detail/{id}', [App\Http\Controllers\HistoryController::class, 'VaccineDetail'])->name('vaccineDetail');

// End Pets API's
// Bill Routes for Vacination modal
Route::get('/getOwners1', [App\Http\Controllers\BillController::class, 'getOwners1']);
Route::get('/getPets/{ownerId}',  [App\Http\Controllers\BillController::class, 'getPets']);
Route::get('/getVaccines',  [App\Http\Controllers\BillController::class, 'getVaccines']);

// route for user update
Route::Post('/updateUser',[App\Http\Controllers\Auth\AdminController::class,'update'])->name('updateuser');
Route::get('/edit2/{id}', [App\Http\Controllers\Auth\AdminController::class, 'edit2'])->name('edit2');
// route for reports


});

require __DIR__.'/auth.php';
