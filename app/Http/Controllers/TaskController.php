<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function create_task()
    {
       
        return view('create_task');
    }
    
    public function create_task_confirm(Request $request)
    {
            //dd($request->all());

            // $validatedData = validator()->make($request->all(),[
            //     'task_title' => 'required',
            //     'task_description' => 'required',
            //     'task_status'=>'required'
            // ]);
    
            // if($validatedData->fails()){
    
            //     return redirect()->back()->withErrors($validatedData)->withInput();
            // }

            $task = new Task;
            $task->task_title = $request->task_title;
            $task->task_status = $request->status;
            $task->task_description = $request->task_description;
            $task->save();

            //retur
    }

    public function view_task()
    {
       
        $tasks = Task::all();

        return view('view_task')->with([
            'tasks' => $tasks
        ]);
    }


    
}
