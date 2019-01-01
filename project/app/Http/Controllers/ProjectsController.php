<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        //$projects = \App\Project::where('owner_id', auth()->id())->get();
        $projects = auth()->user()->projects;
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project) {
        $this->authorize('update', $project);
        
        return view('projects.show', compact('project'));
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {
        $this->authorize('update', $project);

        $vars = $this->validateProject();

        $vars['owner_id'] = auth()->id();

        Project::create($vars);

        return redirect('/projects');
    }

    public function edit(Project $project) {
        $this->authorize('update', $project);
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) {
        $this->authorize('update', $project);
        $vars = $this->validateProject();

        $project->update($vars);

        return redirect('/projects');
    }

    public function destroy(Project $project) {
        $this->authorize('update', $project);
        
        $project->delete();

        return redirect('/projects');
    }

    protected function validateProject() {
        return request()->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:5'
        ]);
    }
}