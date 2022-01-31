<?php

use Inertia\Inertia;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return Inertia::render('Index', [
        'projects' => Project::all(),
    ]);
});

Route::get('/projects/{id}', function ($id) {
    sleep(2);
    return Inertia::render('Projects/Show', [
        'project' => Project::findOrFail($id),
    ]);
})->name('projects.show');
