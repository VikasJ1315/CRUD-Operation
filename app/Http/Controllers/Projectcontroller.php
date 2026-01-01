<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classes\Projects;

class ProjectController extends Controller
{
    protected $projectService;

    public function __construct(Projects $projectService)
    {
        $this->projectService = $projectService;
    }
    public function create()
    {
        return view('category.insert');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string'
        ]);

        $this->projectService->store($request->only('title'));

        return redirect()->back()->with('success', 'Project Created');
    }

    public function testing()
    {
        dd('test');
    }
}