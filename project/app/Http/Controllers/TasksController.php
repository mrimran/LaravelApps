<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class TasksController extends Controller
{
    public function store(Project $project) {
        $vars = request()->validate(['description' => 'required']);
        
        $project->addTask($vars);

        return back();
    }

    public function update(Task $task) {
        //$task->complete(request()->has('completed'));

        request()->has('completed') ? $task->complete() : $task->incomplete();

        return back();//go back to the previous url
    }
}
