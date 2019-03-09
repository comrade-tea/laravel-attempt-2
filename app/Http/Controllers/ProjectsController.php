<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function Index()
    {
        $projects = Project::all();

        return view('projects.index', ['projects' => $projects]);
    }

    public function Show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function Create()
    {
        return view('projects.create');
    }

    public function Store()
    {
        Project::create(request(['title', 'description']));

        return redirect('projects');
    }

    public function Edit(Project $project)
    {
        return view('projects.edit')->withProject($project);
    }

    public function Update(Project $project)
    {
        $project->update(request(['title', 'description']));

        return redirect('projects');
    }

    public function Destroy(Project $project)
    {
        $project->delete();

        return redirect('projects');
    }
}
