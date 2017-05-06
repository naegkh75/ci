<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url();?>">CI APP</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url();?>">home <span class="sr-only">(current)</span></a></li>
                <li ><a href="<?php echo base_url();?>index.php/projects">projects<span class="sr-only">(current)</span></a></li>
                <li ><a href="<?php echo base_url();?>index.php/user/register">register<span class="sr-only">(current)</span></a></li>


            </ul>
            <?php if ($this->session->userdata('logged_in')): ?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url()?>index.php/user/logout">loqout</a></li>
            </ul>
            <?php endif; ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">

    <div class="col-xs-3">
        <?php  $this->load->view('users/login_view');?>
    </div>

    <div class="col-xs-9">
        <?php $this->load->view($main_view);?>
    </div>



</div>

</body>
</html>