<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin_model extends CI_Model {

	public function userCount($where)
	{
        return $this->db->get_where('t_user',$where);
    }	
    
    public function lakiCount($where)
	{
        return $this->db->get_where('t_user',$where);
    }
    
    public function perempuanCount($where)
	{
        return $this->db->get_where('t_user',$where);
    }
    
    public function allData()
	{
        $this->db->select('nama,tempat_lahir,tanggal_lahir,jk,alamat,matematika,indonesia,ipa,inggris');
        $this->db->from('t_user');
        $this->db->join('t_nilai', 't_user.id = t_nilai.id_user');
        $query = $this->db->get();
        
        return $query;
    }
    
    public function maxData()
	{
        $this->db->select('MAX(matematika) as maxMtk, MAX(indonesia) as maxIndo, MAX(ipa) as maxIpa, MAX(inggris) as maxIng');
        $this->db->from('t_nilai');
        $query = $this->db->get();
        
        return $query;
    }
    
    public function nilaiData()
	{
        return $this->db->get('t_nilai');
    }
    
    public function updateNilai($data,$id){
        $where = array(
            'id_user' =>$id
        );
        $this->db->update('t_nilai',$data,$where);
        return $this->db->affected_rows(); 
    }
    
    public function getSaw()
	{
        $this->db->select('id,username,password,nama,tempat_lahir,tanggal_lahir,jk,alamat,status_lulus,matematika,indonesia,ipa,inggris,saw');
        $this->db->from('t_user');
        $this->db->join('t_nilai', 't_user.id = t_nilai.id_user');
        $this->db->order_by('saw', 'DESC');
        
        $query = $this->db->get();
        
        return $query;
    }
    
    public function getLulus($where)
	{
        $this->db->select('username,nama,jk,status_lulus,jumlah,saw');
        $this->db->from('t_user');
        $this->db->join('t_nilai', 't_user.id = t_nilai.id_user');
        $this->db->where($where);
        $this->db->order_by('saw', 'DESC');
        
        $query = $this->db->get();
        
        return $query;
    }	
   
}
