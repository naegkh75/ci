<h1>register form</h1>
<?php $attributes=array('id'=>'register_form','class'=>'form_horizontal');?>
<?php echo validation_errors("<p class='bg-danger'>") ?>
<?php echo form_open('user/register',$attributes) ;?>
<div class="form-group">
    <?php echo form_label('First Name');?>
    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'first_name',
        'placeholder'=>'enter username'
    );
    ?>
    <?php echo form_input($dataa); ?>
</div>
<div class="form-group">
    <?php echo form_label('Last Name');?>
    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'last_name',
        'placeholder'=>'enter Last name'
    );
    ?>
    <?php echo form_input($dataa); ?>
</div>
<div class="form-group">
    <?php echo form_label('Email');?>
    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'email',
        'placeholder'=>'enter email'
    );
    ?>
    <?php echo form_input($dataa); ?>
</div>
<div class="form-group">
    <?php echo form_label('username');?>
    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'username',
        'placeholder'=>'enter username'
    );
    ?>
    <?php echo form_input($dataa); ?>
</div>
<div class="form-group">
    <?php echo form_label('password');?>
    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'password',
        'placeholder'=>'enter password'
    );
    ?>
    <?php echo form_password($dataa); ?>
</div>
<div class="form-group">
    <?php echo form_label('confirmpassword');?>
    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'confirmpassword',
        'placeholder'=>'enter password'
    );
    ?>
    <?php echo form_password($dataa); ?>
</div>
<div class="form-group">
    <?php
    $dataa=array(
        'class'=>'btn btn-primary',
        'name'=>'submit',
        'value'=>'register'
    );?>
    <?php echo form_submit($dataa); ?>
</div>
<?php echo form_close(); ?>





