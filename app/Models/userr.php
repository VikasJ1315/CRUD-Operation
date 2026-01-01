<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userr extends Model
{
    protected $fillable = [
        "project_id","name","email","password"
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function task()
    {
        return $this->hasOne(task::class);
    }

}
