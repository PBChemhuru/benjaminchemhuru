<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    public function projects()
    {
      $data=Project::all();
            return view('projects.projects',[
                'projects'=>$data
            ]);
    }
    
    public function show(Project $project)
    {
        return view('projects.project',
        [
            'project'=>$project
        ]);
    }

    public function search(Request $request)
    {
       
            $searchProjects=Project::where('project_name', 'like', '%'.$request->search.'%')
            ->orwhere('project_description','like', '%'.$request->search.'%')
            ->orwhere('project_tags','like','%'.$request->search.'%')->get();
            return view('projects.projects',
        [
            'projects'=>$searchProjects
        ]);
    }
    public function resume()
    {
       $paths=public_path('/Resume/Benjamin_Resume.pdf');
       return response()->download($paths);
    }
}