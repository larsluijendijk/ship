<div class="container">
    <div class="row">
        <br>
        <div class="col-xs-12 .col-md-8-centered well">

            <?php echo form_open('ship/create'); ?>
            
            <fieldset>
                <legend class="text-center"><h1 class="title">Ships</h1></legend>
            </fieldset>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="name" class="control-label">Name</label>
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" value="<?php echo set_value('name'); ?>" /> 
                            <span class="text-danger"><?php echo form_error('name'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="levels" class="control-label">Levels</label>
                            <input class="form-control" id="levels" name="levels" placeholder="Levels" type="text" value="<?php echo set_value('levels'); ?>" /> 
                            <span class="text-danger"><?php echo form_error('levels'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="x_amount_space" class="control-label">Length</label>
                            <input class="form-control" id="x_amount_space" name="x_amount_space" placeholder="Length" type="text" value="<?php echo set_value('x_amount_space'); ?>" /> 
                            <span class="text-danger"><?php echo form_error('x_amount_space'); ?></span>
                        </div>
                    </div>
                </div>                

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="y_amount_space" class="control-label">Width</label>
                            <input class="form-control" id="y_amount_space" name="y_amount_space" placeholder="Width" type="text" value="<?php echo set_value('y_amount_space'); ?>" /> 
                            <span class="text-danger"><?php echo form_error('y_amount_space'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="max_weight" class="control-label">Max weight</label>
                            <input class="form-control" id="max_weight" name="max_weight" placeholder="Max weight" type="text" value="<?php echo set_value('max_weight'); ?>" /> 
                            <span class="text-danger"><?php echo form_error('max_weight'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="route_id" class="control-label">Route</label>
                            <input class="form-control" id="route_id" name="route_id" placeholder="Route" type="text" value="<?php echo set_value('route_id'); ?>" /> 
                            <span class="text-danger"><?php echo form_error('route_id'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="form-gruop">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <input id="btn_signup" name="btn_signup" type="submit" class="btn btn-primary col-xs-12 .col-md-8" value="Create Ship"/>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>