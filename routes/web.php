<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WithdrawController;
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
    return view('guest.index');
});

//Route for the guest pages which are: home page, about, plan and sign up and sign in page.
Route::get('about', [GuestController::class, 'about'])->name('about');
Route::get('plans', [GuestController::class, 'plans'])->name('plans');
Route::get('login', [GuestController::class, 'login'])->name('login');
Route::get('register', [GuestController::class, 'register'])->name('register');


//Route for register, login and logout, forget password page
Route::post('auth/register', [AuthController::class, 'register'])->name('auth/register');
Route::post('auth/login', [AuthController::class, 'login'])->name('auth/login');
Route::get('password', [AuthController::class, 'password']);
Route::get('auth/logout', [AuthController::class, 'logout']);

Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('invest', [UserController::class, 'invest'])->name('invest');
Route::get('coincloud', [UserController::class, 'coincloud'])->name('coincloud');
Route::get('bitpay', [UserController::class, 'bitpay'])->name('bitpay');
Route::get('dogecoin', [UserController::class, 'dogecoin'])->name('dogecoin');
Route::get('ethereum', [UserController::class, 'ethereum'])->name('ethereum');

Route::get('withdraw', [UserController::class, 'withdraw'])->name('withdraw');
Route::get('withdraw_method', [UserController::class, 'method'])->name('withdraw/method');
Route::get('bank_withdraw', [UserController::class, 'bank'])->name('bank_withdraw');


Route::post('invest/coincloud', [InvestmentController::class, 'coincloud']);
Route::post('invest/bitcoin', [InvestmentController::class, 'bitcoin']);
Route::post('invest/ethereum', [InvestmentController::class, 'ethereum']);
Route::post('invest/dogecoin', [InvestmentController::class, 'dogecoin']);

Route::get('profile', [ProfileController::class, 'profile']);
Route::get('update_profile', [ProfileController::class, 'update_profile']);
Route::post('auth/update/{user}', [ProfileController::class, 'update']);

Route::post('auth/withdraw', [WithdrawController::class, 'bank']);
