<style>
table {
    border-collapse: separate;
    empty-cells: show;

}
td{
        width: 10pt;
        height: 10pt;
}
</style>

<div class="container">
    <h1 class="title">Containers from ship 
            <?= $name?>
    </h1>
<?php
echo "<table border='1'><br />";

for ($row = 0; $row < $x; $row ++) {
   echo "<tr>";

   for ($col = 1; $col <= $y; $col ++) {
        echo '<td></td>';
        /*, ($col + ($row * $y)), */
        // x is length, y is width.
        // y has to be the same as y and is y_amount_space
   }

   echo "</tr>";
}

echo "</table>";
var_dump($test); 
?>



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
<h2>Total weight is <?= $totalweight?></h2>
</div>
