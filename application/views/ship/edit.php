<div class="container">
    <section class="content container-fluid">

    <?php echo validation_errors(); ?>
    <?php echo form_open('ship/edit/'.$ship['id']); ?>

    <table>

        <tr>
            <td><label for="text">Name</label></td>
            <td><input type="input" name="name" size="50" value="<?php echo $ship['name'] ?>" /></td>
        </tr>
                <tr>
            <td><label for="text">Levels</label></td>
            <td><input type="input" name="levels" size="4" value="<?php echo $ship['levels'] ?>" /></td>
        </tr>
                <tr>
            <td><label for="text">X Amount</label></td>
            <td><input type="input" name="x_amount_space" size="4" value="<?php echo $ship['x_amount_space'] ?>" /></td>
        </tr>                <tr>
            <td><label for="text">Y Amount</label></td>
            <td><input type="input" name="y_amount_space" size="4" value="<?php echo $ship['y_amount_space'] ?>" /></td>
        </tr>
                <tr>
            <td><label for="text">Max Weight</label></td>
            <td><input type="input" name="max_weight" size="4" value="<?php echo $ship['max_weight'] ?>" /></td>
        </tr>
                <tr>
            <td><label for="text">Route</label></td>
            <td><input type="input" name="route_id" size="50" value="<?php echo $ship['route_id'] ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit item" /></td>
        </tr>
    </table>
    <?php echo form_close(); ?>
    </section>
</div>