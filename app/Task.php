<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'hour',
        'task_status_id',
        'user_id',
        'project_id',
    ];
    
    //
    public function project() {
        return $this->belongsTo(Project::class);
    }
    
    public function taskStatus() {
        return $this->belongsTo(TaskStatus::class);
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
