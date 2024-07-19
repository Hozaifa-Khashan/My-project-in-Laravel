<?php

namespace App\Http\Controllers;

use App\Models\TaskComment;
use Illuminate\Http\Request;

class TaskCommentController extends Controller
{

    public function index()
    {
        $taskComments = TaskComment::all();
        return response()->json($taskComments);
    }

    public function store(Request $request)
    {
        $taskComment = TaskComment::create($request->all());
        return response()->json($taskComment, 201);
    }

    public function show(TaskComment $taskComment)
    {
        return response()->json($taskComment);
    }

    public function update(Request $request, TaskComment $taskComment)
    {
        $taskComment->update($request->all());
        return response()->json($taskComment);
    }

    public function destroy(TaskComment $taskComment)
    {
        $taskComment->delete();
        return response()->json(null, 204);
    }

}
