<h1>Tasks view display</h1>
<table class="table table-hover table-bordered">
    <thead>
    <tr>

        <th>Task Name</th>

        <th>Task body</th>
        <th>Data</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div class="task-name">
                    <?php echo $task->task_name; ?>
                </div>
                <div>
                    <a href="<?php echo base_url()?>index.php/task/edit/<?php echo $task->id;?>">edit</a>
                    <a href="<?php echo base_url()?>index.php/task/delete/<?php echo $task->id;?>">delete</a>
                </div>

            </td>
            <td><?php echo $task->task_body; ?></td>
            <td><?php echo $task->datacreted; ?></td>

        </tr>
    </tbody>
</table>