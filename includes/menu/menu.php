	
	<header id="header">
			<nav class="navbar navbar-inverse navbar-fixed-top" id="nav">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<div onclick="menuButtonAnimation(this)">
								<span class="icon-bar bar1"></span>
								<span class="icon-bar bar2"></span>
								<span class="icon-bar bar3"></span>
							</div>
						</button>
						
						<a class="navbar-brand" rel="home" href="index.php?page=home" >
								<img src="images/logo-ConvertImage.png" alt="logo" style="max-width:40px; margin-top: -9px; float:left">
								<p style="font-size:20px; color:white; float:left;"> <b>Projet 3.0</b></p>
						</a>	
					
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="index.php?page=home">Accueil</a></li>    
							<li><a href="index.php?page=search">Moteur de recherche</a></li> 							
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Le Projet <i class="fa fa-angle-down"></i> </a>
								<ul  class="dropdown-menu" role="menu" aria-labelledby="menu1">
									<li role="presentation"><a href="index.php?page=report" role="menuitem">Rapport</a></li>
									<li role="presentation"><a href="index.php?page=development" role="menuitem">Développement</a></li>
								</ul>
							</li> 
							<li><a href="index.php?page=contact">Contact</a></li>  
						</ul>
					</div>	
				</div>
			</nav>
	</header><!--/#header -->