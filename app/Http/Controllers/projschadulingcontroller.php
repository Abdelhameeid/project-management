<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;
use App\Projschaduling;


class projschadulingcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects=Project::all();
        $projschadulings=Projschaduling::all();

        //dd($projects);
        return view('projschaduling.create',compact('projects','projschadulings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $proj=new Projschaduling();
                 $proj->project_id=$request->input('Project');
                // $proj->user_id=Auth::user()->id;


        $proj->TaskName=$request->input('TaskName');
        $proj->DurationDays=$request->input('DurationDays');
        $proj->Dependance1=$request->input('Dependance1');
        $proj->Dependance2=$request->input('Dependance2');

        $proj->StartDate=$request->input('StartDate');
        $proj->endDate=$request->input('endDate');
        $proj->ActalEndDate=$request->input('ActalEndDate');
        $proj->projschadulingStatus=$request->input('status');


        $proj->save();
        return redirect(route('project.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($projschaduling)
{
        $prosch=Projschaduling::find($projschaduling);
        $task=Task::where('projschaduling_id',$projschaduling)->get();

        return view('projschaduling.show',compact('task','prosch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
