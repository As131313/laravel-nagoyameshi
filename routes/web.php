<?php


use Illuminate\Support\Facades\Route;
 // ルーティングを設定するコントローラを宣言する
 use App\Http\Controllers\HelloController;
 use App\Http\Controllers\ProductController;
 use App\Http\Controllers\VendorController;
 use App\Http\Controllers\RequestController;
 use App\Http\Controllers\ResponseController;
 use App\Http\Controllers\SignInController;
 use App\Http\Controllers\CookieController;
 use App\Http\Controllers\SessionController;

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



require __DIR__.'/auth.php';
