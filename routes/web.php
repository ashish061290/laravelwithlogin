<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\company\CompanyController;
use App\Http\Controllers\Admin\employee\EmployeeController;
use App\Http\Controllers\Admin\report\ReportController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;

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
Route::get('/',function(){
    return view('welcome');
});
/*--- employee app  ---*/
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('auth')->middleware('guest:admin')->group(function (){
        Route::get('/', [AuthenticatedSessionController::class,'create'])->name('login');
        Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('adminlogin');
    });
    Route::middleware('admin')->group(function(){
        Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
        //comany route
        Route::namespace('company')->prefix('company')->name('company.')->group(function(){
        Route::get('companydetail',[CompanyController::class,'index'])->name('detail');
        Route::post('companycreate',[CompanyController::class,'CompanyCreate'])->name('create');
        });
        //company route end
        Route::namespace('employee')->prefix('employee')->name('employee.')->group(function(){
        Route::get('employeedetail',[EmployeeController::class,'index'])->name('detail');
           });
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
        Route::get('logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');
   
    
});

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('dashboard',[UserController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/user/profile', [ProfileController::class, 'edit'])->name('user.profile.edit');
    Route::patch('/user/profile', [ProfileController::class, 'update'])->name('user.profile.update');
    Route::delete('/user/profile', [ProfileController::class, 'destroy'])->name('user.profile.destroy');
});
require __DIR__.'/auth.php';
