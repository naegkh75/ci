<h1>projects</h1>
<style>
    .table>thead:first-child>tr:first-child>th {
        border-top: 0;
        width: 50px;
    }
</style>
<p class="btn-success">
    <?php if($this->session->flashdata('project_update'));?>
    <?php echo $this->session->flashdata('project_update');?>
    <?php T_ENDIF;?>
    <?php if($this->session->flashdata('project_created'));?>
    <?php echo $this->session->flashdata('project_created');?>
    <?php T_ENDIF;?>
    <?php if($this->session->flashdata('project_deleted'));?>
    <?php echo $this->session->flashdata('project_deleted');?>
    <?php T_ENDIF;?>


</p>
<a class="btn btn-primary pull-right" href="<?php echo base_url()?>index.php/projects/create">Creat project</a>
<table class="table table-hover">
    <thead>
    <tr>

        <th>project Name</th>

        <th>project body</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($projects as $project):?>
        <tr>
        <?php echo"<td><a href='".base_url()."index.php/projects/display/".$project->id."'>". $project->project_name."</a></td>"; ?>
        <?php echo"<td>". $project->project_body."</td>"; ?>
            <td><a class="btn btn-danger" href="<?php echo base_url();?>index.php/projects/delete/<?php echo $project->id;?>"><span class="glyphicon glyphicon-remove "></span></a></td>

        </tr>
    <?php endforeach;?>
    </tbody>
</table>