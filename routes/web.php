<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BranchController;
Route::get('/branch',[BranchController:: class,'showBranches']);

use App\Http\Controllers\SignInController;
Route::get('/sign_in',[SignInController:: class,'showsignIn']);

use App\Http\Controllers\staffUsersController;

Route::get('/staffUsers', [staffUsersController::class, 'showstaffUsers']);
