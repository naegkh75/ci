<?php
/**
 * Created by PhpStorm.
 * User: nae
 * Date: 9/18/2016
 * Time: 4:56 AM
 */

class User extends CI_Controller
{
 public function register()
 {
     $this->form_validation->set_rules('first_name','First Name','trim|required|min_length[3]');
     $this->form_validation->set_rules('last_name','Last name','trim|required|min_length[3]');
     $this->form_validation->set_rules('email','Email','trim|required|min_length[3]');
     $this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
     $this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
     $this->form_validation->set_rules('confirmpassword','confirmPassword','trim|required|min_length[3]|matches[password]');
     if ($this->form_validation->run()==false)
     {
       $data['main_view']="users/register_view";
         $this->load->view('layot/main',$data);
       
     }else
     {
         if($this->user_model->creat_user())
         {
             $this->session->set_flashdata('user_register','user has ben register ');
             redirect('home/index');
         }else
         {

         }

     }

 }
    public function sendemail(){
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'golkhanynaeim@yahoo.com',
            'smtp_pass' => 'n13751375', );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('email@gmail.com', 'Name');
        $this->email->to('golkhaniali7677@gmail.com');
        $this->email->subject(' My mail through codeigniter from localhost ');
        $this->email->message('Hello World…');
        if (!$this->email->send()) {
            show_error($this->email->print_debugger()); }
        else {
            echo 'Your e-mail has been sent!';
        }
    }
    public function login()
  {
      $this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
      $this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
      $this->form_validation->set_rules('confirmpassword','confirmPassword','trim|required|min_length[3]|matches[password]');
      if ($this->form_validation->run()==false)
      {
          $data=array(
              'errors'=>validation_errors()
          );
          $this->session->set_flashdata($data);
          redirect('home');
      }else
      {
          $username=$this->input->post('username');
          $password=$this->input->post('password');
          $user_id=$this->user_model->login_users($username,$password);
          if ($user_id)
          {
              $user_data=array(
                  'user_id'=>$user_id,
                  'username'=>$username,
                  'logged_in'=>true
              );
              $this->session->set_userdata($user_data);
              $this->session->set_flashdata('login_success',"you now logged in");
             // $data['main_view']="admin_view";
             // $this->load->view('layot/main',$data);
              redirect('home/index');

          }else
              {
                  $this->session->set_flashdata('login_failed',"sorry you are not logged in");
                  redirect('home/index');

              }
      }
  }



  public function logout()
  {
      $this->session->sess_destroy();
      redirect('home/index');
  }

}