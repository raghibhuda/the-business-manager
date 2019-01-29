<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Project;
use App\Task;
use Auth;

class ProjectController extends Controller
{
    //
    public function allProjects(){
        $projects = Project::all();
        return view('company.projects',compact('projects'));
    }

    public function createProject(){
        return view('company.createProject');
    }
    public function storeProject(Request $request){
        $project = new Project;
        $this->validate($request,[
            'name' => 'required',
            'totalxp' => 'required',
            'description' =>'required',
        ]);
        $project->name = $request->name;
        $project->totalxp = $request->totalxp;
        $project->description = $request->description;
        $project->save();
        return redirect('/home/company/projects-all');  
    }
   
    public function viewProjectWithEmployeesAndTasks($id){
        $userid = Auth::user()->id;
        $employees = Company::find($userid)->users()->where('type','employee')->get();
        $project = Project::find($id);
        $assingedEmployees = $project->users;
        $tasks = Task::with('user')->where('project_id','=',$id)->get();
        return response()->json([
            'project' => $project,
            'employees' =>$employees,
            'assingedEmployees' => $assingedEmployees,
            'tasks' => $tasks,
            'status' => 'Succces',
        ]);
    }

    public function assignEmployees(Request $request){
        $project = Project::find($request->projectID);
        $project->users()->attach($request->employeeID);
        return response()->json([
            'project' => $project,
            'status' => 'Success',
        ]);
    }
    
    

}
