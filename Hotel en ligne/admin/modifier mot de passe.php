<?php 
if(isset($update))
{
$sql=mysqli_query($con,"select * from admin where username='$admin' and password='$op' ");
	if(mysqli_num_rows($sql))
	{
		if($np==$cp)
		{
		mysqli_query($con,"update admin set password='$np' where username='$admin' ");	
		echo "<h3 style='color:blue'>Password updated successfully</h3>";
		}
		else
		{
			echo "<h3 style='color:red'>New and confirm doesn't match</h3>";
		}
	}
	else
	{
	echo "<h3 style='color:red'>Old Password doesn't match</h3>";	
	}
	
}
?>
<form method="post" enctype="multipart/form-data">
<table class="table table-bordered table-striped table-hover">
	<h1>Modifier Mot de passe</h1><hr>
	<tr style="height:40">
		<th>Entrer votre ancien mot de passe</th>
		<td><input type="password" name="op" class="form-control"required/></td>
	</tr>

	<tr>	
		<th>Entrer votre nouveau mot de passe</th>
		<td><input type="password" name="np" class="form-control"required/>
		</td>
	</tr>
	
	<tr>	
		<th>Confirmer votre nouveau mot de passe</th>
		<td><input type="password" name="cp" class="form-control"required/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2" align="center">
			<input type="submit" class="btn btn-primary" value="Modifier Mot de passe" name="update"required>
		</td>
	</tr>
</table> 
</form>