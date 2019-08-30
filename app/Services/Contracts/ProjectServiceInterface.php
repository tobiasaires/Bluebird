<?php 

namespace App\Services\Contracts;


interface ProjectServiceInterface 
{
    public function getAllProjects();

    public function store(array $attributes);
}