<?php 
include('connection.php');
extract($_REQUEST);
if(isset($send))
{
mysqli_query($con,"insert into feedback values('','$n','$e','$mob','$msg')");	
$msg= "<h4 style='color:green;'>commentaires envoyés avec succès</h4>";
}
?>
<footer style="background-color: #393939;">
    <div class="container-fluid">
	<div class="col-sm-4 hov">
		<img src="logo/logo2.png"width="200px"height="50px"/><br><br>
    <p class="text-justify">Informations générales à propos de l'application et ces avantages</p><br>
      <center><a href="à propos.php" class="btn btn-danger"><b>Voir plus..</b></a></center><br><br><br>
 <?php
  include('réseaux sociaux.php')
?>
	</div>&nbsp;&nbsp;
	<div class="col-sm-4 text-justify">
	       <h3 style="color:#cdd51f;">Nous Contacter</h3>
      <p style="color:white;"><strong>Addresse:&nbsp;</strong>Mediouna, CASABLANCA</p>
      <p style="color:white;"><strong>Email :&nbsp;</strong>sa.saghiranass@gmail.com</p>
      <p style="color:white;"><strong>Contact :&nbsp;</strong>(+212) 643523193</p><br><br><br>
     <center><img src="image/devlop/img2.png"class="img-responsive"style="width:200px;height:150px;border-radius:100%;"></center>
	</div>&nbsp;

	<div class="col-sm-4 text-center">
      <div class="panel panel-primary">
        <div class="panel-heading">Commentaires</div>
          <div class="panel-body">
            <?php echo @$msg; ?>
      <div class="feedback">
      <form method="post"><br>
        <div class="form-group">
          <input type="text" name="n" class="form-control" id="#"placeholder="Entrer votre nom"required>
        </div>
        <div class="form-group">
          <input type="Email" name="e" class="form-control" id="#"placeholder="Entrer votre email"required>
        </div>
        <div class="form-group">
          <input type="Number" name="mob" class="form-control" id="#"placeholder="Numéro de téléphone"required>
        </div>
        <div class="form-group">
          <textarea type="Text" name="msg" class="form-control" id="#"placeholder="Tapez votre massage"required></textarea>
        </div>
          <input type="submit" value="Envoyer" name="send" class="btn btn-primary btn-group-justified"required>
      </form>     
        </div>
       </div>
      </div>
    </div>
  </div>
</footer>