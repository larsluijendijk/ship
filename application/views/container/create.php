<div class="container">
    <div class="row">
        <br>
        <div class="col-xs-12 .col-md-8-centered well">

            <?php echo form_open('container/create'); ?>
            
            <fieldset>
                <legend class="text-center"><h1 class="title">Create Containers</h1></legend>
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
                            <label for="type" class="control-label">Type</label>
                            <br/>
                        <select class="selectpicker" id="type" name="type">
                          <option>Normal</option>
                          <option>Heavy</option>
                          <option>Dangerous</option>
                          <option>Open</option>
                        </select>
                        <span class="text-danger"><?php echo form_error('type'); ?></span>
                        </div>
                    </div>
                </div>                
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="weight" class="control-label">Weight</label>
                            <input class="form-control" id="weight" name="weight" placeholder="Weight" type="text" value="<?php echo set_value('weight'); ?>" /> 
                            <span class="text-danger"><?php echo form_error('weight'); ?></span>
                        </div>
                    </div>
                </div>                   
                    <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="type" class="control-label">Ship</label>
                            <br/>
                        <select class="selectpicker" id="ship" name="ship">
                                
                                <?php foreach ($ships as $ship):
                                    echo '<option>' . $ship['name'] . '</option> ';
                                endforeach;?>

                        <span class="text-danger"><?php echo form_error('type'); ?></span>
                        </div>
                    </div>
                </div>          



                <div class="form-gruop">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                        <br/>
                            <input id="btn_signup" name="btn_signup" type="submit" class="btn btn-primary col-xs-12 .col-md-8" value="Create Containers"/>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>