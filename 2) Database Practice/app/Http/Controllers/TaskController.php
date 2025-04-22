<?php

namespace App\Http\Controllers;
use Redirect;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function index()
    {
        $taskCount = Task::count();
  
        return view('index', ['taskCount' => $taskCount]);
    }


    public function addTask($msg ="", $color="")
    {
        return view('addTask', ['msg' => $msg, 'color' => $color]);
    }


    public function postAddTask(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'name' => 'required|max:15',
        ]);

        if ($validator->fails()) 
        {
           return redirect('addTask/Max 15 charaters allowed/red');
        }

        $task = new Task;
        $task->name = $request->name;
        $task->updated_at = null;
        $task->save();

        return redirect('addTask/Record inserted successfully/green');           

    }


    public function viewTask($msg ="", $color="")
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();

        return view('viewTask', ['msg' => $msg, 'color' => $color, 'tasks' => $tasks]);
    }


    public function updateTask($id, $msg ="", $color="")
    {
        $task = Task::where('id', $id)->get();
        return view('updateTask', ['msg' => $msg, 'color' => $color, 'task' => $task]);
    }

    public function postUpdateTask(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');


        $validator = Validator::make($request->all(), 
        [
            'name' => 'required|max:15',
        ]);

        $task = Task::where('id', $id)->get();

        if ($validator->fails()) 
        {
            return redirect('updateTask/' . $id . '/Max 15 charaters allowed/red');
        }

        $updateTask = Task::where('id', $id)->update(['name' => $name, 'updated_at' => date('Y-m-d H:i:s')]);


        return redirect('viewTask/Record updated successfully/green');
    }


    public function deleteTask($id)
    {
        $deleteTask = Task::findOrFail($id)->delete();

        return redirect('viewTask/Record deleted successfully/green');
    }

}
