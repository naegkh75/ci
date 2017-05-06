<?php
/**
 * Created by PhpStorm.
 * User: nae
 * Date: 9/18/2016
 * Time: 4:43 AM
 */
class Home extends CI_Controller
{

    public function index()
    {
        if($this->session->userdata('logged_in'))
        {
           $user_id=$this->session->userdata('user_id');
            $data['pj']=$this->project_model->get_all_project($user_id);
        }
        $data['main_view']="home_view";
        $this->load->view('layot/main',$data);
    }
}