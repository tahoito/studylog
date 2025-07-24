<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudyLogController;

Route::get('/study-logs',[StudyLogController::class,'index']);
Route::post('/study-logs',[StudyLogController::class,'store']);
