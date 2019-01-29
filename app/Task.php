<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;
use App\User;

class Task extends Model
{
    //
    public function project(){
        return $this->belongsTo(Project::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
