
<?php

//Tableau des pages autorisées à l'include/require
$pagesOK['home'] = 'home.php';
$pagesOK['report'] = 'report.php';
$pagesOK['search'] = 'search.php';
$pagesOK['development'] = 'development.php';
$pagesOK['contact'] = 'contact.php';

$pagesOK['404'] = '404.php';
$pagesOK['query'] = 'query.php';

//Page par defaut
$page = 'home';
//Si le $_GET['page'] est dans les keys du tableau $pagesOK
if(!empty($_GET['page']) && array_key_exists($_GET['page'], $pagesOK))
{
	//Remplace la valeur par defaut par celle de l'URL
	$page = $_GET['page'];
}
/*renvoie vers la page d'erreur
else if (!array_key_exists($_GET['page'], $pagesOK))
{
	$page = $_GET['404'];
}
*/

?>

<!-- Appel head/menu/page/footer -->
<?php require('includes/head/head.php'); ?>	
<?php require('includes/menu/menu.php'); ?>	

<?php include('includes/'.$pagesOK[$page]); ?>

<?php require('includes/foot/foot.php'); ?>
