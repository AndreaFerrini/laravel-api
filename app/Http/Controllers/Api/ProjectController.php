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

        $projects = Project::with("type", "technologies")->paginate(3);

        return response()->json(
            [
            'success' => true,
            'projects' => $projects
            ]
        );
    }

    public function show($slug)
    {
        $project = Project::with( "type", "technologies" )->where( "slug", $slug )->first();

        if( $project ){
            return response()->json([

                'success' => true,
                'project' => $project
            ]);
        } else {

            return response()->json([

                'success' => false,
                'error' => "Non sono presenti projects"
            ])->setStatusCode(404);
        }
    }
}
