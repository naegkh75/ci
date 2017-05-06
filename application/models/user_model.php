<?php
/**
 * Created by PhpStorm.
 * User: nae
 * Date: 9/18/2016
 * Time: 4:54 AM
 */

class User_model extends CI_Model
{

public function creat_user()
{
    $option=['cost'=>12];
    $encrypt_pass=password_hash($this->input->post('password'),PASSWORD_BCRYPT,$option);
    $data=array(
        'first_name'=>$this->input->post('first_name'),
        'last_name'=>$this->input->post('last_name'),
        'email'=>$this->input->post('email'),
        'username'=>$this->input->post('username'),
        'password'=>$encrypt_pass
    );
    $insert_data=$this->db->insert('users',$data);
    return $insert_data;
}
public function login_users($username,$password)
{
    $this->db->where('username',$username);
    $result=$this->db->get('users');
    $db_password=$result->row(2)->password;
    if(password_verify($password,$db_password))
    {
        return $result->row(0)->id;
    }else
    {
        return false;
    }

}
}