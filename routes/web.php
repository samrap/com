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
        'projects' => Project::orderBy('sort_order', 'asc')->get(),
    ]);
});

Route::get('/projects/{id}', function ($id) {
    $project = Project::findOrFail($id);

    return redirect()->route('projects.show', [
        'id' => $id,
        'slug' => $project->slug,
    ]);
});

Route::get('/projects/{id}/{slug}', function ($id) {
    $project = Project::findOrFail($id);

    if ($next = Project::where('sort_order', $project->sort_order + 1)->first()) {
        $nextLink = route('projects.show', [
            'id' => $next->id,
            'slug' => $next->slug,
        ]);
    } else {
        $nextLink = null;
    }

    return Inertia::render('Projects/Show', [
        'project' => $project,
        'nextLink' => $nextLink,
    ]);
})->name('projects.show');
