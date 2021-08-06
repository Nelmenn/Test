<h1>Admin</h1>

<a href="/admin/default/create" class="btn btn-primary">New</a>
<table class="table">
	<thead>
		<tr>
			<td>#</td>
			<td>Name</td>
			<td>Hold</td>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($model as $item): ?>
			<tr>
				<td><?=$item->$id?></td>
				<td><?=$item->$title?></td>
				<td>
					<a href="/admin/default/edit/<?=$item->id?>">Edit</a>
					<a href="/admin/default/delete/<?=$item->id?>">Delete</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>