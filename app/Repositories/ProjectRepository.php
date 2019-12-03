<?php

namespace App\Repositories;

use App\Project;
use App\Repositories\Contracts\ProjectRepositoryInterface;

class ProjectRepository implements ProjectRepositoryInterface
{
    public function getAllProjects()
    {
        return auth()->user()->projects;
    }

    public function storeProject(array $attributes)
    {
        auth()->user()->projects()->create($attributes);
    }

    public function getProject(string $projectId)
    {
        return Project::findOrFail($projectId);
    }
}
