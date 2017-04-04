<h2>liste utilisateurs</h2>

<table class="table table-hover col-md-12 text-center">
		<thead>
			<tr>
				<td>Nom</td>
				<td>Description</td>
				<td>Action</td>
			</tr>
		</thead>
	<tbody>
			
<?php foreach (App::getInstance()->getTable("service")->all() as $service) : ?>
 		<tr>
 			<td></td>
 			<td><?= $service->nom_du_service; ?></td>
 			<td><?= $service->description; ?></td>
 			<td><form action="admin.php?p=services.delete" method="post">
 				<input type="hidden" name="id" value="<?=$service->id;?>">
 				<input type="submit" class="btn btn-danger" value="DELETE">
 			</form>
 			 			
 		</tr>
<?php endforeach; ?>
	</tbody>
</table>