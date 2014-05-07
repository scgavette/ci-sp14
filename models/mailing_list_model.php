<?php

class Mailing_list_model extends CI_Model{
    //creates an active connection to DB
    public function __construct(){
        
        $this->load->database();
        
    }//end constructor
    
    public function get_mailing_list(){
    //will show all the data in a table named mail_list    
        
        //$query = $this->db->get('mailing_list');
       // return $query->result_array();
       
       return $this->db->get('mailing_list');
    }//end mailing list
    
    public function get_id($id){ 
        
       // $this->db->select('userid, first_name, last_name');
        $this->db->where('userid',$id);
       
       return $this->db->get('mailing_list');
    }// end get id
    
    public function insert($row)
    {
     $this->db->insert('mailing_list', $row);   
    }//end insert
}
?>