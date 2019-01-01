<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'owner_id'];//Made all fields as fillable

    //protected $gaurded = [];//Allow all fields to be mass assigned except from these, in case its empty it'll allow updating everything.

    public function tasks() {
        return $this->hasMany(Task::class);
    }

    public function addTask($task) {
        $this->tasks()->create($task);

        //the above one line is equal to the below
        // Task::create([
        //     'project_id' => $this->id,
        //     'description' => $description
        // ]);
    }
}
