<?php

use App\Task;
use Illuminate\Http\Request;





Route::get('/', function () 
{
    $taskCount = Task::count();
  
    return view('index', ['taskCount' => $taskCount]);
});


Route::get('/addTask/{msg?}/{color?}', 'TaskController@addTask');
Route::post('/postAddTask', 'TaskController@postAddTask');


Route::get('/viewTask/{msg?}/{color?}', 'TaskController@viewTask');


Route::get('/updateTask/{id}/{msg?}/{color?}', 'TaskController@updateTask');
Route::post('/postUpdateTask', 'TaskController@postUpdateTask');


Route::get('/deleteTask/{id}', 'TaskController@deleteTask');


// Route::get('/', function () 
// {
//     $tasks = Task::orderBy('created_at', 'asc')->get();

//     return view('tasks', ['tasks' => $tasks]);
// });


// Route::post('/task', function (Request $request) {
//     $validator = Validator::make($request->all(), [
//         'name' => 'required|max:15',
//     ]);

//     if ($validator->fails()) {
//         return redirect('/')
//             ->withInput()
//             ->withErrors($validator);
//     }

//     $task = new Task;
//     $task->name = $request->name;
//     $task->save();

//     return redirect('tasks');
// });



// Route::delete('/task/{id}', function ($id) 
// {
//     Task::findOrFail($id)->delete();

//     return redirect('tasks');
// });

