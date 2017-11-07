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
/*
{
    "name":"TaskTwo",
	"description":"Second Task",
	"status":0,
	"user_id":1
}
*/
    }



    public function all()
    {
//        return Task::all();
        return response()->json(Task::all(),200);


    }

    public function update(Request $request, Task $task)
    {
        $task->name =$request->get('name');
        $task->description =$request->get('description');
        $task->status =$request->get('status');
        $task->save();
        return response()->json($task,204);

    }
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(['response'=>'Deleted'],200);
    }

    public function show($id)
    {
        $task=Task::find($id);
        if($task){
            return response()->json($task,200);


        }
        else{
            return response()->json(['response'=>'notfound'],404);

        }

        
    }

    public function index()
    {
        return view('task.index');
    }

    
}
