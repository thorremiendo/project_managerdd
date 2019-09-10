<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
    	$projects = Project::all();
    	return view('projects.index')->with('projects', $projects);

    }
    public function create()
        {
        	return view('projects.create');
        }
    public function store()
        {
        	//dd(request()->all);
        	$project = new project;
        	$project->title = request()->title;
        	$project->description = request()->description;
        	$project->due_date = request()->due_date;
        	$project->save();

        	return redirect('/projects');

        }


}

