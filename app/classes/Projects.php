<?php

namespace App\classes;

use App\Models\Project;
use Illuminate\Support\Facades\Log;

class Projects
{
    public function store(array $data)
    {
        Log::info('Projects Stores Data ', $data);

        return Project::create([
            'title' => $data['title']
        ]);
    }
}
