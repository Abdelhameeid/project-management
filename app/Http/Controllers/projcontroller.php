<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;
use App\Projschaduling;

use Illuminate\Support\Facades\Auth;


class projcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $projects=Project::where('user_id',Auth::user()->id)->get();
            
             
             return view('project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=Auth::user()->role;
        return view('project.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $proj=new Project();
                $proj->user_id=Auth::user()->id;

        $proj->ProjectName=$request->input('name');
        $proj->ProjectStartDate=$request->input('ProjectStartDate');
        $proj->ProjectEndDate=$request->input('ProjectEndDate');
        $proj->ActualEndDate=$request->input('ActualEndDate');
        $proj->ProjectStatus=$request->input('ProjectStatus');

        $proj->save();
        return redirect(route('project.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($project)
    {
        $projsch=Projschaduling::where('project_id',$project)->get();

         $proj=Project::find($project); 
         return view('project.show',compact('projsch','proj'));       
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
