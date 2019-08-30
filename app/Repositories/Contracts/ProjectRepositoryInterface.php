<?php

namespace App\Repositories\Contracts;

interface ProjectRepositoryInterface
{
    public function getAllProjects();

    public function storeProject(array $attributes);
}