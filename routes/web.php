<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    $students = \App\Models\Student::all();
    return view('welcome',compact('students'));
});
Route::post('/store',function(Request $request)
{
    \App\Models\Student::create(['name'=>$request->name]);
    return redirect('/');
});
