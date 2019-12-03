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
        return $this->projectRepository->getAllProjects();
    }

    public function store(array $attributes)
    {
        $this->projectRepository->storeProject($attributes);
    }

    public function getProject(string $projectId)
    {
        return $this->projectRepository->getProject($projectId);
    }
}
