<div class="container">

    <h1 class="title"><?= $title ?></h1>

    <br />

    <section class="content container-fluid">
    <table class="table table-bordered">
    <tr>
        <td class="bold">imo-number</td>
        <td class="bold">shipname</td>
        <td class="bold">home harbor</td>
        <td class="bold">home country</td>
        <td class="bold">mmsi number</td>
        <td class="bold">lenght</td>
        <td class="bold">width</td>
        <td class="bold">depth</td>
        <td class="bold">max ton allowed</td>
        <td class="bold">ruim length</td>
        <td class="bold">ruim width</td>
        <td class="bold">ruim height</td>
        <td class="bold">max dangerous substances</td>
        <td class="bold">ruim max total load ton</td>
        <td class="bold">ruim max column load ton</td>
    </tr>
	<tr>
		<td><?php echo $ship['imo-number']; ?></td>
		<td><?php echo $ship['shipname']; ?></td>
		<td><?php echo $ship['home_harbor']; ?></td>
        <td><?php echo $ship['home_country']; ?></td>
        <td><?php echo $ship['mmsi_number']; ?></td>
        <td><?php echo $ship['length_m']; ?></td>
        <td><?php echo $ship['width_m']; ?></td>
        <td><?php echo $ship['depth_m']; ?></td>
        <td><?php echo $ship['max_ton_allowed']; ?></td>
        <td><?php echo $ship['ruim_length_m']; ?></td>
        <td><?php echo $ship['ruim_width_m']; ?></td>
        <td><?php echo $ship['ruim_height_m']; ?></td>
		<td><?php echo $ship['max_dangerous_substance']; ?></td>
        <td><?php echo $ship['ruim_max_total_load_ton']; ?></td>
        <td><?php echo $ship['ruim_max_column_load_ton']; ?></td>
	</tr>

</table>