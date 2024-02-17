<?php

namespace App\Http\Controllers;

use Symfony\Component\Routing\Attribute\Route;

class Project extends Controller
{
    public function index()
    {
        return view('project.index');
    }
}
