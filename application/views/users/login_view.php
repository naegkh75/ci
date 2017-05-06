<?php if($this->session->userdata('logged_in')):?>
    <h2>logout</h2>
    <?php echo form_open('user/logout');?>
    <p>
    <?php if($this->session->userdata('username')): ?>
        <?php echo "you are logged in " . $this->session->userdata('username');?>
    <?php endif;?>
    </p>
    <?php 
    $data=array('class' =>'btn btn-primary' ,'name'=>'submit','value'=>'logout' );?>
    <?php echo form_submit($data);?>

    <?Php echo form_close();?>
<?php else:?>
<h1>login user</h1>
<?php $attributes=array('id'=>'login_form','class'=>'form_horizontal')?>
<?php if($this->session->flashdata('errors')) ;?>
<?php echo $this->session->flashdata('errors');?>
<?php T_ENDIF;?>
<?php echo form_open('user/login',$attributes)?>
<div class="form-group">
    <?php echo form_label('username') ?>

    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'username',
        'placeholder'=>'enter username'
    );
    ?>
    <?php echo form_input($dataa)?>
    </div>
<div class="form-group">
    <?php echo form_label('password') ?>
    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'password',
        'placeholder'=>'enter password'
    );
    ?>
    <?php echo form_password($dataa)?>
</div>

<div class="form-group">
    <?php echo form_label('confirmpassword') ?>
    <?php
    $dataa=array(
        'class'=>'form-control',
        'name'=>'confirmpassword',
        'placeholder'=>'confirmpassword'
    );
    ?>
    <?php echo form_password($dataa)?>
</div>
<div class="form-group">
    <?php
    $dataa=array(
        'class'=>'btn btn-primary',
        'name'=>'submit',
        'value'=>'login'
    );
    ?>
    <?php echo form_submit($dataa)?>



</div>
<?php echo form_close();?>
<?php endif;?>


