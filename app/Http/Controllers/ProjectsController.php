<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Project;
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

    public function show(Project $project)
    {

        if (auth()->user()->isNot($project->owner)) {
            abort(403);
        }

        $project = $this->projectService->getProject($project->id);

        return view('projects.show', compact('project'));
    }
}
