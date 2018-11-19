<div id="searchPage" style="min-height:680px">
	<div class="container" id="recherche">
		<h3>Search somethings</h3>
		
		<form action="index.php?page=query" name="search-form" method="POST">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search" title="Search a DBpedia Category" name="search">
				<div class="input-group-btn">
					<button class="btn btn-default" type="submit">
						<i class="glyphicon glyphicon-search"></i>
					</button>
				</div>
			</div>
			<br>
			<label for="nombre_resultat">Number of results (Select one) :</label>
			<select class="form-control" id="nombre_resultat" name="nombre_resultat">
				<option value="1">1</option>
				<option value="5" selected >5</option>
				<option value="10">10</option>
				<option value="25">25</option>
			</select>
			<br>
			<label for="language">Language (Select one) :</label>
			<select class="form-control" id="language" name="language">
				<option value="en" selected>en</option>
				<option value="fr">fr</option>
			</select>
			<br>
		</form>	
	</div><!--recherche-->
	
	<div class="container">
		<div id="info">
			<span id="info_head">Infos</span>
			<div id="info_head_title">
				<h3> <em>How does search works ?</em> </h3>
			</div>

			<ul style="padding-right:20px">
				<li> <h5> A brief resum of the mecanism :</h5> </li>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea. Etiam eu sapien ac magna euismod tincidunt. Integer rhoncus diam et ornare mollis.</p>
				<li> <h5>What can i search ? </h5></li>
				<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Praesent commodo vel lectus elementum ornare. Mauris et sodales turpis.<br> Vivamus vel convallis mauris: <em> University, Animals, Capitals ...</em></p>
			</ul>
		</div>
	</div><!--Info / Tuto-->
</div>