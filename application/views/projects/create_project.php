<h1>Create Project</h1>
<?php $attributes=array('id'=>'create_form','class'=>'form_horizontal');?>
<?php echo validation_errors("<p class='bg-danger'>") ?>
<?php echo form_open('projects/create',$attributes) ;?>
<div class="form-group">
    <?php echo form_label('Project Name');?>
    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'project_name',
        'placeholder'=>'Enter Project Name'
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
    );
    ?>
    <?php echo form_textarea($dataa); ?>
</div>
<div class="form-group">
    <?php
    $dataa=array(
        'class'=>'btn btn-primary',
        'name'=>'submit',
        'value'=>'Create'
    );?>
    <?php echo form_submit($dataa); ?>
</div>
<?php echo form_close(); ?>





