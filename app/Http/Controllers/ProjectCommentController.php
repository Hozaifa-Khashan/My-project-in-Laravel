<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectComment;


class ProjectCommentController extends Controller
{

    public function index()
    {
        $projectComments = ProjectComment::all();
        return response()->json($projectComments);
    }

    public function store(Request $request)
    {
        $projectComment = ProjectComment::create($request->all());
        return response()->json($projectComment, 201);
    }

    public function show(ProjectComment $projectComment)
    {
        return response()->json($projectComment);
    }

    public function update(Request $request, ProjectComment $projectComment)
    {
        $projectComment->update($request->all());
        return response()->json($projectComment);
    }

    public function destroy(ProjectComment $projectComment)
    {
        $projectComment->delete();
        return response()->json(null, 204);
    }

}
