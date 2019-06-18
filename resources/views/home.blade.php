
<?php
  use App\user;
  use Illuminate\Support\Facades\Auth;
use App\Projschaduling;
use App\Project;

if(Auth::user()){
    $user=Auth::user()->role;
    $project=Project::where('user_id',Auth::user()->id)->get();

}


?>

@extends('layouts.app')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if(Auth::user())

@if($user=='admin'&&count($project)>0)

<a href="{{route('project.create')}}"> create projects</a>
<a href="{{ route('project.index')}}"> all projects</a>

@elseif($user=='admin')
<a href="{{route('project.create')}}"> create projects</a>



@endif
@endif

  
@endsection


