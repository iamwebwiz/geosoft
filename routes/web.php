<?php

use App\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    $data['rates'] = Rate::find(1)->first();
    return view('welcome', $data);
});

Route::get('administrator', function() {
    return view('admin');
})->middleware('guest');

Route::post('administrator', function(Request $request) {
    if (Auth::attempt([
        'username' => $request->username,
        'password' => $request->password])) {
        return redirect()->to('/administrator/rates');
    }
    return back();
})->name('login');

Route::get('administrator/rates', function() {
    $data['rates'] = Rate::find(1)->first();
    return view('rates', $data);
})->middleware('auth');

Route::put('administrator/rates', function(Request $request) {
    $rates = Rate::find(1);
    $rates->bitcoin = $request->bitcoin;
    $rates->etherum = $request->etherum;
    $rates->paypal = $request->paypal;
    $rates->webmoney = $request->webmoney;
    $rates->itunes = $request->itunes;
    $rates->perfect_money = $request->perfect_money;
    $rates->amazon = $request->amazon;
    $rates->save();
    return back();
})->name('updateRates')->middleware('auth');

Route::get('logout', function() {
    Auth::logout();
    return redirect()->to('/');
});
