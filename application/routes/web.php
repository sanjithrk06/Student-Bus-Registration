<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { 
    return redirect()->route('dashboard'); 
})->name('home');

Route::get('/dashboard', function () { 
    return view('dashboard'); 
})->name('dashboard');


// Students
Route::get('/students', function () { 
    return view('studentsList'); 
})->name('students');

Route::get('/editStudent', function () { 
    return view('editStudent'); 
})->name('editStudent');


// Buses
Route::get('/buses', function () { 
    return view('busList'); 
})->name('buses');

Route::get('/drivers', function () { 
    return view('driverList'); 
})->name('drivers');


// Faculties
Route::get('/faculties', function () { 
    return view('facultyList'); 
})->name('faculties');


// Mails
Route::get('/mail', function () { 
    return view('sendMail'); 
})->name('mail');