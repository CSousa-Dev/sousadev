<?php 
namespace App\Http\Controllers;

use App\Models\Presentation;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $presentation = Presentation::orderBy('created_at', 'desc')->first();
        $services = $presentation->services()->orderBy('order')->get();
        $skills = $presentation->skills()->orderBy('order')->get();
        $highlightedProjects = $presentation->projects()->where('highlighted', true)->get();

        $arraySkills = array_map(function($userSkill) {
            $userSkill = (object) $userSkill;
            $skill = (object) $userSkill->skills;
            return [
                'src' => $skill->image_url,
                'title' => $skill->name
            ];
        }, $skills->toArray());

        return view('pages.home', [
            'presentation' => $presentation,
            'services' => $services,
            'skills' => $arraySkills,
            'highlightedProjects' => $highlightedProjects
        ]);
    }
}