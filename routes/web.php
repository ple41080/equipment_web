<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\DurablearticlesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Main_agencyController;
use App\Http\Controllers\Departments_smallController;
use App\Http\Controllers\BudgetsCintroller;
use App\Http\Controllers\HowtogetController;
use App\Http\Controllers\MaintainController;
use App\Http\Controllers\MaterialTypeController; 
use App\Http\Controllers\MaterialController; 
use App\Http\Controllers\Pick_materialController; 

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

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function () 
{
    Route::get('home', function () 
    {
        return view('home');
    });
    Route::get('home', function () 
    {
        return view('home');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// -----------------------------login----------------------------------------//
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// ------------------------------ register ---------------------------------//
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'storeUser'])->name('register');

// ----------------------------- forget password ----------------------------//
Route::get('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail'])->name('forget-password');
Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail'])->name('forget-password');

// ----------------------------- reset password -----------------------------//
Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'updatePassword']);

// ----------------------------- user profile ------------------------------//
Route::get('profile_user', [App\Http\Controllers\UserManagementController::class, 'profile'])->middleware('auth')->name('profile_user');
Route::post('profile/information/save', [App\Http\Controllers\UserManagementController::class, 'profileInformation'])->name('profile/information/save');

// ----------------------------- user userManagement บริหารจัดการผู้ใช้งาน -----------------------------//
Route::get('userManagement', [App\Http\Controllers\UserManagementController::class, 'index'])->middleware('auth')->name('userManagement');
Route::post('user/add/save', [App\Http\Controllers\UserManagementController::class, 'addNewUserSave'])->name('user/add/save');
Route::post('search/user/list', [App\Http\Controllers\UserManagementController::class, 'searchUser'])->name('search/user/list');
Route::post('update', [App\Http\Controllers\UserManagementController::class, 'update'])->name('update');
Route::post('user/delete/{id}', [App\Http\Controllers\UserManagementController::class, 'delete'])->middleware('auth')->name('user/delete/');
Route::get('activity/log', [App\Http\Controllers\UserManagementController::class, 'activityLog'])->middleware('auth')->name('activity/log');
Route::get('activity/login/logout', [App\Http\Controllers\UserManagementController::class, 'activityLogInLogOut'])->middleware('auth')->name('activity/login/logout');

// ----------------------------- Durablearticlest จัดการครุภัณฑ์-----------------------------//
Route::get('form/alldurablearticles', [App\Http\Controllers\DurablearticlesController::class, 'alldurablearticles'])->middleware('auth')->name('form/alldurablearticles');
Route::get('form/adddurablearticles', [App\Http\Controllers\DurablearticlesController::class, 'adddurablearticles'])->middleware('auth')->name('form/adddurablearticles');
Route::get('form/viewdurablearticles/{id}', [App\Http\Controllers\DurablearticlesController::class, 'profile_durablearticles'])->middleware('auth')->name('form/viewdurablearticles/');
Route::get('form/viewmenddurablearticles/{id}', [App\Http\Controllers\DurablearticlesController::class, 'viewmend_durablearticles'])->middleware('auth')->name('form/viewmenddurablearticles/');
Route::post('form/adddurablearticles/save', [App\Http\Controllers\DurablearticlesController::class, 'saveRecord'])->middleware('auth')->name('form/adddurablearticles/save');
Route::get('form/durablearticles/edit/{id}', [App\Http\Controllers\DurablearticlesController::class, 'editdurablearticles'])->middleware('auth')->name('form/durablearticles/edit/');
Route::post('form/adddurablearticles/update', [App\Http\Controllers\DurablearticlesController::class, 'updateRecord'])->middleware('auth')->name('form/adddurablearticles/update');
Route::get('form/adddurablearticles/delete/{id}', [App\Http\Controllers\DurablearticlesController::class, 'delete'])->middleware('auth')->name('form/adddurablearticles/delete/');


// ----------------------------- Category จัดการหมวดหมู่ครุภัณฑ์-----------------------------//
Route::get('form/all/category', [App\Http\Controllers\CategoryController::class, 'allcategory'])->middleware('auth')->name('form/all/category');
Route::post('form/all/category/save', [App\Http\Controllers\CategoryController::class, 'saveRecord'])->middleware('auth')->name('form/all/category/save');
Route::post('form/all/category/update', [App\Http\Controllers\CategoryController::class, 'updateRecord'])->middleware('auth')->name('form/all/category/update');

// ----------------------------- Main_agency จัดการหน่วยงานหลัก-----------------------------//
Route::get('form/all/main_agency', [App\Http\Controllers\Main_agencyController::class, 'allmain_agency'])->middleware('auth')->name('form/all/main_agency');
Route::post('form/all/main_agency/save', [App\Http\Controllers\Main_agencyController::class, 'saveRecord'])->middleware('auth')->name('form/all/main_agency/save');
Route::post('form/all/main_agency/update', [App\Http\Controllers\Main_agencyController::class, 'updateRecord'])->middleware('auth')->name('form/all/main_agency/update');

// ----------------------------- departments_small จัดการหน่วยงานย่อย-----------------------------//
Route::get('form/all/departments_small', [App\Http\Controllers\Departments_smallController::class, 'alldepartments_small'])->middleware('auth')->name('form/all/departments_small');
Route::post('form/all/departments_small/save', [App\Http\Controllers\Departments_smallController::class, 'saveRecord'])->middleware('auth')->name('form/all/departments_small/save');
Route::post('form/all/departments_small/update', [App\Http\Controllers\Departments_smallController::class, 'updateRecord'])->middleware('auth')->name('form/all/departments_small/update');



// -----------------------------budgets จัดการประเภทงบประมาณ-----------------------------//
Route::get('form/all/budgets', [App\Http\Controllers\BudgetsCintroller::class, 'index'])->middleware('auth')->name('form/all/budgets');
Route::post('form/all/budgets/save', [App\Http\Controllers\BudgetsCintroller::class, 'saveRecord'])->middleware('auth')->name('form/all/budgets/save');
Route::post('form/all/budgets/update', [App\Http\Controllers\BudgetsCintroller::class, 'updateRecord'])->middleware('auth')->name('form/all/budgets/update');

// -----------------------------howtoget จัดการวิธีได้มา-----------------------------//
Route::get('form/all/howtoget', [App\Http\Controllers\HowtogetController::class, 'allhowtoget'])->middleware('auth')->name('form/all/howtoget');




// -----------------------------maintain การซ่อมบำรุงครุภัณฑ์-----------------------------//
Route::get('form/all/maintain', [App\Http\Controllers\MaintainController::class, 'allmaintain'])->middleware('auth')->name('form/all/maintain');
Route::get('form/add/maintain', [App\Http\Controllers\MaintainController::class, 'addmaintain'])->middleware('auth')->name('form/add/maintain');
Route::get('form/edit/maintain/{id}', [App\Http\Controllers\MaintainController::class, 'editmaintain'])->middleware('auth')->name('form/edit/maintain/');
Route::get('form/edit/maintain/addhistory/{id}', [App\Http\Controllers\MaintainController::class, 'addhistory'])->middleware('auth')->name('form/edit/maintain/addhistory/');




  
// -----------------------------MaterialTypeController จัดการประเภทวัสดุ-----------------------------//
Route::get('form/all/materialtype', [App\Http\Controllers\MaterialTypeController::class, 'allmaterialtype'])->middleware('auth')->name('form/all/materialtype');
Route::post('form/store/materialtype/save', [App\Http\Controllers\MaterialTypeController::class, 'saveRecord'])->middleware('auth')->name('form/store/materialtype/save');
Route::post('form/store/materialtype/update', [App\Http\Controllers\MaterialTypeController::class, 'updateRecord'])->middleware('auth')->name('form/store/materialtype/update');


// -----------------------------MaterialTypeController จัดการทะเบียนวัสดุ-----------------------------//
Route::get('form/all/Material', [App\Http\Controllers\MaterialController::class, 'allMaterial'])->middleware('auth')->name('form/all/Material');
Route::get('form/Create/Material', [App\Http\Controllers\MaterialController::class, 'CreateMaterial'])->middleware('auth')->name('form/Create/Material');



