<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title', 'description', 'completed','project_id'];

    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
}
