<h1>edit task</h1>
<?php $attributes=array('id'=>'edit_task_form','class'=>'form_horizontal');?>
<?php echo validation_errors("<p class='bg-danger'>") ?>
<?php echo form_open('task/edit/'.$this->uri->segment(3).'',$attributes) ;?>
<div class="form-group">
    <?php echo form_label('task Name');?>
    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'task_name',
        'value'=>$the_task->task_name
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
        'value'=>$the_task->task_body
    );
    ?>
    <?php echo form_textarea($dataa); ?>
</div>
<div class="form-group">
    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'duo_date',
        'type'=>'date',
        'value'=>$the_task->duo_date
    );
    ?>
    <?php echo form_input($dataa); ?>
</div>
<div class="form-group">
    <?php
    $dataa=array(
        'class'=>'btn btn-primary',
        'name'=>'submit',
        'value'=>'update'
    );?>
    <?php echo form_submit($dataa); ?>
</div>
<?php echo form_close(); ?>





