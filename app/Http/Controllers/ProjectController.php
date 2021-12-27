<?php

namespace App\Http\Controllers;


use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;
class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
    public function index(){
        $projects= Project::latest()->paginate(); //latest es para ordenar descendente
        return view('projects.index',compact('projects'));
    }
    public function show( Project $project)
    {
        
        return view('projects.show',[
            'project' => $project
        ]);
    }
    public function create()
    {
        return view('projects.create',[
            'project'=>new Project
        ]);
    }
    public function store(SaveProjectRequest $request)
    {
        Project::create($request->validated());
        return redirect()->route('projects.index')->with('status','El proyecto fue creado con éxito');
      //return $request->all();
      /* Project::create(
        [
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description'),

        ]
        );
       */
    }
    public function edit( Project $project)
    {
        
        return view('projects.edit',[
            'project' => $project
        ]);
    }
    public function update(Project $project, SaveProjectRequest $request)
    {
         $project->update($request->validated());
        return redirect()->route('projects.show',$project)->with('status','El proyecto fue actualizado con éxito');

    }
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado con éxito');
    }
}
 