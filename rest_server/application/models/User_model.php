<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User_model extends CI_Model {

	public function getNilai($where)
	{
        return $this->db->get_where('t_nilai',$where);
    }
    
    public function deleteNilai($id){
        $where = array(
            'id_user' =>$id
        );
        $this->db->delete('t_nilai',$where);
        return $this->db->affected_rows(); 
    }
    
    public function createNilai($data){
        $this->db->insert('t_nilai',$data);
        return $this->db->affected_rows(); 
    }
    
    public function updateNilai($data,$id){
        $where = array(
            'id_user' =>$id
        );
        $this->db->update('t_nilai',$data,$where);
        return $this->db->affected_rows(); 
    }
}
