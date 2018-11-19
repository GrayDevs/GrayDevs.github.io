
<?php
//$search must be an actual page name that must be exact and it is case sensitive.)
//test $search = "University";

//Récupération des variables
$search = $_POST["search"]; 
$language = $_POST["language"];
$nombre_resultat = $_POST["nombre_resultat"];

//Protection à effectuer à l'affichage pour éviter l'interprétation d'un script même si utilisation de la donn�e r�duit les risques
//htmlentities(strip_tags(...)

$requestURL = getUrlDbpedia($search, $language, $nombre_resultat);
/*$donnee = request($requestURL);*/
$responseArray = json_decode(request($requestURL), true);

echo '<div class="container" id="resultat" style="clear: both;">';
	echo '<h3>Résultat(s) pour : <i style="font-size:22px">'.$search.'</i> </h3>';
	echo "Langue sélectionnée : <b>".$language."</b> | Nombre de résultats : <b>".$nombre_resultat."</b>";
	echo '<a href="index.php?page=search"> 
			<button id="returnBtn">
			  Relancez
			</button> 
		</a>';
	echo '<hr>';
echo '<div style="min-height:389px;">';
if(empty($responseArray["results"]["bindings"]))
{
		echo '<div id="boite_erreur"> <span class="closebtn">&times;</span>';
			echo '<div class="alert-warning" style="background-color: #ff9800;">';
				echo '<h4><b>Attention !</b> Une erreur s\'est produite</h4>';
			echo '</div>';
			echo '<div class="warning" style="background-color: #ffffcc; border-left: 6px solid #ffeb3b;">';
				echo '<b>Les erreurs les plus communes :</b><br>';
				echo '- La requête est mal orthographiée <br>';
				echo '- La langue séléctionnée ne correspond pas à celle du mot recherché';
			echo '</div>';
		echo '</div>';
	
	
}/*fi*/
else{
	for( $i=0; $i<$nombre_resultat ;$i++)
	{	$j=$i+1;
		
		echo '<button class="accordion"><b>'.$j.'</b>&nbsp('.$responseArray["results"]["bindings"][$i]["ranking"]["value"].') | '.$responseArray["results"]["bindings"][$i]["nom"]["value"].'</button>';
		echo '<div class="panel" style="margin-top:10px">';
			echo '<div style="display: inline-block;">';
				echo '<p style="float:left; width:70%">'.$responseArray["results"]["bindings"][$i]["description"]["value"].'</p>';
				echo "<img src='".$responseArray["results"]["bindings"][$i]["image"]["value"]."' style='float:right;'/>";
			echo '</div>';
			echo '<a  onclick="window.open(this.href); return false;" href="'.$responseArray["results"]["bindings"][$i]["wiki"]["value"].'"><button class="button" id="wiki_link_button"> <span> Wikipedia </span></button></a>';
		echo '</div>';
	}
}

echo '</div>';
echo '<hr>';
echo '</div><!--resultat-->';
	
/* TEST
echo "<h1> Tests </h1>";
echo "<h3> Request URL: </h3> <p>".$requestURL."</p>";
echo "<h3> JSON Response: </h3> <p>".$donnee."</p>";
echo "<h3> Parsed Response (Array): </h3> <p>".printArray($responseArray)."</p>";
*/
/////////////////////////////////////////////////////////
/////////////////////// FONCTIONS ///////////////////////

/*//////////////// getUrlDbpedia ////////////
Description: Formate requête sparql et donnée utilisateur pour obtenir une url
Argument(s): terme (catégorie) entrée par l'utilisateur ainsi que le nombre de résultats et la langue (�ventuellement)
Résultat: URL valide ($searchUrl) à envoyer au triple-store de dbpedia
///////////////////////////////////////////*/
function getUrlDbpedia($search, $language, $nombre_resultat)
{
   $format = 'json';
   
   /*gestion des problèmes liées à la casse*/
   $search = strtolower($search);
   
   $query = 
   "PREFIX rdf:<http://www.w3.org/1999/02/22-rdf-syntax-ns#>
	PREFIX vrank:<http://purl.org/voc/vrank#> 
	PREFIX dbo:<http://dbpedia.org/ontology/>
	PREFIX dbp:<http://dbpedia.org/property/>

	SELECT DISTINCT ?nom, ?ranking, ?wiki, ?description, ?image
	FROM <http://dbpedia.org>
	FROM <http://people.aifb.kit.edu/ath/#DBpedia_PageRank>
	WHERE {
		?ressource rdf:type ?y.
		?y rdfs:label '".$search."'@".$language.".
		?ressource vrank:hasRank/vrank:rankValue ?ranking.
		OPTIONAL{
			?ressource foaf:isPrimaryTopicOf ?wiki.
		}
		OPTIONAL{
			?ressource  rdfs:label ?nom.
            FILTER(lang(?nom) = '".$language."')
		}
		OPTIONAL{
			?ressource dbo:thumbnail ?image.
		}
		OPTIONAL{
			?ressource dbo:abstract ?description.
			FILTER(lang(?description) = '".$language."')
		}
	}ORDER BY DESC(?ranking) LIMIT ".$nombre_resultat;
   
   $searchUrl = 'http://dbpedia.org/sparql?'
      .'query='.urlencode($query) //encode les caractéres spéciaux pour l'url
      .'&format='.$format
	  .'&timeout=30000&debug=on';

   return $searchUrl;
}

/*//////////////// request ////////////////
Description: permet de récupérer le JSON en interrogeant la BDD
Argument(s): URL formé précédement (searchUrl)
Résultat: données json ($json_data)
///////////////////////////////////////////*/
function request($searchUrl){
	//on privilégie file_get_contents() plutôt que cURL
	//utilisation de file_get_contents : file_get_contents(path,_path,context,start,max_length)
	$json_data = file_get_contents("$searchUrl");
	return $json_data;
}

/*//////////////// printArray ////////////////
Description: affiche le json parsé (ordonnée), permet de visualiser les données
Argument(s): tableau => le json passé par json_decode(...,true) est un tableau
///////////////////////////////////////////*/
function printArray($array, $spaces = "")
{
	$retValue = "";
	
	if(is_array($array))
	{
		$spaces = $spaces
			."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			
		$retValue = $retValue."</br>";
		
		foreach(array_keys($array) as $key)
		{
			$retValue = $retValue.$spaces
				."<strong>".$key."</strong>"
				.printArray($array[$key],
					$spaces);
		}
		$spaces = substr($spaces, 0, -30);
	}
	else { $retValue = $retValue." - ".$array."</br>"; }
		
	return $retValue;
}

?>
