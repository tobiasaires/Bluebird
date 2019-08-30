<?php

namespace App\Repositories;

use App\Project;
use App\Repositories\Contracts\ProjectRepositoryInterface;

class ProjectRepository implements ProjectRepositoryInterface
{
    public function getAllProjects()
    {
        return Project::all();
    }

    public function storeProject(array $attributes)
    {
        Project::create($attributes);
    }
}