<h2>all projects</h2>

<a href="{{ route('project.create') }}">create project </a><br><br>




               <table >
					  <tr>
					    <th>all projects</th>
					    <th>before finish</th> 
					    <th>after finish</th>
					  </tr>
					  

					  @foreach($projects as $pr)
					  <tr>
					    <td><a href="{{ route('project.show',$pr->id) }}">{{$pr->ProjectName}}</a></td>
					    <td>
					    	<?php
									$date1=$pr->ProjectEndDate ;


									$date2=$pr->ProjectStartDate ;

									if($date1>$date2){
									$s2=Carbon\Carbon::parse($date2)->diffForHumans(Carbon\Carbon::parse($date1));
									echo $s2;
									}

							?>

					    </td> 
					      @endforeach


					    @foreach($projects as $pr)

					    <td>
					    		<?php

						     	    	$date1=$pr->ProjectEndDate ;


										$date2=$pr->ProjectStartDate ;

										if($date1<$date2){
										$s2=Carbon\Carbon::parse($date2)->diffForHumans(Carbon\Carbon::parse($date1));
										echo $s2;
										}

							    ?>

					    </td>
					  </tr>
					  @endforeach
					
					</table>


  
  
