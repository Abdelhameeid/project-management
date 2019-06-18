

@if($user=='admin')


<h1>create project</h1>
<form action={{ route('project.store')}} method="post">
	{{csrf_field()}}
		<label>enter ProjectName</label>

		<input type="text" name="name" placeholder="enter ProjectName"><br><br>
<label>enter ProjectStartDate</label>

	<input type="date" name="ProjectStartDate" placeholder="enter ProjectStartDate"><br><br>
	<label>enter ProjectEndDate</label>

	<input type="date" name="ProjectEndDate" placeholder="enter ProjectEndDate"><br><br>
	<label>enter ActualEndDate</label>

		<input type="date" name="ActualEndDate" placeholder="enter ActualEndDate"><br><br>

<select name="ProjectStatus"><br><br>
  <option value="Passive">Passive</option>
  <option value="Running">Running</option>
  <option value="Finished">Finished</option>
</select><br><br>

	

	
<input type="submit" value="creted">

 

</form>

@else
  not authorized

 @endif 