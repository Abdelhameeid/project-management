
<h1>create project</h1>
<form action={{ route('department.store')}} method="post">
	{{csrf_field()}}
		<label>enter departName</label>

		<input type="text" name="name" placeholder="enter departName"><br><br>

	

	
<input type="submit" value="creted">

 

</form>