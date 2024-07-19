<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProject;


class UserProjectController extends Controller
{

    public function index()
    {
        $userProjects = UserProject::all();
        return response()->json($userProjects);
    }

    public function store(Request $request)
    {
        $userProject = UserProject::create($request->all());
        return response()->json($userProject, 201);
    }

    public function show(UserProject $userProject)
    {
        return response()->json($userProject);
    }

    public function update(Request $request, UserProject $userProject)
    {
        $userProject->update($request->all());
        return response()->json($userProject);
    }

    public function destroy(UserProject $userProject)
    {
        $userProject->delete();
        return response()->json(null, 204);
    }

}
