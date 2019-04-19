<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public function project() {
        return $this->belongsTo(Project::class);
    }
    
    public function task_status() {
        return $this->hasOne(Task_status::class);
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
