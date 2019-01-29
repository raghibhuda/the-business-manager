<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;
use App\User;

class Project extends Model
{
    //
    public function tasks(){
        return $this->hasMany(Task::class,'project_id');
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
