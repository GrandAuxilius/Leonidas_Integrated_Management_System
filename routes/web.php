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

use App\Http\Controllers\staffUsersController;
Route::get('/staffUsers', [staffUsersController::class, 'showstaffUsers']);

use App\Http\Controllers\MenuListController;
Route::get('/menuList', [MenuListController::class, 'showMenuList']);

