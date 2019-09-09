<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Services\Contracts\ProjectServiceInterface;

class ProjectsController extends Controller
{
    private $projectService;

    public function __construct(ProjectServiceInterface $projectService)
    {
        $this->projectService = $projectService;
    }

    public function index()
    {
        $projects = $this->projectService->getAllProjects();

        return view('projects.index', compact('projects'));
    }

    public function store(ProjectRequest $request)
    {
        $attributes = $request->only('title', 'description');
        $this->projectService->store($attributes);

        return redirect('/projects');
    }
}
