<?php 
namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Routing\Controller;


class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('pages.projects', [
            'projects' => $projects
        ]);
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->first();

        if (!$project) {
            abort(404);
        }

        return view('pages.project', [
            'project' => $project
        ]);
    }
}