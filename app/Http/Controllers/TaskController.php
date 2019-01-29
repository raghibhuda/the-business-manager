<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;
use App\Http\Controllers\ProjectController;

class TaskController extends Controller
{
    //
    public function create(Request $request){
        $task = new Task;
        $this->validate($request,[
            'name'=>'required'
        ]);
        $task->name = $request->name;
        $task->project_id = $request->id;
        $task->save();
        return response()->json([
            'task' => $task,
            'status' => 'Success',
        ]);
    }

    public function assignTask(Request $request){
        $task = Task::find($request->taskID);
        $task->user_id = $request->employeeID;
        $task->save();
        $updatedContents = new ProjectController;
        $updatedContents->viewProjectWithEmployeesAndTasks($request->id);
        return response()->json([
            'task' => $task,
            'status' => 'Success',
        ]);
    }

    public function delete(Request $request){
        $response = Task::find($request->taskID)->delete();
    //    return response()->json([
    //         'status' => 'Success'
    //    ]);
        $updatedContents = new ProjectController;
        return $updatedContents->viewProjectWithEmployeesAndTasks($request->id); 
    }
    
}
