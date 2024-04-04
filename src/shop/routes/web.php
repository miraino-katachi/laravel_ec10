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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// トップページ
Route::get('/', [\App\Http\Controllers\ItemController::class, 'index'])->name('item.index');
// 商品詳細ページ
Route::get('/detail/{item}', [\App\Http\Controllers\ItemController::class, 'detail'])->name('item.detail');

Route::group(['middleware' => ['auth']], function () {
    // 会員情報ページ
    Route::get('/user', [\App\Http\Controllers\UserInfoController::class, 'index'])->name('user.index');
    // 会員情報登録ページ
    Route::get('/user/add', [\App\Http\Controllers\UserInfoController::class, 'create'])->name('user.create');
    // 会員情報登録処理
    Route::post('user/create', [\App\Http\Controllers\UserInfoController::class, 'store'])->name('user.store');
    // 会員情報修正ページ
    Route::get('/user/edit/{user_info}', [\App\Http\Controllers\UserInfoController::class, 'edit'])->name('user.edit');
    // 会員情報修正処理
    Route::post('/user/update/{user_info}', [\App\Http\Controllers\UserInfoController::class, 'update'])->name('user.update');
    // カート一覧ページ
    Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
    // カート追加処理
    Route::post('/cart/add', [\App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
    // カート削除処理
    Route::post('/cart/del', [\App\Http\Controllers\CartController::class, 'del'])->name('cart.del');
    // 注文内容確認
    Route::get('/order', [\App\Http\Controllers\OrderController::class, 'index'])->name('order.index');
    // 注文処理
    Route::post('/order/complete', [\App\Http\Controllers\OrderController::class, 'complete'])->name('order.complete');
    // 注文完了ページ
    Route::get('/order/thanks', [\App\Http\Controllers\OrderController::class, 'thanks'])->name('order.thanks');
    // 注文履歴ページ
    Route::get('/order/history', [\App\Http\Controllers\OrderController::class, 'history'])->name('order.history');
});
