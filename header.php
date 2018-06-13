<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="static/css/index.css">
<meta charset="utf-8">

	<title>forum</title>
</head>

<body>

	<form id="formulaire" action="../static/controllers/users.php" method="post" enctype="multipart/form-data">   <div>Surname :</div><input type="text" name="surname"></br> <div>Name    :</div><input type="text" name="name"></br> <div>Login   :</div><input type="text" name="login"></br> <div>Alias   :</div><input type="text" name="alias"></br> <div>Age     :</div><input type="text" name="age"></br> <div>Email   :</div><input type="text" name="mail"></br> <div>Password:</div><input type="password" name="pwd"></br> <div>Retapez votre Password:</div><input type="password" name="pwd2"></br> <div>Importez votre Avatar :</div><input type="file" name="avatar" /><br/>  <br><input type="submit" name="submit" value="Valider">    </form>


	<div id="top">
		<div id="topinside">
			<div id="topgauche">
				<img id="imglogo" src="static/img/index/sheeks-logo.png">


	


			</div>
			<div id="topdroite">
				<a href="" class="toplien">
				<span class="topbutton">PORTAIL</span>
				</a>



				<a href="" class="toplien">
				<span class="topbutton">S'ABONNER</span>
				</a>

				<a href="" class="toplien">
				<span class="topbutton">S'IDENTIFIER</span>
				</a>

				
				<span onclick="toggleForm()" class="topbutton">S'INSCRIRE</span>
	

				<a href="" class="toplien">
				<span class="topbutton">CONTACT</span>
				</a>

			</div>
		</div>
	</div>
	<div id="under">
		<div id="underinside d-block">
			
		</div>
	</div>

	<div id="habillage" >
		<div class="containeur">

		

			<div id="debutsite">
				<div id="sitebanleft">
					<img src="static/img/index/women-in-video-games.jpg" width="920px" height="300px">
				</div>
				<div id="carouselExampleIndicators" class="carousel slide d-inline-block" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100 slider" src="static/img/index/gameusee.jpg" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100 slider" src="static/img/index/2019092377.jpg" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100 slider" src="static/img/index/gameuse-1.jpg" alt="Third slide">
				    </div>
				  </div>
				  <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		

			<div id="menua"> 
				<div id="menuinside">	
					<nav class="navbar navbar-expand-lg" style="background-color: rgb(97, 0, 108);">
					  <a class="navbar-brand menubutton" href="#">HOME</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarText">
					    <ul class="navbar-nav mr-auto">
					      <li class="nav-item active">
					        <a class="nav-link menubutton" href="#">FORUM <span class="sr-only">(current)</span></a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link menubutton" href="#">ACTUALITES</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link menubutton" href="#">PRESENTATION DU SITE</a>
					      </li>
					    </ul>
					    <form class="form-inline">
						    <input class="form-control mr-sm-2" type="search" placeholder="recherche" aria-label="Search">
						    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
						 </form>
					  </div>
					</nav>
				</div>
			</div>


		    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
     		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    




<script type="text/javascript" src="static/js/index.js"></script>


</body>
</html>