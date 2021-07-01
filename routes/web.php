<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Freelancer\freelancerController;
use App\Http\Controllers\Employer\employerController;

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
    return view('frontend.home');
})->name('home');

Route::group(['prefix' => 'employer'], function () {
    Route::get('/',[employerController::class,'desktab'])->name('employer.desktab');
    Route::get('/login',[employerController::class,'login'])->name('employer.login');
    Route::post('/login',[employerController::class,'dologin'])->name('employer.dologin');
    Route::get('/register',[employerController::class,'register'])->name('employer.register');
    Route::post('/register',[employerController::class,'doregister'])->name('employer.doregister');
    Route::get('/edit',[employerController::class,'edit'])->name('employer.edit');
    Route::post('/edit',[employerController::class,'doedit'])->name('employer.doedit');
    Route::get('/add_project',[employerController::class,'add_project'])->name('employer.add_project');
    Route::post('/add_project',[employerController::class,'doadd_project'])->name('employer.doadd_project');
    Route::get('/project_list',[employerController::class,'project_list'])->name('employer.project_list');
    Route::get('/delete',[freelancerController::class,'delete'])->name('employer.delete');
    Route::get('/logout',[employerController::class,'logout'])->name('employer.logout');
});

Route::group(['prefix' => 'freelancer'], function () {
    Route::get('/',[freelancerController::class,'desktab'])->name('freelancer.desktab');
    Route::get('/login',[freelancerController::class,'login'])->name('freelancer.login');
    Route::post('/login',[freelancerController::class,'dologin'])->name('freelancer.dologin');
    Route::get('/register',[freelancerController::class,'register'])->name('freelancer.register');
    Route::post('/register',[freelancerController::class,'doregister'])->name('freelancer.doregister');
    Route::get('/delete',[freelancerController::class,'delete'])->name('freelancer.delete');
    Route::get('/edit',[freelancerController::class,'edit'])->name('freelancer.edit');
    Route::post('/edit',[freelancerController::class,'doedit'])->name('freelancer.doedit');
    Route::get('/cv',[freelancerController::class,'cv'])->name('freelancer.cv');
    Route::get('/project_list',[freelancerController::class,'project_list'])->name('freelancer.project_list');
    Route::get('/logout',[freelancerController::class,'logout'])->name('freelancer.logout');
});

Route::group(['prefix' => 'chat'], function () {
    Route::get('/get',[freelancerController::class,'chat'])->name('chat.get');
    Route::post('/send',[freelancerController::class,'dochat'])->name('freelancer.chat');
});
