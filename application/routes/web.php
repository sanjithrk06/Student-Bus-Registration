<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { 
    return redirect()->route('dashboard'); 
})->name('home');

Route::get('/signin', function () { 
    return redirect()->route('signin'); 
})->name('signin');

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

Route::get('/addStudent', function () { 
    return view('addStudent'); 
})->name('addStudent');

Route::get('/studentsAttendance', function () { 
    return view('studentsAttendance'); 
})->name('studentsAttendance');

Route::get('/updateAttendance', function () { 
    return view('updateAttendance'); 
})->name('updateAttendance');


// Buses
Route::get('/buses', function () { 
    return view('busList'); 
})->name('buses');

Route::get('/busRegistration', function () { 
    return view('busRegistration'); 
})->name('busRegistration');

Route::get('/editBus', function () { 
    return view('editBus'); 
})->name('editBus');

Route::get('/addBus', function () { 
    return view('addBus'); 
})->name('addBus');

Route::get('/combineBus', function () { 
    return view('combineBus'); 
})->name('combineBus');

Route::get('/drivers', function () { 
    return view('driverList'); 
})->name('drivers');

Route::get('/editDriver', function () { 
    return view('editDriver'); 
})->name('editDriver');

Route::get('/addDriver', function () { 
    return view('addDriver'); 
})->name('addDriver');


// Faculties
Route::get('/faculties', function () { 
    return view('facultyList'); 
})->name('faculties');

Route::get('/editFaculty', function () { 
    return view('editFaculty'); 
})->name('editFaculty');


// Mails
Route::get('/mail', function () { 
    return view('sendMail'); 
})->name('mail');