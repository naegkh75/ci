<h1>Create Project</h1>
<?php $attributes=array('id'=>'create_form','class'=>'form_horizontal');?>
<?php echo validation_errors("<p class='bg-danger'>") ?>
<?php echo form_open('projects/edit/'.$project_data->id.'',$attributes) ;?>
<div class="form-group">
    <?php echo form_label('Project Name');?>
    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'project_name',
        'value'=>$project_data->project_name

    );
    ?>
    <?php echo form_input($dataa); ?>
</div>
<div class="form-group">
    <?php echo form_label('Project Description');?>
    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'project_body',
        'value'=>$project_data->project_body

    );
    ?>
    <?php echo form_textarea($dataa); ?>
</div>
<div class="form-group">
    <?php
    $dataa=array(
        'class'=>'btn btn-primary',
        'name'=>'submit',
        'value'=>'Update'
    );?>
    <?php echo form_submit($dataa); ?>
</div>
<?php echo form_close(); ?>





