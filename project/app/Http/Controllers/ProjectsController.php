<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index() {
        $projects = \App\Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {
        $req = request()->all();

        $project = new Project();
        $project->title = $req['title'];
        $project->description = $req['description'];

        $project->save();

        return redirect('/projects');
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {
        
    }
}
