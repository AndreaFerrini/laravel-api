<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {

        // $projects = Project::with("types", "technologies")->get();

        $projects = Project::with("types", "technologies")->paginate(3);

        return response()->json([
            'succes' => true,
            'projects' => $projects
        ]);
    }
}
