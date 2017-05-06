<p class="bg-success">

    <?php if($this->session->flashdata('login_success'));?>
    <?php echo $this->session->flashdata('login_success');?>
    <?php T_ENDIF;?>

    <?php if($this->session->flashdata('user_register'));?>
    <?php echo $this->session->flashdata('user_register');?>
    <?php T_ENDIF;?>

</p>
<p class="bg-danger">
<?php
if (!$this->session->userdata('logged_in')) {
      echo "you are not allowed logged in";
    }

?>
	
</p>
<p class="bg-danger">
    <?php if($this->session->flashdata('login_failed'));?>
    <?php echo $this->session->flashdata('login_failed');?>
    <?php T_ENDIF;?>
</p>
<div class="jumbotron">
    <h1 class="text-center">welcome to Nae App</h1>
</div>

<?php if (isset($pj)):?>

<h1>HELOO this is a view</h1>
<table class="table table-hover">
    <thead>
    <tr>

        <th>project Name</th>

        <th>project body</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($pj as $project):?>
        <tr>
            <td><?php echo $project->project_name; ?></td>
            <td><?php echo $project->project_body; ?></td>
           <td><a href="<?php echo base_url()?>/index.php/projects">view</a></td>

        </tr>
    <?php endforeach;?>
    </tbody>
</table>
<?php endif;?>