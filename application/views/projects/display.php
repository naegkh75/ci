<div class="col-xs-9">
    <h1>Project name:<?php echo $project_data->project_name;?></h1>
    <p>Data created:<?php echo $project_data->data_created;?></p>
    <h1>Description</h1>
    <p><?php echo $project_data->project_body;?></p>
</div>
<div class="col-xs-3">
<ul class="line-blocki">
    <h4>project action</h4>
    <li class="list-group-item"><a href="<?php echo base_url()?>index.php/task/create/<?php echo $project_data->id?>"> Creat Task</a></li>
    <li class="list-group-item"><a href="<?php echo base_url()?>index.php/projects/edit/<?php echo $project_data->id; ?>"> Edit Project</a></li>
    <li class="list-group-item"><a href="<?php echo base_url()?>index.php/projects/delete/<?php echo $project_data->id; ?>"> Delete Project</a></li>
</ul>
</div>