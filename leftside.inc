		<div class="col-sm-2">
		  <div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">Upcoming Events</div>
			<div class="panel-body">
			
			  <script>
			    var currentDate = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
			    var day = currentDate.getDate()
			    var month = currentDate.getMonth() + 1
			    var year = currentDate.getFullYear()
			    var tomorrow =  month + "/" + day + "/" + year;
			    var nexttomorrow =  month + "/" + (day + 1) + "/" + year;
			    var lasttomorrow =  month + "/" + (day + 3) + "/" + year;
			  </script>
			
			  <div class="list-group">
				<a href="#" class="list-group-item">
				  <h4 class="list-group-item-heading">Smooth Jazz Band</h4>
				  <p class="list-group-item-text"><script>document.write(tomorrow)</script><br>Music Room</p>
				</a>
			  </div>
			  <div class="list-group">
			    <a href="#" class="list-group-item">
				  <h4 class="list-group-item-heading">Bingo Night</h4>
				  <p class="list-group-item-text"><script>document.write(nexttomorrow)</script><br>Ball Room</p>
				</a>
			  </div>
			  <div class="list-group">
				<a href="#" class="list-group-item">
				  <h4 class="list-group-item-heading">Poker Night</h4>
				  <p class="list-group-item-text"><script>document.write(lasttomorrow)</script><br>Green Room</p>
				</a>
		  	  </div>


			</div>

			<!-- List group -->
			
	
		  </div> <!-- end panel panel-default -->
		</div> <!-- col-sm-2 -->

