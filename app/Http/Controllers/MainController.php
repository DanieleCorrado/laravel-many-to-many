<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Type;

class MainController extends Controller
{
    public function index() {

        $projects = Project :: all();

        return view('home', compact('projects'));
    }

    public function dashboard() {

        $projects = Project :: all();
        $types = Type :: all();

        return view('dashboard', compact('projects', 'types'));
    }
}
