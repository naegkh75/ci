<h1>Create task</h1>
<?php $attributes=array('id'=>'create_form','class'=>'form_horizontal');?>
<?php echo validation_errors("<p class='bg-danger'>") ?>
<?php echo form_open('task/create/'.$this->uri->segment(3).'',$attributes) ;?>
<div class="form-group">
    <?php echo form_label('task Name');?>
    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'task_name',
        'placeholder'=>'Enter task Name'
    );
    ?>
    <?php echo form_input($dataa); ?>
</div>
<div class="form-group">
    <?php echo form_label('task Description');?>
    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'task_body',
    );
    ?>
    <?php echo form_textarea($dataa); ?>
</div>
<div class="form-group">
    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'duo_date',
        'type'=>'date'
    );
    ?>
    <?php echo form_input($dataa); ?>
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





