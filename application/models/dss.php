<?php
Class dss extends CI_Model
{
  public function __construct() {
    parent::__construct();
  }

  function addDSS($data){
  	$this->db->insert('dss', $data);
	if ($this->db->affected_rows() > 0) {
		return true;
	}else {
		return false;
	}

  }

  function getAllDSS(){
  	$this->db->select('*');
  	$this->db->from('dss');
  	$query = $this->db->get();
    return $query->result();
  }


  function editDSS($data){
	  $this->db->where('name', $username);
	  $this->db->update('dss', $data);
	  if ($this->db->affected_rows() > 0) {
	    return true;
	  }else {
	    return false;
	  }
  }

 function getDSSbyName($name){
 	$this->db->select('*');
	$this->db->from('dss');
	$this->db-> where('dss_name', $name);
	$this->db->limit(1);
	$query = $this -> db -> get();
	if($query -> num_rows() == 1)
	{
	  return $query->result();
	}
	else
	{
	 return false;
	}
 }

}