<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $table = 'tasks';

    protected $fillable = [
        'task_name',
        'is_completed',
    ]; 

    public function isCompleted(){
        return $this->completed_at !== null;
    }
}
