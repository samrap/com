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
    return Inertia::render('Home');
});

Route::get('/about', function () {
    return Inertia::render('About');
});

Route::get('/portfolio', function () {
    return Inertia::render('Portfolio/Index', [
        'projects' => Project::orderBy('sort_order', 'asc')->get(),
    ]);
});

Route::get('/portfolio/{id}/{slug}', function ($id) {
    $project = Project::with('images')->findOrFail($id);

    return Inertia::render('Portfolio/Show', [
        'project' => $project->toArray(),
    ]);
})->name('project.show');

Route::get('/experience', function () {
    return Inertia::render('Experience');
});
