<h2>show project </h2>
<a href="{{ route('projschaduling.create') }}">create projschaduling </a><br><br>


ProjectName  :{{$proj->ProjectName }}<br>
ProjectStartDate  :{{$proj->ProjectStartDate }}<br>
ProjectEndDate  :{{$proj->ProjectEndDate }}<br>
ActualEndDate  :{{$proj->ActualEndDate }}<br>
ProjectStatus  :{{$proj->ProjectStatus }}<br><br><br>
<h3>all project_schaduling</h3>

 <table >
					  <tr>
					    <th>all projects</th>
					    <th>before finish</th> 
					    <th>after finish</th>
					  </tr>
					  

					  @foreach($projsch as $pr)
					  <tr>
					    <td><a href="{{ route('projschaduling.show',$pr->id) }}">{{$pr->TaskName}}</a></td>
					    <td>
					    	<?php
									$date1=$pr->endDate ;


									$date2=$pr->StartDate ;

									if($date1>$date2){
									$s2=Carbon\Carbon::parse($date2)->diffForHumans(Carbon\Carbon::parse($date1));
									echo $s2;
									}

							?>

					    </td> 
					    @endforeach
					    @foreach($projsch as $pr)

					    <td>
					    		<?php

						     	    	$date1=$pr->endDate ;


										$date2=$pr->StartDate ;

										if($date1<$date2){
										$s2=Carbon\Carbon::parse($date2)->diffForHumans(Carbon\Carbon::parse($date1));
										echo $s2;
										}

							    ?>

					    </td>
					  </tr>
					  @endforeach
					
					</table>


  
  

