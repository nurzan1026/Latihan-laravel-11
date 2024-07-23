<?php

use Illuminate\Support\Facades\Route;

route::get('/', function () {
    return view('sibasu');
});
route::get('/dashboard', function () {
    return view('dashboard');
});

route::get('/nasabah', function(){
    return view('nasabah');
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
