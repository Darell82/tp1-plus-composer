<h2>liste utilisateurs</h2>
<form action="index.php?p=utilisateurs.service" method="post">
	<select name="id" class="form form-control">
		<option value=" ">--Choisir--</option>
		<?php foreach (App::getInstance()->getTable('Service')->all() as $service):?>
			<option value="<?=$service->id;?>"><?=$service->nom_du_service;?></option>
		<?php endforeach; ?>
	</select>
	<input class="btn btn-primary form-control" type="submit" value="Filtrer">
</form>
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
 			<td><?= $utilisateur->adresseComplete; ?></td>
 			<td><?= $utilisateur->numero_de_telephone; ?></td>
 			<td><?= $utilisateur->service; ?></td>

 			</form>
 			 			
 		</tr>
<?php endforeach; ?>
	</tbody>
</table>