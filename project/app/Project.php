<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description'];//Made all fields as fillable

    //protected $gaurded = [];//Allow all fields to be mass assigned except from these, in case its empty it'll allow updating everything.
}
