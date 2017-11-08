<div class="container">

    <h1 class="title">Containers</h1>

    <br />
            <a href="<?php echo site_url('Container/create'); ?>"><p>Create new Containers.</p></a>
    <section class="content container-fluid" align="center">
    <table class="table table-bordered" align="center">
    <tr>
        <td class="bold" style="font-weight: bold;">View the containers on each Ship.</td>
    </tr>
        <?php foreach ($ships as $ship): ?>
	<tr>
        <td><a href="<?php echo site_url('container/view/'.$ship['id']); ?>"><?php echo $ship['name'];?></a></td>

	</tr>
        <?php endforeach; ?>

</table>
</section>
</div>

