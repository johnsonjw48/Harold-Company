<!DOCTYPE html>
<html>
<head>
	<title>Harold Company</title>
	<meta charset="utf-8">
   <!--   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="Public/style.css">
	
	 <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script type="text/javascript" src="Public/js/script.js" async></script>


</head>


<body>


	<header>
		<div class="wrapper">
			<h1> <a href="index.php"><img src="Public/HC5.jpeg" height="80px" width="200px" /></a>  </span></h1>

			<nav>
				
				<ul>

					 
					 <?php if( isset($_SESSION['user']) && $_SESSION['user']['Identifiant']==="isbath48" ): ?>
						
					<li> <a href="index.php?action=Admin">Admin |</a></li>
					<?php endif; ?>
					 
					<?php if( isset($_SESSION['user'])): ?>
        			<li><a href="index.php?action=deconnexion">deconnexion |</a></li>
					<li> <a href="index.php?action=Louer">Louer |</a></li>
					<li> <a href="index.php?action=Acheter">Acheter / Vendre </a></li>

					<?php else: ?>
          				<li><a href="index.php?action=Connexion">Connexion |</a></li>
						<li> <a href="index.php?action=Louer">Louer |</a></li>
						<li> <a href="index.php?action=Acheter">Acheter / Vendre </a></li>
						
      				 <?php endif; ?>
      				  

      				  
					<!-- <li> <a href="">Acheter</a></li>
					<li> <a href="">Contacts</a></li> -->

				</ul>

			</nav>



		</div>


	</header>