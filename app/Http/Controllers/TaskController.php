<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request )
    {
        $task= Task::create($request->only(
            'name','description','status','user_id'
        ));
        return response()->json($task,201);
    }

    public function test()
    {
        return response()->json(['response'=>'ok']);
    }

    
}
