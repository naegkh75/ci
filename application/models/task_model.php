<?php
/**
 * Created by PhpStorm.
 * User: nae
 * Date: 12/11/2016
 * Time: 4:07 PM
 */
class Task_model extends CI_Model
{
public function get_task($task_id)
{
    $this->db->where('id',$task_id);
    $query=$this->db->get('task');
    return $query->row();
}
public function create_task($data)
{
    $query=$this->db->insert('task',$data);
    return $query;
}

public function get_task_project_id($task_id)
{
    $this->db->where('id',$task_id);
    $query=$this->db->get('task');
    return $query->row()->id;
}
public function get_project_name($project_id)
{
    $this->db->where('id',$project_id);
    $query=$this->db->get('projects');
    return $query->row()->project_name;
}
public function get_task_project_data($task_id)
    {
        $this->db->where('id',$task_id);
        $query=$this->db->get('task');
        return $query->row();
    }
}