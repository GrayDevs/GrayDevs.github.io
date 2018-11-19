<div id="searchPage" style="min-height:680px">
	<div class="container" id="recherche">
		<h3>Rechercher quelque chose</h3>
		
		<form action="index.php?page=query" name="search-form" method="POST">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Recherche" title="Search a DBpedia Category" name="search">
				<div class="input-group-btn">
					<button class="btn btn-default" type="submit">
						<i class="glyphicon glyphicon-search"></i>
					</button>
				</div>
			</div>
			<br>
			<label for="nombre_resultat">Nombre de résultat :</label>
			<select class="form-control" id="nombre_resultat" name="nombre_resultat">
				<option value="1">1</option>
				<option value="5" selected >5</option>
				<option value="10">10</option>
				<option value="25">25</option>
			</select>
			<br>
			<label for="language">Langage :</label>
			<select class="form-control" id="language" name="language">
				<option value="en" selected>English</option>
				<option value="fr">Français</option>
			</select>
			<br>
		</form>	
	</div><!--recherche-->
	
	<div class="container">
		<div id="info">
			<span id="info_head">Infos</span>
			<div id="info_head_title">
				<h3> <em>Comment fonctionnent les recherches ?</em> </h3>
			</div>

			<ul style="padding-right:20px">
				<li> <h5> Un bref résumé du mécanisme :</h5> </li>
				<p> Les données que vous entrez dans le formulaire sont récupérées, misent en forme et envoyé à la <a onclick="window.open(this.href); return false;" href="http://dbpedia.org/sparql">base de données de dbpedia</a>. Celle-ci explore le web sémantique, récupère les informations et nous les renvoie dans un format spécial, le JSON. À partir de là, il nous suffit de décoder ce fichier et de le mettre en forme. </p>
				<li> <h5>Qu'est-ce que je peux chercher ? </h5></li>
				<p>Vous pouvez uniquement chercher une thématique, une requête sur un élément précis n'aboutira pas, à noter que le casse n'a pas d'importance ici. Voici quelque exemple de requêtes valides: université, plante, animal, banque, ... Vous avez compris ? Alors à vous de jouer maintenant.</p>
				<li> <h5>Les requêtes que vous tentez ne fonctionnent pas  ? </h5></li>
				<p> Malheureusement, on touche ici aux limites du système, le web sémantique n'est pas encore très développé.<br>
				Cela dit, wikipedia ne contient pas forcément les catégories que vous cherchez, et de même, dbpedia, qui est un projet assez ancien, n'as pas structuré toutes données présentes sur la fameuse encyclopédie en ligne.
				</p>
			</ul>
		</div>
	</div><!--Info / Tuto-->
</div>