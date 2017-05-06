<?php
/**
 * Created by PhpStorm.
 * User: nae
 * Date: 9/18/2016
 * Time: 4:43 AM
 */
class projects extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      if (!$this->session->userdata('logged_in')){
          $this->session->set_userdata('no','salam salam jdhgdfkg');
          redirect('home/index');
      }
  }

    public function index()
    {
        $data['projects']=$this->project_model->get_projects();
        $data['main_view']="projects/index";
        $this->load->view('layot/main',$data);
    }
    public function display($project_id)
    {
        $data['project_data']=$this->project_model->get_project($project_id);
        $data['main_view']="projects/display";
        $this->load->view('layot/main',$data);
    }
    public function create()
    {
        $this->form_validation->set_rules('project_name','project Name','trim|required');
        $this->form_validation->set_rules('project_body','project description','required|trim');
        if ($this->form_validation->run()==false)
        {
            $data['main_view']="projects/create_project";
            $this->load->view('layot/main',$data);

        }else
        {
            $data=array(
                'project_user_id'=>$this->session->userdata('user_id'),
                'project_name'=>$this->input->post('project_name'),
                'project_body'=>$this->input->post('project_body')
            );
            if ($this->project_model->create_project($data))
            {
                $this->session->set_flashdata('project_created','the project has been created');
                redirect('projects/index');
            }
        }
    }

    public function edit($project_id)
    {
        $this->form_validation->set_rules('project_name','project Name','trim|required');
        $this->form_validation->set_rules('project_body','project description','required|trim');
        if ($this->form_validation->run()==false)
        {
            $data['project_data']=$this->project_model->get_project_info($project_id);
            $data['main_view']="projects/edit_project";
            $this->load->view('layot/main',$data);

        }else
        {
            $data=array(
                'project_user_id'=>$this->session->userdata('user_id'),
                'project_name'=>$this->input->post('project_name'),
                'project_body'=>$this->input->post('project_body')
            );
            if ($this->project_model->edit_project($project_id,$data))
            {
                $this->session->set_flashdata('project_update','the project has been updated');
                redirect('projects/index');
            }
        }
    }


    //start of deeleted
    public function delete($project_id)
    {
        $this->project_model->delete_project($project_id);
        $this->session->set_flashdata('project_deleted','the project has been delete');
        redirect('projects/index');
    }
}