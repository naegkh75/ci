<?php
/**
 * Created by PhpStorm.
 * User: nae
 * Date: 12/20/2016
 * Time: 6:50 PM
 */
class Project_model extends CI_Model
{
    public function get_project($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->get('projects');
        return $query->row();

    }
    public function get_projects()
    {
        $query=$this->db->get('projects');
        return $query->result();
    }
    public function get_all_project($user_id)
    {
        $this->db->where('project_user_id ',$user_id);
        $query=$this->db->get('projects');
        return $query->result();
    }

    public function create_project($data)
    {
        $inser_query=$this->db->insert('projects',$data);
        return $inser_query;
    }
    public function edit_project($project_id,$data)
    {
        $this->db->where('id',$project_id);
        $this->db->update('projects',$data);
        return true;
    }
    public function delete_project($project_id)
    {
        $this->db->where('id',$project_id);
        $this->db->delete('projects');

    }
    public function get_project_info($project_id)
    {
        $this->db->where('id',$project_id);
        $project_data=$this->db->get('projects');
        return $project_data->row();
    }
}