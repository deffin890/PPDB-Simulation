<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login_model extends CI_Model {

	public function getUser($where)
	{
        return $this->db->get_where('t_user',$where);
    }
    
    public function deleteUser($id){
        $where = array(
            'id' =>$id
        );
        $this->db->delete('t_user',$where);
        return $this->db->affected_rows(); 
    }
    
    public function createUser($data){
        $this->db->insert('t_user',$data);
        return $this->db->affected_rows(); 
    }
    
    public function updateUser($data,$id){
        $where = array(
            'id' =>$id
        );
        $this->db->update('t_user',$data,$where);
        return $this->db->affected_rows(); 
    }
    
    public function updatePass($password,$id){
        $this->db->set('password',$password);
        $this->db->where('id',$id);
        $this->db->update('t_user');
        return $this->db->affected_rows(); 
    }
}
