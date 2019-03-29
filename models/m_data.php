<?php

class M_data extends CI_Model{
	function data($number,$offset){
		return $query = $this->db->get('user',$number,$offset)->result();
	}

	function jumlah_data(){
		return $this->db->get('user')->num_rows();
	}

  function search($keyword)
    {
        $this->db->like('nama',$keyword);
        $this->db->or_like('nim',$keyword);
        $this->db->or_like('kelas',$keyword);
        $query  =   $this->db->get('user');
        return $query->result();
    }

    function input_data($data,$table){
    		$this->db->insert($table,$data);
    	}

      function edit_data($id,$data)
    {
        	$this->db->where('id', $id);
			$this->db->update('user', $data);
			//print_r($data);
	}

      public function hapus_data($id)
          {

             $this->db->where('id',$id);
             $this->db->delete('user');

          }

          public function get_data($id){

			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('id',$id);

			$query = $this->db->get();
			return $query->result();
	}
}
