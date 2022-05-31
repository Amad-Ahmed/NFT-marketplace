<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DetailController;

use App\Models\collections;
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

Route::get('/', [IndexController::class,'show']);
Route::get('/home', [IndexController::class,'show']);
// Route::get('/account', [AccountController::class,'index']);
Route::get('/account/{wallet}', [AccountController::class,'show']);
Route::get('/rankings/filter', [RankingController::class,'store']);
Route::get('/rankings', [RankingController::class,'index']);
Route::get('/detail/{collection}', [DetailController::class,'show']);
Route::post('/search', [SearchController::class, 'index']);
Route::get('/explore', [ExploreController::class,'show']);
Route::get('/explore/{category}', [ExploreController::class,'show']);
Route::get('/collection/{category}', [CollectionController::class,'show']);

Route::get('/activity', [ActivityController::class,'all']);
Route::get('/activity/listings', [ActivityController::class,'listings']);
Route::get('/activity/sales', [ActivityController::class,'sales']);
Route::get('/activity/offers', [ActivityController::class,'offers']);
Route::get('/activity/transfers', [ActivityController::class,'transfers']);
Route::get('/activity/all', [ActivityController::class,'all']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/help',function() {
    return view('help');
});

Route::get('/newsletter',function() {
    return view('newsletter');
});

Route::get('/partners',function(){
    return view('partners');
});

Route::get('/test', function () {
    return view('detail');
});
