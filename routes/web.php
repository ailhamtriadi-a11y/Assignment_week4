<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        'nama'    => 'Andra Ilham Triadi Mijaya',
        'usia'    => 18,
        'nim'     => '2086022510016',
        'jurusan' => 'Informatika - AI',
    ]);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

