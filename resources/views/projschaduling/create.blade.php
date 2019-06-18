
<h1>create project</h1>
<form action={{ route('projschaduling.store')}} method="post">
	{{csrf_field()}}




		<label>enter ProjectName</label>
		<input type="text" name="TaskName" placeholder="enter TaskName"><br><br>


<label>enter DurationDays</label>
<input type="number" name="DurationDays" placeholder="enter DurationDays"><br><br>


	<label>enter StartDate</label>
	<input type="date" name="StartDate" placeholder="enter StartDate"><br><br>


		<label>enter endDate</label>
	<input type="date" name="endDate" placeholder="enter endDate"><br><br>


		<label>enter ActalEndDate</label>
	<input type="date" name="ActalEndDate" placeholder="enter ActalEndDate"><br><br>



	<label>choose Dependance1</label>
	<select name="Dependance1"><br><br>
  @foreach($projschadulings as $project)
  <option value="{{$project->id}}">{{$project->ProjectName}}</option>
  @endforeach
</select><br><br>


<label>choose Dependance2</label>
<select name="Dependance2"><br><br>
  @foreach($projschadulings as $project)
  <option value="{{$project->id}}">{{$project->ProjectName}}</option>
  @endforeach
</select><br><br>


<label>choose project</label>
<select name="Project"><br><br>
  @foreach($projects as $project)
  <option value="{{$project->id}}">{{$project->ProjectName}}</option>
  @endforeach
</select><br><br>


<label>status</label>
<select name="status"><br><br>
  <option value="waiting">waiting</option>
  <option value="Passive">Passive</option>
  <option value="Running">Running</option>
  <option value="Finished">Finished</option>
</select><br><br>


	

	
<input type="submit" value="creted">

 

</form>