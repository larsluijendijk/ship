<div class="container">

    <h1 class="title">Containers from ship 
            <?php foreach ($ship as $shipname): ?>
            <?= $shipname['name'] ?>
            <?php endforeach; ?>
    </h1>

    <br />

    <section class="content container-fluid">
    <table class="table table-bordered">
    <tr>
        <td class="bold" style="font-weight: bold;">Name</td>
        <td class="bold" style="font-weight: bold;">Type</td>
        <td class="bold" style="font-weight: bold;">Weight</td>
    </tr>
        <?php foreach ($containers as $container): ?>
	<tr>
		<td><?php echo $container['name']; ?></td>
		<td><?php echo $container['type']; ?></td>
        <td><?php echo $container['weight']; ?></td>
        <td><a href="<?php echo site_url('ship/edit/'.$container['id']); ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
        <td><a href="<?php echo site_url('ship/delete/'.$container['id']); ?>" onClick="return confirm('Are you sure you want to delete?')"><span class="glyphicon glyphicon-trash"></span></a></td>
	</tr>
        <?php endforeach; ?>
        </table>
</section>
</div>

