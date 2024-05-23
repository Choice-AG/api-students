<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Endpoints
Route::get('/', function () {
    return response()->json([
        //documentation
        'message' => 'Welcome to the Students-Courses API.',
        'links' => [
            'Get all students' => [
                'method' => 'GET',
                'url' => 'http://localhost:8000/api/students'
            ],
            'Add a student' => [
                'method' => 'POST',
                'url' => 'http://localhost:8000/api/students'
            ],
            'Get a student' => [
                'method' => 'GET',
                'url' => 'http://localhost:8000/api/students/{id}'
            ],
            'Update a student' => [
                'method' => 'PUT',
                'url' => 'http://localhost:8000/api/students/{id}'
            ],
            'Delete a student' => [
                'method' => 'DELETE',
                'url' => 'http://localhost:8000/api/students/{id}'
            ]
        ]
    ]);
});

// Students routes
Route::get('students', [StudentsController::class, 'index']);
Route::post('students', [StudentsController::class, 'store']);
Route::get('students/{id}', [StudentsController::class, 'show']);
Route::put('students/{student}', [StudentsController::class, 'update']);
Route::delete('students/{id}', [StudentsController::class, 'destroy']);
