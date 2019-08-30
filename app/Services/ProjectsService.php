<?php

namespace App\Services;

use App\Project;
use App\Repositories\Contracts\ProjectRepositoryInterface;
use App\Services\Contracts\ProjectServiceInterface;

class ProjectsService implements ProjectServiceInterface
{
    private $projectRepository;
    
    public function __construct(ProjectRepositoryInterface $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }


    public function getAllProjects()
    {
        $projects = $this->projectRepository->getAllProjects();

        return $projects;
    }

    public function store(array $attributes)
    {
        $this->projectRepository->storeProject($attributes);
    }
}