<div class="container">

    <h1 class="title">Ships</h1>

    <br />

    <section class="content container-fluid">
    <table class="table table-bordered">
    <tr>
        <td class="bold" style="font-weight: bold;">Name</td>
        <td class="bold" style="font-weight: bold;">Levels</td>
        <td class="bold" style="font-weight: bold;">Space</td>
        <td class="bold" style="font-weight: bold;">Max weight</td>
        <td class="bold" style="font-weight: bold;">Route id</td>
    </tr>
        <?php foreach ($ships as $ship): ?>
	<tr>
		<td><?php echo $ship['name']; ?></td>
		<td><?php echo $ship['levels']; ?></td>
		<td><?php echo $ship['space']; ?></td>
        <td><?php echo $ship['max_weight']; ?></td>
        <td><?php echo $ship['route_id']; ?></td>
	</tr>
        <?php endforeach; ?>
</table>
</section>
</div>