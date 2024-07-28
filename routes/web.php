<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NasabahController;

route::get('/', function () {
    return view('sibasu');
});
route::get('/dashboard', function () {
    return view('dashboard');
});

route::get('/setoran-sampah', function(){
    return view('setoran-sampah');
});
route::get('/riwayat-setoran', function(){
    return view('riwayat-setoran');
});
route::get('/admin', function(){
    return view('admin');
});
route::get('/profile', function(){
    return view('profile');
});
route::get('/data-sampah', function(){
    return view('data-sampah');
});


Route::resource('nasabah', NasabahController::class);

route::get('/show-data-nasabah', [NasabahController::class, 'showAll']);