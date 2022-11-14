<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\KunjunganKerja;
use App\Http\Livewire\Dashboard;

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

Route::get('/logout', function () {
    \Auth::logout();
    return redirect('/');
});

Auth::routes();

Route::get('/', function () {
    return redirect('/login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/kunjungan_kerja', KunjunganKerja::class)->name('kunjungan_kerja');
    //Route::get('/kunjungan_kerja', 'Kunjungan_kerja\Kunjungan_kerjaController@index')->name('index_kunjungan_kerja');
    Route::get('/biaya_kunker', 'Biaya_kunker\Biaya_kunkerController@index')->name('index_biaya_kunker');
    Route::get('/settings', 'Settings\SettingsController@index')->name('index_settings');
});


Route::group(['middleware' => ['role:admin']], function () {
});

Route::group(['middleware' => ['role:pic']], function () {
});

Route::group(['middleware' => ['role:substansi']], function () {
});

Route::group(['middleware' => ['role:pimpinan']], function () {
});
