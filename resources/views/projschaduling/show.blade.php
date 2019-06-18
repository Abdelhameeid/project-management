<h2>show projectshaduling</h2>

<?php
$date1=$prosch->ActalEndDate ;


$date2=$prosch->StartDate ;

if($date1>$date2){
$s2=Carbon\Carbon::parse($date2)->diffForHumans(Carbon\Carbon::parse($date1));

}

?>
<a href="{{ route('task.create') }}">create task </a><br><br>


ProjectName  :{{$prosch->ProjectName }}<br>
ProjectStartDate  :{{$prosch->TaskName }}<br>
ProjectEndDate  :{{$prosch->DurationDays }}<br>
ActualEndDate  :{{$prosch->StartDate }}<br>
ProjectStatus  :{{$prosch->ActalEndDate }}<br><br><br>

<h3>all tasks</h3>
@foreach($task as $v)
<a href="">{{ $v->DurationDays }}</a>


@endforeach


