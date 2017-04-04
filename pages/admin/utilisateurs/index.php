	<h2>Ajouter un utilisateur</h2>
	<table class="table table-condensed col-md-12 text-center">
	<tbody>
		<tr><form action="admin.php?p=utilisateurs.add" method="post">
 			<input type="hidden" name="id" value="">
			<td><input type="text" name="nom" value="" placeholder="Nom"></td>
 			<td><input type="text" name="prenom" value="" placeholder="Premon"></td>
 			<td><input type="date" name="date_de_naissance" value="" placeholder="mm/dd/yyyy"></td>
 			<td><input type="text" name="adresse" value="" placeholder="Adresse"></td>
 		</tr>
 		<tr>
 			<td><input type="text" name="code_postal" value="" placeholder="Code Postal"></td>
 			<td><input type="text" name="numero_de_telephone" value="" placeholder="Telephone"></td>
 			<td>
 			<select name="services_id" class="form form-control">
					<option value=" ">--Choisir--</option>
						<?php foreach (App::getInstance()->getTable('Service')->all() as $service):?>
						<option value="<?=$service->id;?>" <?=($service->id)? 'selected="selected"' : ''?>"><?=	$service->nom_du_service;?>
					</option>
				<?php endforeach; ?>
			</select></td>

 			<td>
 				<input type="submit" class="btn btn-success" value="ADD">
 			</form>
 			 			
 		</tr>
 	</tbody>
 	</table>
<h2>liste utilisateurs</h2>
<table class="table table-hover col-md-12 text-center">
		<thead>
			<tr>
				<td>Nom</td>
				<td>Age</td>
				<td>Adresse</td>
				<td>Telephone</td>
				<td>Service</td>
			</tr>
		</thead>
	<tbody>
			
<?php foreach (App::getInstance()->getTable("utilisateur")->allWithService() as $utilisateur) : ?>
 		<tr>
 			<td><?= $utilisateur->identity; ?></td>
 			<td><?= $utilisateur->age; ?></td>
 			<td><?= $utilisateur->adresseComplete ?></td>
 			<td><?= $utilisateur->numero_de_telephone; ?></td>
 			<td><?= $utilisateur->service; ?></td>
 			<td><form action="admin.php?p=utilisateurs.delete" method="post">
 				<input type="hidden" name="id" value="<?=$utilisateur->id;?>">
 				<input type="submit" class="btn btn-danger" value="DELETE">
 			</form>
 			 			
 		</tr>
<?php endforeach; ?>
	</tbody>
</table>

