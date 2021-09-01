<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\CommitteesController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('index');
});

Route::get("/plan", [PlanController:: class, 'index']);
Route::get("/report", [ReportController:: class, 'index']);
Route::get("/info", [InfoController:: class, 'index']);
Route::get("/committees", [CommitteesController:: class, 'index']);
Route::get("/teachers",[TeacherController::class,'getData']);