<?php 
session_start();
extract($_REQUEST);
include('../connection.php');
$admin=$_SESSION['admin_logged_in'];	
if($admin=="")
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <title>Tableau de bord Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="dashboard.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
  </style>
  </head>
  <body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bienvenue <?php echo $admin; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="tableau de bord.php?option=admin_profile">Profil</a></li>
            <li><a href="se déconnecter.php">Se déconnecter</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="tableau de bord.php?option=update_password">Modifier Mot de passe</a></li>
            <li><a href="tableau de bord.php?option=feedback">Commentaires</a></li>
            <li><a href="tableau de bord.php?option=rooms">Chambres</a></li>
			<li><a href="tableau de bord.php?option=booking_details">Détails résérvations</a></li>
      <li><a href="tableau de bord.php?option=user_registration">Enregistrement de l'utilisateur</a></li>
			<li><a href="tableau de bord.php?option=slider">Curseur</a></li>
      <li><a href="#">Paiement</a></li>
			<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Paramètres <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="#">Modifier Logo</a></li>
              <li><a href="#">Modifier Addresse</a></li>
          </ul>
      </li>
          </ul>
          </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php 
@$opt=$_GET['option'];
if($opt=="")
{
include('rapports.php');	
}
else
{
	if($opt=="feedback")
	{
	include('commentaires.php');	
	}
	else if($opt=="slider")
	{
	include('curseur.php');	
	}
	else if($opt=="update_slider")
	{
	include('modifier curseur.php');	
	}
	else if($opt=="add_slider")
	{
	include('ajouter curseur.php');	
	}
	else if($opt=="update_password")
	{
	include('modifier mot de passe.php');	
	}
	else if($opt=="rooms")
	{
	include('chambres.php');	
	}
	
	else if($opt=="add_rooms")
	{
	include('ajouter chambres.php');	
	}
	else if($opt=="delete_room")
	{
	include('supprimer chambres.php');	
	}
  
  else if($opt=="update_room")
  {
    include('modifier chambre.php');
  }
  else if($opt=="booking_details")
  {
    include('détails réservations.php');
  }
  else if($opt=="user_registration")
  {
    include('enregistrer utilisateur.php');
  }
  else if($opt=="admin_profile")
  {
    include('profil administrateur.php');
  }
}
?>
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>