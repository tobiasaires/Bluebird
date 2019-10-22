<?php

namespace Tests\Unit;

use Faker\Factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;
    /**@test **/
    public function testExample()
    {
        $project = \factory('App\Project')->create();
        $this->assertEquals('/projects/' . $project->id, $project->path());
    }
}
