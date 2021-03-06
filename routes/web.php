<?php


use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

Route::group(['prefix' => 'dashboard','middleware' => 'auth'], function(){
  Route::get('/index', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
});

Route::group(['prefix' => 'user','middleware' => 'auth'], function(){
    Route::get('/index', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::post('/Store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::delete('/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');
    Route::get('/update/{id}', [App\Http\Controllers\UserController::class, 'update']);
    
});


Route::group(['prefix' => 'role','middleware' => 'auth'], function(){
  Route::get('/index', [App\Http\Controllers\RolesController::class, 'index'])->name('role.index');
  Route::post('/Store', [App\Http\Controllers\RolesController::class, 'store'])->name('role.store');
  Route::delete('/delete/{id}', [App\Http\Controllers\RolesController::class, 'delete'])->name('role.delete');
});

Route::group(['prefix' => 'permission','middleware' => 'auth'], function(){
  Route::get('/index', [App\Http\Controllers\PermissionController::class, 'index'])->name('permission.index');
  Route::post('/Store', [App\Http\Controllers\PermissionController::class, 'store'])->name('permission.store');
  Route::delete('/delete/{id}', [App\Http\Controllers\PermissionController::class, 'delete'])->name('permission.delete');
});

//patient module

Route::group(['prefix' => 'patient','middleware' => 'auth'], function(){
 
  Route::get('/index', [App\Http\Controllers\PatientController::class, 'index'])->name('patient.index');
  Route::get('/create', [App\Http\Controllers\PatientController::class, 'create'])->name('patient.create');
  Route::get('/initial', [App\Http\Controllers\PatientController::class, 'initial'])->name('patient.initial');
  Route::post('/save', [App\Http\Controllers\PatientController::class, 'save'])->name('patient.save');
  Route::get('/edit/{id}', [App\Http\Controllers\PatientController::class, 'edit'])->name('patient.edit');
  Route::post('/update', [App\Http\Controllers\PatientController::class, 'update'])->name('patient.update');
  Route::get('/view/{id}', [App\Http\Controllers\PatientController::class, 'view'])->name('patient.view');
  Route::post('/delete/{id}', [App\Http\Controllers\PatientController::class, 'delete'])->name('patient.delete');
 
});


Route::group(['prefix' => 'department','middleware' => 'auth'], function(){
  Route::get('/index', [App\Http\Controllers\DepartmentController::class, 'index'])->name('department.index');
  Route::post('/Store', [App\Http\Controllers\DepartmentController::class, 'store'])->name('department.store');
  Route::delete('/delete/{id}', [App\Http\Controllers\DepartmentController::class, 'delete'])->name('department.delete');
});

Route::group(['prefix' => 'consultation','middleware' => 'auth'], function(){
  Route::get('/index', [App\Http\Controllers\ConsultationController::class, 'index'])->name('consultation.index');
  Route::get('/create/{id}', [App\Http\Controllers\ConsultationController::class, 'create'])->name('consultation.create');
  Route::post('/store', [App\Http\Controllers\ConsultationController::class, 'store'])->name('consultation.store');
  Route::get('/show/{id}', [App\Http\Controllers\ConsultationController::class, 'show'])->name('consultation.show');
});

Auth::routes();
Route::group(['prefix' => 'intervention','middleware' => 'auth'], function(){
  Route::get('/index', [App\Http\Controllers\InterventionController::class, 'index'])->name('intervention.index');
  Route::get('/create/{id}', [App\Http\Controllers\InterventionController::class, 'create'])->name('intervention.create');
  Route::post('/store', [App\Http\Controllers\InterventionController::class, 'store'])->name('intervention.store');
  Route::get('/show/{id}', [App\Http\Controllers\InterventionController::class, 'show'])->name('intervention.show');
});
//Route::get('/patient/index', 'PatientController@index')->name('patient.index');